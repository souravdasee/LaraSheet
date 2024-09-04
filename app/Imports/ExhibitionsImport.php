<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ExhibitionsImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            1 => new FirstSheetImport(),
            2 => new FirstSheetImport()
        ];
    }
}
