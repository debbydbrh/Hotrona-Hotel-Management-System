<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksibarang extends Model
{
    protected $table = 'transaksibarang';
    protected $fillable=['nama_barang','jumlah_barang','tanggal_masuk_barang','kategori','biaya'];
}
