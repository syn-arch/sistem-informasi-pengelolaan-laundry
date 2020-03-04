<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Transaksi;
use App\Member;

class DashboardController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$data['judul'] = "Dashboard";
    	$data['baru'] = Transaksi::where('status', 'Baru')->get()->count();
    	$data['diproses'] = Transaksi::where('status', 'Proses')->get()->count();
    	$data['selesai'] = Transaksi::where('status', 'Selesai')->get()->count();
    	$data['diambil'] = Transaksi::where('status', 'Diambil')->get()->count();
    	$data['member'] = Member::all()->count();
    	$data['transaksi'] = Transaksi::where('dibayar', 'Dibayar')->get()->count();
    	$data['transaksi_terakhir'] = Transaksi::latest('id')->limit(10)->get();

    	return view('dashboard', $data);
    }
}
