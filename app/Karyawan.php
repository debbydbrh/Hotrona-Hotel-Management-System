<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable=['nama','jenis_kelamin','alamat','no_hp','user_id',];

    // public function getAvatar()
    // {
    //     if(!$this->avatar){
    //         return asset('images/default.jpg');
    //     }

    //     return asset('images/' .$this->avatar);
    // }
    
}
