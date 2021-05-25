<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table='bills';
     public function cthd()
    {
        return $this->hasMany('App\Models\CTHD','id_bill','id');
    }
     public function customer()
    {
        return $this->belongsTo('App\Models\Customer','id_customer','id');
    }
}
