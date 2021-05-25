@extends('giaodien.master')
@section('title','Đồng Hồ Đôi')
@section('content')
<br><br>
<div style="width: 100%; height: 65px; background-color: #ECE7E7">
	<p style="font-size: 28px;text-align: center;margin-right: 35px">ĐỒNG HỒ ĐÔI</p>
</div>
<br>
<br>
<div class="row">
  @foreach($ncc as $th)
  <div class="col-lg-1" style="margin-left: 35px; margin-top: 20px; margin-bottom: 10px">
   <a href="{{ route('thuonghieu',$th->id) }}"><img src="{{asset('upload/producer/'.$th->image_producer)}}" width="100" height="66"></a>
 </div>
 @endforeach
</div>
<br>
<br>
<br>
<div>
 <p style="margin-left: 100px; font-size: 14px;">Trang Chủ &nbsp;/&nbsp; Đồng Hồ Đôi &nbsp;/&nbsp;Hiển thị {{count($dhdoi)}} kết quả</p>

</div>
<br>
<br>
<div class="row" style="margin-right: 50px;margin-left: 50px">
  @foreach($dhdoi as $doi)

  <div class="col-lg-3">
   <a href="{{ route('chitiet',$doi->id) }}"> <img class="image" src="{{asset('upload/product/'.$doi->image)}}" width="250" height="300" style="margin-left: 50px"></a>
   <div class="middle">
    <div class="text"><a style="color:black;text-decoration: none;" href="{{ route('themgiohang',$doi->id) }}"><i class="fas fa-cart-plus"></i>&nbsp;Mua ngay</a></div>
  </div>
  <p style="font-size: 14px;text-align: center; margin-left: 100px;margin-top: 10px ">
   <a style="color:black;text-decoration: none;" href="{{ route('chitiet',$doi->id) }}"> {{$doi->name_product}}</a>
 </p>
 @if($doi->discount == 0)
 <p style="font-size: 15px;text-align: center; margin-left: 100px;  color: orange">{{number_format($doi->price)}} đ</p>
 @else
 <p style="font-size: 15px;text-align: center; margin-left: 100px;  color: orange"><strike style="color: grey; margin-right: 10px;">{{number_format($doi->price)}} đ</strike>{{number_format($doi->discount)}} đ</p>
 @endif
</div>
@endforeach

</div>
  <!-- <div>
    <button style="margin-top: 30px; margin-left: 640px; margin-bottom: 30px">XEM THÊM</button>
  </div> -->
  <div class="row">
  	<p style="margin-left: 150px">{{$dhdoi->links()}}</p>
  </div>

  @endsection
