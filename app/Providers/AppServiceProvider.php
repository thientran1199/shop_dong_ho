<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\LoaiDay;
use App\Models\LoaiMay;
use App\Models\NSX;
use App\Models\SanPham;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {
        Paginator::useBootstrap();
        view()->composer('giaodien.top',function($view){
            $nha_sx = NSX::all();
           $view -> with('nha_sx',$nha_sx);
       });

       view()->composer('giaodien.top',function($view){
           $loai_may = LoaiMay::all();
           $view -> with('loai_may',$loai_may);
       });

       view()->composer('giaodien.top',function($view){
           $loai_day = LoaiDay::all();
           $view -> with('loai_day',$loai_day);
       });

       view()->composer('quantri.quanlysanpham',function($view){
           $s_p = SanPham::all();
           $view -> with('s_p',$s_p);
       });

       view()->composer('quantri.quanlyloaimay',function($view){
           $l_m = LoaiMay::all();
           $view -> with('l_m',$l_m);
       });



       view()->composer('giaodien.top',function($view){

           if(Session('cart')){
               $oldCart = Session::get('cart');
               $cart = new Cart($oldCart);
               $view -> with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
           }

       });

       view()->composer('giaodien.checkout',function($view){

           if(Session('cart')){
               $oldCart = Session::get('cart');
               $cart = new Cart($oldCart);
               $view -> with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
           }

       });


    }
}
