<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelInventaris extends Model
{
    protected $table = 'inventaris';

    protected $fillable = ['nama_barang','no_inventaris','jumlah','satuan','harga_barang_item','bagian','kedudukan','tahun'];
}
