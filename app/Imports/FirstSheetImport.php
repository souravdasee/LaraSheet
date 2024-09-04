<?php

namespace App\Imports;

use App\Models\Exhibition;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FirstSheetImport implements ToModel, WithHeadingRow
{
    public function headingRow(): int
    {
        return 2;   // heading starts on column position B
    }

    public function startRow(): int
    {
        return 2;   // heading starts on row position 2
    }

    public function model(array $row)
    {
        return new Exhibition([
            'section'   => $row['section'],
            'country'   => $row['country'],
            'award'     => $row['award'],
        ]);
    }
}
