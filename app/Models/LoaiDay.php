<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiDay extends Model
{
    use HasFactory;

    protected $table='loai_day';


    public function sanpham()
    {
    	return $this->hasMany('App\Models\SanPham','id_day','id');
    }

    public function loaimay()
    {
    	return $this->hasManyThrough('App\Models\LoaiMay','App\Models\SanPham','id_loai','id_day','id');
    }
}
