<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiMay extends Model
{
    use HasFactory;

    protected $table='loai';


    public function sanpham()
    {
    	return $this->hasMany('App\Models\SanPham','id_loai','id');
    }
     public function loaiday()
    {
    	return $this->hasManyThrough('App\Models\LoaiDay','App\Models\SanPham','id_product','id_day','id_loai');
    }
}
