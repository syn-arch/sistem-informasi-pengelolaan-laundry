<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('eliteadmin/plugins/images/favicon.png')}}">
    <title>{{'Laporan Transaksi'}}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('eliteadmin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('eliteadmin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
    <link href="{{ asset('eliteadmin/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- This is Sidebar menu CSS -->
    <link href="{{ asset('eliteadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- This is a Animation CSS -->
    <link href="{{ asset('eliteadmin/css/animate.css')}}" rel="stylesheet">
    <!-- This is a Custom CSS -->
    <link href="{{ asset('eliteadmin/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('eliteadmin/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
</head>
<body>

    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th>Dari Tanggal</th>
                    <td>{{$dari_tanggal}}</td>
                </tr>
                <tr>
                    <th>Sampai Tanggal</th>
                    <td>{{$sampai_tanggal}}</td>
                </tr>
                <tr>
                    <th>Total Pendapatan</th>
                    <td>{{"Rp. " . number_format($total_pendapatan)}}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tgl</th>
                    <th>Tgl Dibayar</th>
                    <th>Member</th>
                    <th>Jumlah Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                @foreach($laporan as $row)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{date('d-m-Y', strtotime($row->tgl))}}</td>
                    <td>{{date('d-m-Y', strtotime($row->tgl_bayar))}}</td>
                    <td>{{$row->member->nama_member}}</td>
                    <td>{{"Rp. " . number_format($row->total_bayar)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


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
    @include('sweet::alert')
    @stack('js')
</body>
</html>
