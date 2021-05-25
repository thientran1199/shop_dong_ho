@extends('quantri.masterQT')
@section('title','Quản Lý Nhập Hàng')
@section('quanly')


<div>
	<div>
	<h3 style="font-family: cursive;margin-left: 10px; margin-top: 0px" >Quản Lý Đơn Nhập Hàng {{-- &nbsp;/&nbsp;{{count($hd)}} Đơn Hàng --}}</h3>
	<div style="margin-top: 20px">

		@if(Session::has('thanhcong'))
			<div class="alert alert-success">
				{{Session::get('thanhcong')}}
			</div>
			@endif
		</div>
	<br><br>
	<form class="form-inline">
		<input class="timkiem form-control " id="search" name="search" type="text" placeholder="Tìm kiếm" style="width: 600px; margin-left: 220px	">
	</form>
	</div>
	<br><br><br>
	<button class="btn btn-danger float-right" style="margin-right: 7px; margin-left: 10px"><a href=""  style="color: white;text-decoration: none;float: left;">Tạo mới</a></button>
	{{-- <button class="btn btn-danger float-right" style="margin-right: 7px"><a href="{{ route('qlhd') }}" style="color: white;text-decoration: none;">Làm mới</a></button> --}}
	<br><br>
	<table class="table table-bordered  table-hover "  id="" style="margin:10px;">

		<tr class="bg-danger ">

			<th>Stt</th>
			<th >Tên Nhân Viên</th>
			<th>Tổng tiền</th>
			<th>Ghi chú</th>
			<th>Trạng thái</th>
			<th>Ngày tạo</th>
			
			<th colspan="3" style="text-align: center;">Chức năng</th>
		</tr>
		
		<tbody class="danhsach">
			@php
				$stt=0;
				if(isset($_GET['page'])){
					$a=$_GET['page'];
				}
				else{
					$a=1;
				}
				$stt=($a-1)*20;
			@endphp
		@foreach($hoadon as $h_d)
			@php
			$stt++;	
			@endphp
		<tr>
			<td>{{$stt}}</td>
			<td>{{$h_d->nhanvien->ho_ten}}</td>
			<td>{{number_format($h_d->total)}} VNĐ</td>
			
			<td>{{$h_d->note}}</td>
			<td>{{$h_d->trang_thai}}</td>
			<td>{{$h_d->date}}</td>
			<td><button type="button" class="btn btn-primary" ><a href="{{ route('cthd',$h_d->id) }}"  style="color:white">CT</a></button></td>
		</tr>
		@endforeach
		
		</tbody>

	</table>

</div>
<div  style="margin-left: 10px">
	<tr>
			{{$hoadon->links()}}
		</tr>
</div>
  	
 
<script type="text/javascript">
	
	$('#search').on('keyup',function(){
		$value = $(this).val();
		$.ajax({

			type : 'get',
			url  :  '{{route('searchDH')}}',
			data : {'search':$value},
			success:function(data){
				$('.danhsach').html(data);
			}
		});
	})

</script>

@endsection