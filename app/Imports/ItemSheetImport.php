<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ItemSheetImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            1 => new ItemTableImport(),
            2 => new ItemTableImport()
        ];
    }
}
