<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;

    protected $table='nhan_vien';

    public function hoadonnhap()
    {
        return $this->belongsTo('App\Models\HoaDonNhap','id_NV','id');
    }
}
