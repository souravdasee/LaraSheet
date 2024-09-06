<?php

namespace App\Imports;

use App\Models\Exhibition;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;


class FirstSheetImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    public function headingRow(): int
    {
        return 2;   // header row pos.
    }

    public function startRow(): int
    {
        return 2;   // header column pos.
    }

    public function model(array $row)
    {
        return new Exhibition([
            'section'   => $row['section_name'],
            'country'   => $row['country'],
            'award'     => $row['award_status'],
        ]);
    }

    // // skipping empty rows
    // public function isEmptyWhen(array $row): bool
    // {
    //     return $row['section'] === null;
    //     return $row['country'] === null;
    //     return $row['award'] === null;
    // }
}
