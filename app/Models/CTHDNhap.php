<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTHDNhap extends Model
{
    use HasFactory;
    protected $table='bill_import_detail';

    public function sanpham()
    {
        return $this->belongsTo('App\Models\SanPham','id_product','id');
    }
     public function hoadonnhap()
    {
        return $this->belongsTo('App\Models\HoaDonNhap','id_bill_import','id');
    }
}
