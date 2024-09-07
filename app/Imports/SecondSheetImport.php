<?php

namespace App\Imports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;


class SecondSheetImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    public function headingRow(): int
    {
        return 4;   // header row pos.
    }

    public function startRow(): int
    {
        return 6;   // header column pos.
    }

    public function model(array $row)
    {
        if ($row['no_of_items'] !== null) {
            return new Participant([
                'name'   => $row['name'],
                'age'   => $row['age_year'],
                'item'     => $row['no_of_items'],
            ]);
        } else {
            return null;
        }
    }

    // skipping empty rows
    public function isEmptyWhen(array $row): bool
    {
        return $row['name'] === null;
        return $row['age'] === null;
        return $row['item'] === null;
    }
}
