<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable=['nik_pemesan','nama_pemesan','alamat','jumlah_kamar','tanggal_check_in','tanggal_check_out','tipe_kamar','harga_kamar'];
}
