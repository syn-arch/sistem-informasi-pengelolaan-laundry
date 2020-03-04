<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
}
