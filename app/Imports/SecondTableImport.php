<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class SecondTableImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            1 => new SecondSheetImport(),
            2 => new SecondSheetImport()
        ];
    }
}
