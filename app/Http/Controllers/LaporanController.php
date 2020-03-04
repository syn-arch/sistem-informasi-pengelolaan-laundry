<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Auth; 
use PDF;

class LaporanController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$data['judul'] = "Laporan Transaksi";

    	return view('laporan.index', $data);
    }

    public function get_laporan(Request $request)
    {
    	$data['judul'] = "Data Laporan";
    	$data['dari_tanggal'] = date('d-m-Y', strtotime($request->dari_tanggal));
    	$data['sampai_tanggal'] = date('d-m-Y', strtotime($request->sampai_tanggal));
    	// raw
    	$data['dari_tanggal_raw'] = $request->dari_tanggal;
    	$data['sampai_tanggal_raw'] = $request->sampai_tanggal;
    	$data['laporan'] = Transaksi::where('dibayar', 'Dibayar')->whereBetween('tgl', [$request->dari_tanggal, $request->sampai_tanggal])->get();
    	$data['total_pendapatan'] = Transaksi::where('dibayar', 'Dibayar')->whereBetween('tgl', [$request->dari_tanggal, $request->sampai_tanggal])->sum('total_bayar');

    	return view('laporan.data-laporan', $data);
    }

    public function cetak_laporan($dari_tanggal, $sampai_tanggal)
    {
    	$data['dari_tanggal'] = date('d-m-Y', strtotime($dari_tanggal));
    	$data['sampai_tanggal'] = date('d-m-Y', strtotime($sampai_tanggal));
    	$data['laporan'] = Transaksi::where('dibayar', 'Dibayar')->whereBetween('tgl', [$dari_tanggal, $sampai_tanggal])->get();
    	$data['total_pendapatan'] = Transaksi::where('dibayar', 'Dibayar')->whereBetween('tgl', [$dari_tanggal, $sampai_tanggal])->sum('total_bayar');

        $pdf = PDF::loadView('laporan.cetak-laporan', $data);
        return $pdf->download('Laporan Transaksi.pdf');

    	// return view('laporan.cetak-laporan', $data);
    }
}
