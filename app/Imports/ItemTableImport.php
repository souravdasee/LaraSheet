<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class ItemTableImport implements ToModel, WithMappedCells, WithHeadingRow, SkipsEmptyRows
{
    public function headingRow(): int
    {
        return 11;   // header row pos.
    }

    public function startRow(): int
    {
        return 7;   // header column pos.
    }

    public function mapping(): array
    {
        return [
            'item' => 'G12',
            'amount' => 'I12'
        ];
    }

    public function model(array $row)
    {
        return new Item([
            'item' => $row['item'],
            'amount' => $row['amount'],
        ]);
    }

    // skipping empty rows
    public function isEmptyWhen(array $row): bool
    {
        return $row['item'] === null;
        return $row['amount'] === null;
    }
}
