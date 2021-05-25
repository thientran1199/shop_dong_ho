<?php

use App\Models\SanPham;
use App\Models\HoaDon;
use App\Models\User;
use App\Models\Slide;
use App\Models\Comment;
use App\Models\TinTuc;

function count_item_product(){
    return $product_cnt = SanPham::where('trang_thai')->count();
}

function count_item_orders(){
    return $hoadon = HoaDon::where('trang_thai','=','Đang sử lý')->count();
}
function count_item_orders_sell(){
    return $hoadon = HoaDon::where('trang_thai','=',1)->count();
}
function count_item_user(){
    return $hoadon = User::all()->count();
}
function count_item_comment(){
    return $hoadon = Comment::all()->count();
}
function count_item_slide(){
    return $hoadon = Slide::all()->count();
}
function count_item_tintuc(){
    return $hoadon = TinTuc::all()->count();
}

function inc_number(&$i = 0){
    $i++;
    return $i;
}
?>
