<?php

namespace App\Imports;

use App\Models\Exhibition;
use Maatwebsite\Excel\Concerns\ToModel;

class FirstSheetImport implements ToModel
{
    public function model(array $row)
    {
        return new Exhibition([
            'section'   => $row[0],
            'country'   => $row[1],
            'award'     => $row[2],
        ]);
    }
}
