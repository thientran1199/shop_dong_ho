<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'as'=>'trangchu',
    'uses'=>'HomeController@home'
]);

//home
Route::get('show',[
    'as'=>'trangchu',
    'uses'=>'HomeController@home'
]);

Route::get('dong-ho-nam',[
    'as'=>'donghonam',
    'uses'=>'HomeController@dhnam'
]);

Route::get('dong-ho-nu',[
    'as'=>'donghonu',
    'uses'=>'HomeController@dhnu'
]);

Route::get('dong-ho-doi',[
    'as'=>'donghodoi',
    'uses'=>'HomeController@dhdoi'
    ]);

Route::get('top',[
    'as'=>'hot',
    'uses'=>'HomeController@dhhot'
    ]);

Route::get('treo-tuong',[
    'as'=>'treotuong',
    'uses'=>'HomeController@dhtreotuong'
    ]);




//trang phụ

Route::get('thuong-hieu/{type}',[
    'as'=>'thuonghieu',
    'uses'=>'HomeController@getthuonghieu'
]);

Route::get('loai-may/{type}',[
    'as'=>'loaimay',
    'uses'=>'HomeController@getloaimay'
]);

Route::get('loai-day/{type}',[
    'as'=>'loaiday',
    'uses'=>'HomeController@getloaiday'
]);

Route::get('chi-tiet-san-pham/{id}',[
    'as'=>'chitiet',
    'uses'=>'HomeController@getchitiet'
]);

Route::get('tin-tuc/{id}',[
    'as'=>'tintuc',
    'uses'=>'HomeController@gettintuc'
]);

//login

// Route::get('login-admin',[
// 	'as'=>'loginquantri',
// 	'uses'=>'AdminController@loginQT'
// ]);

// Route::post('login-admin',[
// 	'as'=>'loginquantri',
// 	'uses'=>'AdminController@postLoginQT'
// ]);

// Route::get('signup-admin',[
// 	'as'=>'signupAdmin',
// 	'uses'=>'AdminController@signupAdmin'
// ]);

// Route::post('signup-admin',[
// 	'as'=>'signupAdmin',
// 	'uses'=>'AdminController@postSignupAdmin'
// ]);

Route::get('login',[
    'as'=>'dangnhap',
    'uses'=>'HomeController@login'
]);

Route::post('login',[
    'as'=>'dangnhap',
    'uses'=>'HomeController@postLogin'
]);

Route::get('logout',[
    'as'=>'dangxuat',
    'uses'=>'HomeController@getLogout'
]);

Route::get('signup',[
    'as'=>'dangky',
    'uses'=>'HomeController@signup'
]);

Route::post('signup',[
    'as'=>'dangky',
    'uses'=>'HomeController@postSignup'
]);

//tìm kiếm
Route::get('search',[
    'as'=>'search',
    'uses'=>'HomeController@getSearch'
]);

//giỏ hàng

Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'HomeController@getAddtoCart'
]);

Route::get('delete-to-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'HomeController@deleteToCart'
]);

//Đặt hàng

Route::get('checkout',[
    'as'=>'dathang',
    'uses'=>'HomeController@getCheckout'
]);

Route::post('checkout',[
    'as'=>'dathang',
    'uses'=>'HomeController@postCheckout'
]);

// Comment

Route::post('comment/{id}',[
    'as'=>'binhluan',
    'uses'=>'HomeController@postComment'
]);




//home admin

Route::get('home-admin',[
    'as'=>'homeadmin',
    'uses'=>'AdminController@admin'
]);

Route::get('ql-san-pham',[
    'as'=>'qlsp',
    'uses'=>'AdminController@quanlysanpham'
]);

Route::get('ql-loai-may',[
    'as'=>'qllm',
    'uses'=>'AdminController@quanlyloaimay'
]);

Route::get('ql-loai-day',[
    'as'=>'qlld',
    'uses'=>'AdminController@quanlyloaiday'
]);

Route::get('ql-thuong-hieu',[
    'as'=>'qlth',
    'uses'=>'AdminController@quanlythuonghieu'
]);

Route::get('ql-thanh-vien',[
    'as'=>'qltv',
    'uses'=>'AdminController@quanlythanhvien'
]);

Route::get('ql-hoa-don',[
    'as'=>'qlhd',
    'uses'=>'AdminController@quanlyhoadon'
]);

Route::get('ql-hoa-don-nhap',[
    'as'=>'qlhdn',
    'uses'=>'AdminController@quanlyhoadonnhap'
]);

Route::get('ql-ban-hang',[
    'as'=>'qlbh',
    'uses'=>'AdminController@quanlybanhang'
]);

Route::get('ql-huy-hang',[
    'as'=>'qlhuyhang',
    'uses'=>'AdminController@quanlyhuyhang'
]);

