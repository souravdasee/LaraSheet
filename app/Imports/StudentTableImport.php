<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class StudentTableImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            1 => new StudentSheetImport(),
            2 => new StudentSheetImport(),
        ];
    }
}
