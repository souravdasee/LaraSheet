<?php

namespace App\Imports;

use App\Models\student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentSheetImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    public function headingRow(): int
    {
        return 15;   // header row pos.
    }

    public function startRow(): int
    {
        return 7;   // header column pos.
    }

    public function model(array $row)
    {
        return new student([
            'name'   => $row['name'],
            'age'   => $row['age'],
        ]);
    }

    // skipping empty rows
    public function isEmptyWhen(array $row): bool
    {
        return $row['name'] === null;
        return $row['age'] === null;
    }
}
