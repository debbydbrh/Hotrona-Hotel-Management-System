<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
    protected $fillable=['nomor_kamar','nama_kamar','tipe_kamar','harga','status','keterangan'];
}
