
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  {{-- <base href="{{ asset('') }}"> --}}
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('admin/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin/Ionicons/css/ionicons.min.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('admin/jvectormap/jquery-jvectormap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  {{-- <script type="text/javascript" src="{{ asset('editor/ckeditor/ckeditor.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{asset('js/ckfinder/ckfinder.js') }}"></script> --}}
  {{-- <script>CKFinder.config( { connectorPath: '/ckfinder/connector' } );</script> --}}
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('homeadmin') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('image/icon/tk.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">

              <li class="user-header">
                <img src="{{asset('upload/thanhvien/'.Auth::user()->image)}}" class="img-circle" alt="User Image">

                <p>
                  {{Auth::user()->name}}
                  <small>Member since {{Auth::user()->created_at}}</small>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('dangxuat') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('upload/thanhvien/'.Auth::user()->image)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
          <a href="{{route('qlbh')}}">
            <i class="fa fa-files-o"></i>
            <span>Đơn Hàng đã bán</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">{{ count_item_orders_sell() }}</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('qlhd') }}"><i class="fa fa-circle-o"></i> Đơn Hàng</a></li>
            <li><a href="{{ route('qlhdn') }}"><i class="fa fa-circle-o"></i> Nhập Hàng</a></li>
            <li><a href="{{ route('qlbh') }}"><i class="fa fa-circle-o"></i> Bán Hàng</a></li>
            <li><a href="{{ route('TKBC') }}"><i class="fa fa-circle-o"></i> Thống Kê Doanh thu</a></li>
          </ul>
        </li>
        <li class="treeview">
            <a href="{{route('qlhd')}}">
              <i class="fa fa-files-o"></i>
              <span>Quản Lý Hoá Đơn</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">{{ count_item_orders() }}</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('qlhd') }}"><i class="fa fa-circle-o"></i> Đơn Hàng</a></li>
              <li><a href="{{ route('qlhdn') }}"><i class="fa fa-circle-o"></i> Nhập Hàng</a></li>
              <li><a href="{{ route('qlbh') }}"><i class="fa fa-circle-o"></i> Bán Hàng</a></li>
              <li><a href="{{ route('TKBC') }}"><i class="fa fa-circle-o"></i> Thống Kê Doanh thu</a></li>
            </ul>
          </li>

        <li class="treeview">
          <a href="{{route('qlsp')}}">
            <i class="fa fa-table"></i>
            <span>Quản Lý Hàng Hóa</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">{{ count_item_product() }}</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('qlsp') }}"><i class="fa fa-circle-o"></i> Đồng Hồ</a></li>
            <li><a href="{{ route('qlth') }}"><i class="fa fa-circle-o"></i> Thương Hiệu</a></li>
            <li><a href="{{ route('qllm') }}"><i class="fa fa-circle-o"></i> Loại Máy</a></li>
            <li><a href="{{ route('qlld') }}"><i class="fa fa-circle-o"></i> Loại Dây</a></li>
          </ul>
        </li>

        <li><a href="{{ route('qltv') }}"><i class="fa fa-laptop"></i> <span>Quản Lý Thành Viên</span>
             <span class="pull-right-container">
            <span class="label label-primary pull-right">{{ count_item_user() }}</span>
          </span></a></li>
        <li><a href="{{ route('qlcomment') }}"><i class="glyphicon glyphicon-comment"></i> <span>Quản Lý Comment</span>
            <span class="pull-right-container">
            <span class="label label-primary pull-right">{{ count_item_comment() }}</span>
          </span></a></li>

        <li class="treeview">
          <a href="{{route('qlSlide')}}">
            <i class="fa fa-table"></i>
            <span>Slide</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">{{ count_item_slide() }}</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('qlSlide') }}"><i class="fa fa-circle-o"></i> Slide Header</a></li>
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Slide Icon</a></li>
          </ul>
        </li>

        <li><a href="https://adminlte.io/docs"><i class="fa fa-dashboard"></i> <span>Quảng Cáo</span></a></li>
        <li><a href="{{ route('qltt') }}"><i class="fa fa-th"></i> <span>Tin Tức</span><span class="pull-right-container">
            <span class="label label-primary pull-right">{{ count_item_tintuc() }}</span>
          </span></a></li>





      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <div class="content-wrapper">
    {{-- @include('ckfinder::setup') --}}
    @section('quanly')
    @show
<br><br>
  </div>


  <footer class="main-footer" style="margin-left: 0px">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>


  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>

  <div class="control-sidebar-bg"></div>

</div>


<!-- jQuery 3 -->
<script src="{{asset('admin/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{asset('admin/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{asset('admin/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{asset('admin/chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist/js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js') }}"></script>

<script type="text/javascript">
  $('#sua').on('show.bs.modal', function (event){

    console.log('Modal Opened');

    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input'),val(recipient)
  })

</script>
</body>
</html>
