<div  id="footer">
         <div class="container">
          <div class="row">
            <div class="col-sm-4 s-left">
              <footer>
        <a href="index.php"><img src="{{asset('image\icon\shopdongho.jpg') }}" width="75px" height="50px" style="border: 1px solid black; margin-top: 20px; "></a>
        <p style="color: white; margin-top: 10px">ĐỊA CHỈ: HUẾ- TP.HUẾ</p>

      </footer>
            </div>
            <div class="col-sm-4" id="trogiup">
              <p style=" margin-top: 20px; "><a href="gioithieu.html" target="_blank" style="color: white">Giới thiệu</a><p>
              <p ><a href="trogiup.html" target="_blank" style="color: white">Trợ giúp</a><p>
              <p >Liên hệ: 0775275597<p>
                 {{-- @if(Auth::check())
                  <p><a href="{{ route('homeadmin') }}" style="color: white">Quản trị</a></p>
                 @else
                  <p><a href="{{ route('loginquantri') }}" style="color: white">Quản trị</a></p>
                  @endif --}}
            </div>
            <div class="col-sm-4">
              <img src="{{asset('image\icon\fb.png') }}" width="25px" height="25px" style="float: left;margin-top: 20px">
              <a href="https://www.facebook.com/profile.php?id=100007481417295" target="_blank" style="color: white"><p style="margin-top: 20px; margin-left: 10px">FaceBook</p></a>
              <br style="clear: left;">

          <img src="{{asset('image\icon\zalo.jpg') }}" width="15px" height="15px" style="float: left; margin-top: -20px;margin-left: 4px">
          <a href="#" target="_blank" style="color: white"><p style="margin-left: 27px;margin-top: -24px">Zalo</p></a>
          <br style="clear: left;">
          <img src="{{asset('image\icon\youtobe.png') }}" width="15px" height="15px" style="float: left; margin-top: -18px; margin-left: 5px">
          <a href="#" target="_blank" style="color: white"><p style="margin-left: 27px; margin-top: -24px">Youtobe</p></a>

            </div>
          </div>

         </div>
      </div>
