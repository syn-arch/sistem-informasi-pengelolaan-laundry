<!DOCTYPE html> <html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$judul}}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('eliteadmin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('eliteadmin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
    <link href="{{ asset('eliteadmin/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/buttons.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- This is Sidebar menu CSS -->
    <link href="{{ asset('eliteadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- This is a Animation CSS -->
    <link href="{{ asset('eliteadmin/css/animate.css')}}" rel="stylesheet">
    <!-- This is a Custom CSS -->
    <link href="{{ asset('eliteadmin/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('eliteadmin/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- Morris CSS -->
    <link href="{{ asset('eliteadmin/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <script src="{{asset('js/sweetalert.min.js')}}"></script>

</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div> -->
    
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view -->
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <!-- Logo -->
                <div class="top-left-part">
                    <a class="logo" href="/dashboard">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b><i class="fa fa-print"></i></b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">SILANDRY</span>
                    </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                    </li>
                </ul>
                <!-- This is the message dropdown -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!-- .user dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ asset('eliteadmin/plugins/images/user.png')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{Auth::user()->name}}</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="/profile"><i class="ti-user"></i> Profile Saya</a></li>
                            <li><a href="/ubah_password"><i class="ti-settings"></i> Ubah Password</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Keluar</a></li>
                        </ul>
                        <!-- /.user dropdown-user -->
                    </li>
                    <!-- /.user dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- Search input-group this is only view in mobile -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span>
                        </div>
                        <!-- / Search input-group this is only view in mobile-->
                    </li>
                    <!-- User profile-->
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{ asset('eliteadmin/plugins/images/user.png')}}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{Auth::user()->name}}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="/profile"><i class="ti-user"></i> Profile Saya</a></li>
                            <li><a href="/ubah_password"><i class="ti-settings"></i> Ubah Password</a></li>
                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Keluar</a></li>
                        </ul>
                    </li>
                    <!-- User profile-->
                    <li class="nav-small-cap m-t-10">&nbsp;&nbsp;&nbsp;&nbsp;Main Menu</li>
                    <li><a href="/dashboard" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Dashboard </span></a> </li>
                    <?php if (Auth::user()->level == "Admin" || Auth::user()->level == "Kasir"): ?>
                    <li>
                        <a href="javascript:void(0)" class="waves-effect"><i data-icon="&#xe001;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Master Data<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <?php if (Auth::user()->level == "Admin"): ?>
                                <li><a href="/user">Data User</a></li>
                                <li><a href="/outlet">Data Outlet</a></li>
                                <li><a href="/paket">Data Paket</a></li>
                            <?php endif ?>
                            <li><a href="/member">Data Member</a></li>
                        </ul>
                    </li>
                    <li><a href="/transaksi/transaksi_baru" class="waves-effect"><i data-icon="&#xe01a;" class="linea-icon linea-basic  fa-fw"></i> <span class="hide-menu">Transaksi Baru </span></a> </li>
                    <li><a href="/transaksi" class="waves-effect"><i data-icon="&#xe025;" class="linea-icon linea-basic  fa-fw"></i> <span class="hide-menu">Data Transaksi </span></a> </li>
                <?php endif ?>

                <?php if (Auth::user()->level == "Admin" || Auth::user()->level == "Owner"): ?>
                <li>
                    <a href="javascript:void(0)" class="waves-effect"><i data-icon="r" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Laporan<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="/laporan/riwayat">Riwayat Transaksi</a></li>
                        <li><a href="/laporan">Laporan Transaksi</a></li>
                    </ul>
                </li>
            <?php endif ?>
            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect"><i data-icon=">" class="linea-icon linea-basic  fa-fw"></i> <span class="hide-menu">Keluar </span></a> </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </ul>
</div>
</div>
<!-- Left navbar-sidebar end -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <!-- .page title -->
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">{{$judul}}</h4>
            </div>
            <!-- /.page title -->
            <!-- .breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">{{$judul}}</a></li>
                </ol>
            </div>
            <!-- /.breadcrumb -->
        </div>

        @yield('content')

    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> {{date('Y')}} &copy; Adiatna Sukmana </footer>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{ asset('eliteadmin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('eliteadmin/bootstrap/dist/js/tether.min.js')}}"></script>
<script src="{{ asset('eliteadmin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('eliteadmin/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
<!-- Sidebar menu plugin JavaScript -->
<script src="{{ asset('eliteadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--Slimscroll JavaScript For custom scroll-->
<script src="{{ asset('eliteadmin/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('eliteadmin/js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('eliteadmin/js/custom.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('eliteadmin/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
<!-- Morris JavaScript -->
<script src="{{ asset('eliteadmin/plugins/bower_components/raphael/raphael-min.js')}}"></script>
<script src="{{ asset('eliteadmin/plugins/bower_components/morrisjs/morris.js')}}"></script> 
<!-- Chart -->
<script src="{{ asset('eliteadmin/plugins/bower_components/Chart.js/Chart.min.js')}}"></script>
@include('sweet::alert')
@stack('js')
</body>
</html>
