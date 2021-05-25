<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NSX extends Model
{
    use HasFactory;
    protected $table='producer';

    public function sanpham()
   {
       return $this->hasMany('App\Models\SanPham','id_producer','id');
   }
}
