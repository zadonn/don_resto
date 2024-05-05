<?php

namespace App\Imports;

use App\Models\Menu;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class MenuImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Menu([
            'nama_menu' => $row['nama_menu'],
            'jenis_id' => $row['jenis_id'],
            'harga' => $row['harga'],
            'deskripsi' => $row['deskripsi']
        ]);
    }
    public function headingRow(): int
    {
        return 3;       
    }
}