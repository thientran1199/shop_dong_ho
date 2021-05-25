<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTHD extends Model
{
    use HasFactory;
    protected $table='bill_detail';

     public function sanpham()
    {
        return $this->belongsTo('App\Models\SanPham','id_product','id');
    }
     public function hoadon()
    {
        return $this->belongsTo('App\Models\HoaDon','id_bill','id');
    }
}
