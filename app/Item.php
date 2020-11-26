<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $fillable=['nama_barang','status','stok_barang','keterangan'];
    
}
