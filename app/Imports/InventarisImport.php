<?php

namespace App\Imports;

use App\ModelInventaris;
use Maatwebsite\Excel\Concerns\ToModel;

class InventarisImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ModelInventaris([
            'nama_barang' => $row[1],
            'no_inventaris' => $row[2],
            'jumlah' => $row[3],
            'satuan' => $row[4],
            'harga_barang_item' => $row[5],
            'bagian' => $row[6],
            'kedudukan' => $row[7],
            'tahun' => $row[8],
        ]);
    }
}
