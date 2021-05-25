<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonNhap extends Model
{
    use HasFactory;

    protected $table='bill_import';

    public function cthdn()
    {
        return $this->hasMany('App\Models\CTHDnhap','id_bill_import','id');
    }
     public function nhanvien()
    {
        return $this->belongsTo('App\Models\NhanVien','id_NV','id');
    }
}
