<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Outlet;
use App\Paket;
use Auth; 
use PDF;
use DB;

class LaporanController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function riwayat()
    {
    	$data['judul'] = "Riwayat Transaksi";
        $data['outlet'] = Outlet::all();

    	return view('laporan.riwayat', $data);
    }

    public function get_riwayat(Request $request)
    {
    	$data['judul'] = "Data riwayat";
    	$data['dari_tanggal'] = date('d-m-Y', strtotime($request->dari_tanggal));
    	$data['sampai_tanggal'] = date('d-m-Y', strtotime($request->sampai_tanggal));
    	// raw
    	$data['dari_tanggal_raw'] = $request->dari_tanggal;
    	$data['sampai_tanggal_raw'] = $request->sampai_tanggal;

    	$data['riwayat'] = Transaksi::where('dibayar', 'Dibayar')
                                        ->where('id_outlet', $request->id_outlet)
                                        ->whereBetween('tgl', [$request->dari_tanggal, $request->sampai_tanggal])->get();

        $data['paket'] = Paket::all();

    	$data['total_pendapatan'] = Transaksi::where('dibayar', 'Dibayar')
                                        ->where('id_outlet', $request->id_outlet)
                                        ->whereBetween('tgl', [$request->dari_tanggal, $request->sampai_tanggal])
                                        ->sum('total_bayar');

        $data['outlet'] = Outlet::find($request->id_outlet);

    	return view('laporan.data-riwayat', $data);
    }

    public function cetak_riwayat($id_outlet, $dari_tanggal, $sampai_tanggal)
    {
    	$data['dari_tanggal'] = date('d-m-Y', strtotime($dari_tanggal));
    	$data['sampai_tanggal'] = date('d-m-Y', strtotime($sampai_tanggal));
    	$data['riwayat'] = Transaksi::where('dibayar', 'Dibayar')
                                    ->where('id_outlet', $id_outlet)
                                    ->whereBetween('tgl', [$dari_tanggal, $sampai_tanggal])->get();
    	$data['total_pendapatan'] = Transaksi::where('dibayar', 'Dibayar')
                                                ->where('id_outlet', $id_outlet)
                                                ->whereBetween('tgl', [$dari_tanggal, $sampai_tanggal])->sum('total_bayar');

        $data['outlet'] = Outlet::find($id_outlet);

    	return view('laporan.cetak-riwayat', $data);
    }

    public function index()
    {
        $data['judul'] = "Laporan Transaksi";
        $data['outlet'] = Outlet::all();
        $data['paket'] = Paket::all();
        $data['hari_ini'] = DB::select('SELECT SUM(total_bayar) AS hari_ini FROM transaksi WHERE DATE(tgl) = DATE(NOW())')[0]->hari_ini;
        $data['minggu_ini'] = DB::select('SELECT SUM(total_bayar) AS minggu_ini FROM transaksi WHERE YEARWEEK(tgl) = YEARWEEK(NOW())')[0]->minggu_ini;
        $data['bulan_ini'] = DB::select('SELECT SUM(total_bayar) AS bulan_ini FROM transaksi WHERE MONTH(tgl) = MONTH(NOW())')[0]->bulan_ini;
        $data['tahun_ini'] = DB::select('SELECT SUM(total_bayar) AS tahun_ini FROM transaksi WHERE YEAR(tgl) = YEAR(NOW())')[0]->tahun_ini;

        $data['chart'] = DB::table('detail_transaksi')
                              ->join('paket','detail_transaksi.id_paket','=','paket.id')
                              ->select(DB::raw("nama_paket, SUM(qty) AS jumlah"))
                              ->groupBy('paket.id')  
                              ->get();

        $data['graph'] = DB::select('SELECT MONTH(tgl) AS bulan, SUM(total_bayar) AS pendapatan FROM `transaksi` GROUP BY MONTH(tgl) ORDER BY tgl ASC');

        $data['bulan'] = array(
                '01' => 'JANUARI',
                '02' => 'FEBRUARI',
                '03' => 'MARET',
                '04' => 'APRIL',
                '05' => 'MEI',
                '06' => 'JUNI',
                '07' => 'JULI',
                '08' => 'AGUSTUS',
                '09' => 'SEPTEMBER',
                '10' => 'OKTOBER',
                '11' => 'NOVEMBER',
                '12' => 'DESEMBER',
        );

        return view('laporan.index', $data);
    }

    public function cetak_laporan()
    {
       $data['judul'] = "Laporan Transaksi";
        $data['outlet'] = Outlet::all();
        $data['paket'] = Paket::all();
        $data['hari_ini'] = DB::select('SELECT SUM(total_bayar) AS hari_ini FROM transaksi WHERE DATE(tgl) = DATE(NOW())')[0]->hari_ini;
        $data['minggu_ini'] = DB::select('SELECT SUM(total_bayar) AS minggu_ini FROM transaksi WHERE YEARWEEK(tgl) = YEARWEEK(NOW())')[0]->minggu_ini;
        $data['bulan_ini'] = DB::select('SELECT SUM(total_bayar) AS bulan_ini FROM transaksi WHERE MONTH(tgl) = MONTH(NOW())')[0]->bulan_ini;
        $data['tahun_ini'] = DB::select('SELECT SUM(total_bayar) AS tahun_ini FROM transaksi WHERE YEAR(tgl) = YEAR(NOW())')[0]->tahun_ini;

        return view('laporan.cetak_laporan', $data);
    }
}