Route::get('ql-tin-tuc',[
    'as'=>'qltt',
    'uses'=>'AdminController@quanlytintuc'
]);

Route::get('ql-comment',[
    'as'=>'qlcomment',
    'uses'=>'AdminController@quanlycomment'
]);

Route::get('ql-slide-header',[
    'as'=>'qlSlide',
    'uses'=>'AdminController@quanlySlide'
]);
Route::post('ql-slide-header-p',[
    'as'=>'pqlSlide',
    'uses'=>'AdminController@postquanlySlide'
]);
Route::get('delete_slide/{id}',[
    'as'=>'delete_slide',
    'uses'=>'AdminController@delete_slide'
]);

Route::get('thong-ke-bao-cao',[
    'as'=>'TKBC',
    'uses'=>'AdminController@TKBC'
]);


//Search


Route::get('QL-san-pham',[
    'as'=>'searchQT',
    'uses'=>'AdminController@Search'
]);

Route::get('QL-don-hang',[
    'as'=>'searchDH',
    'uses'=>'AdminController@SearchDH'
]);

Route::get('QL-thuong-hieu',[
    'as'=>'searchQLTH',
    'uses'=>'AdminController@SearchQLTH'
]);

Route::get('QL-loai-day',[
    'as'=>'searchQLLD',
    'uses'=>'AdminController@SearchQLLD'
]);

Route::get('QL-loai-may',[
    'as'=>'searchQLLM',
    'uses'=>'AdminController@SearchQLLM'
]);

Route::get('QL-thanh-vien',[
    'as'=>'searchQLTV',
    'uses'=>'AdminController@SearchQLTV'
]);


//product

Route::get('add-product',[
    'as'=>'addproduct',
    'uses'=>'AdminController@themsanpham'
]);
Route::post('add-product',[
    'as'=>'addproduct',
    'uses'=>'AdminController@postSanpham'
]);

Route::get('update-product/{id}',[
    'as'=>'updateproduct',
    'uses'=>'AdminController@suasanpham'
]);

Route::post('update-product/{id}',[
    'as'=>'updateproduct',
    'uses'=>'AdminController@postupdatesanpham'
]);

Route::get('xoa/{id}',[
    'as'=>'xoasp',
    'uses'=>'AdminController@xoasanpham'
]);

//producer
Route::post('add-producer',[
    'as'=>'addproducer',
    'uses'=>'AdminController@postAddth'
]);

Route::get('xoa-thuong-hieu/{id}',[
    'as'=>'deletethuonghieu',
    'uses'=>'AdminController@xoathuonghieu'
]);


//loại máy

Route::post('add-loai-may',[
    'as'=>'addloaimay',
    'uses'=>'AdminController@postAddlm'
]);

Route::get('xoa-loai-may/{id}',[
    'as'=>'deleteloaimay',
    'uses'=>'AdminController@xoaloaimay'
]);

//loại dây

Route::post('add-loai-day',[
    'as'=>'addloaiday',
    'uses'=>'AdminController@postAddld'
]);

Route::get('xoa-loai-day/{id}',[
    'as'=>'deleteloaiday',
    'uses'=>'AdminController@xoaloaiday'
]);


//User

Route::get('xoa-thanh-vien/{id}',[
    'as'=>'deletethanhvien',
    'uses'=>'AdminController@xoathanhvien'
]);


//Tin Tức

Route::get('add-tintuc',[
    'as'=>'addtintuc',
    'uses'=>'AdminController@themtintuc'
]);
Route::post('add-tintuc',[
    'as'=>'addtintuc',
    'uses'=>'AdminController@postTintuc'
]);

Route::get('update-tintuc/{id}',[
    'as'=>'updateTintuc',
    'uses'=>'AdminController@suatintuc'
]);

Route::post('update-tintuc/{id}',[
    'as'=>'updateTintuc',
    'uses'=>'AdminController@postupdateTintuc'
]);

Route::get('xoa-tin-tuc/{id}',[
    'as'=>'deleteTin',
    'uses'=>'AdminController@xoatintuc'
]);

// Đơn hàng

Route::get('ct-hd/{id}',[
    'as'=>'cthd',
    'uses'=>'AdminController@cthd'
]);

Route::post('ban-hang/{id}',[
    'as'=>'ban_hang',
    'uses'=>'AdminController@postgiao_hang'
]);

Route::post('huy-don-hang/{id}',[
    'as'=>'huy_hang',
    'uses'=>'AdminController@posthuy_hang'
]);

// Bán hàng

Route::get('banhang/{id}',[
    'as'=>'bh',
    'uses'=>'AdminController@bh'
]);

// hủy đơn hàng

Route::get('huydonhang/{id}',[
    'as'=>'huydon',
    'uses'=>'AdminController@huydon'
]);


