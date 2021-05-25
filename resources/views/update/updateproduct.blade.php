@extends('quantri.masterQT')
@section('title','Sửa sản phẩm')
@section('quanly')

<h3 style="font-family: cursive;margin-left: 10px;margin-top: 0px" >Sửa Sản Phẩm </h3>

<form method="post" action="{{ route('updateproduct',$sanpham->id) }}" enctype="multipart/form-data">
	{{csrf_field()}}

	<div style="margin-left: 15px; margin-right: 15px">
		<label style="margin-top: 10px;">Tên</label>
		<input type="text" name="ten"  class="form-control" style="margin-bottom: 30px;" required value="{{$sanpham->name_product}}">
		<table>
			<tr>
				<td>
					loai-may: <select class="form-control" style="margin-bottom: 30px;" name="loaimay" >
						<option value="1">cơ</option>
						<option value="2">pin</option>
						<option value="4">eco</option>
						<option value="3">treo tường</option>
						<option value="5">automatic</option>
						<option value="6">năng lượng mặt trời</option>
						<option value="7">salar</option>
						<option value="8">kinetic</option>

					</select>
				</td>
				<td>
					NSX:<select class="form-control" style="margin-bottom: 30px;" name="nsx">
						<option value="1">CASIO</option>
						<option value="2">CALVIN KLEIN</option>
						<option value="3">ALEXANDRE CHRISTIE</option>
						<option value="4">CANDINO</option>
						<option value="5">CITIZEN</option>
						<option value="6">COVER</option>
						<option value="7">DANIEL WELLINGTON</option>
						<option value="8">ELLE</option>
						<option value="9">FOSSIL</option>
						<option value="10">G_SHOCK</option>
						<option value="11">LOUIS ERARD</option>
						<option value="12">OLYMPIA STAR</option>
						<option value="13">OLYM PIANUS</option>
						<option value="14">ORIENT</option>
						<option value="15">TISSOT</option>
						<option value="16">SEIKO</option>
						<option value="17">SUNRISE</option>
					</select>
				</td>
				<td>
					loai-day:<select class="form-control" style="margin-bottom: 30px;" name="loaiday">
						<option value="1">Dây da</option>
						<option value="2">Dây inox</option>
						<option value="3">Dây cao su</option>
						<option value="4">Dây lưới</option>
						<option value="5">Dây vải</option>
						<option value="6">Dây titanium</option>

					</select>
				</td>
				<td>
					mã:<input type="text" name="madh"  class="form-control" style="margin-bottom: 30px;" required value="{{$sanpham->ma}}">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					ảnh:<br>
                    <img src="{{asset('upload/product/'.$sanpham->image)}}" width="150px" height="150px" alt="">
					<input id="ckfinder-input-1" type="file" name="image" class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->image_link}}" required >
					<button type="button" id="ckfinder-popup-1" class="button-a button-a-background" style="margin-top: -15px">Browse</button>
				</td>

			</tr>
		</table>
		<br><br>
		Mô tả:
		<textarea class="ckeditor" id="mota" name="mota" rows="10" cols="100" style="margin-bottom: 30px" required >{{$sanpham->content}}</textarea>
		<script type="text/javascript">
		CKEDITOR.replace( 'mota', {
        filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
		</script>
		<table >
			<tr>
				<td>
					giá:
					<input type="number" name="gia"  class="form-control" style="margin-bottom: 30px;" required value="{{$sanpham->price}}">
				</td>
				<td>
					giảm giá:

					<input type="number" name="giamgia"  class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->discount}}">
				</td>
				{{-- <td>
					ảnh:<input type="text" name="imagelink"  class="form-control" style="margin-bottom: 30px;" required value="{{$sanpham->image_link}}">
				</td> --}}
				<td>
					size:<input type="text" name="size"  class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->size_mat_so}}">
				</td>
				<td>
					dạng:<input type="text" name="dang"  class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->dang_mat_so}}">
				</td>
			</tr>
			<tr>
				<td>
					ngày đăng:
					<input type="date" name="ngaydang"  class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->created_product}}">
				</td>
				<td>
					Urlanh:
					<input type="text" name="imagelist"  class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->image_list}}">
				</td>
				<td>
					giới tính:
					<select class="form-control" style="margin-bottom: 30px;" name="gioitinh">
						<option value="nam">Nam</option>
						<option value="nữ">Nữ</option>
						<option value="đôi">Đôi</option>


					</select>
				</td>
				<td>
					loại kính:<input type="text" name="loaikinh"  class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->loai_kinh}}">
				</td>
				<td>
					bảo hành: <input type="text" name="baohanh"  class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->bao_hanh}}">
				</td>
			</tr>
			<tr>
				<td>
					chống nước:<input type="text" name="chongnuoc"  class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->chong_nuoc}}">
				</td>
				<td>
					xuất xứ:<input type="text" name="xuatxu"  class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->xuat_xu}}">
				</td>
				<td>
					trạng thái:<input type="text" name="trangthai"  class="form-control" style="margin-bottom: 30px;" value="{{$sanpham->trang_thai}}">
				</td>
			</tr>
		</table>
		<input type="submit" name="submit" class="form-control " value="Ok">
	</div>
</form>


<script >


	var button1 = document.getElementById( 'ckfinder-popup-1' );

	button1.onclick = function() {
		selectFileWithCKFinder( 'ckfinder-input-1' );
	};


	function selectFileWithCKFinder( elementId ) {
		CKFinder.popup( {
			chooseFiles: true,
			width: 800,
			height: 600,
			onInit: function( finder ) {
				finder.on( 'files:choose', function( evt ) {
					var file = evt.data.files.first();
					var output = document.getElementById( elementId );
					output.value = file.getUrl();
				} );

				finder.on( 'file:choose:resizedImage', function( evt ) {
					var output = document.getElementById( elementId );
					output.value = evt.data.resizedUrl;
				} );
			}
		} );
	}

</script>

@endsection

