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
        <div class="col-lg-12">
            <div class="white-box">
                <div class="box-header">
                    <div class="pull-left">
                        <h3 class="box-title">Laporan Transaksi</h3>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Harga</th>
                                    <th>Total Transaksi</th>
                                    <th>Total Pembelian Paket</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($paket as $row): ?>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$row->nama_paket}}</td>
                                    <td>{{'Rp. ' . number_format($row->harga)}}</td>
                                    <td>
                                        {{count(App\DetailTransaksi::where('id_paket', $row->id)->get())}}
                                    </td>
                                    <td>
                                        {{App\DetailTransaksi::where('id_paket', $row->id)->sum('qty')}}
                                    </td>
                                    <td>
                                        {{"Rp. " . number_format(App\DetailTransaksi::where('id_paket', $row->id)->sum('jumlah_harga'))}}
                                    </td>
                                </tr>
                                <?php endforeach ?>
                                <tr>
                                    <td colspan="4"></td>
                                    <th>Total Pendapatan</th>
                                    <th>{{ "Rp. " . number_format(App\Transaksi::sum('total_bayar')) }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
    </body>
    </html>
