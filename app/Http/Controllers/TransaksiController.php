<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transaksi;
use App\DetailTransaksi;
use App\Paket;
use App\Member;
use App\User;
use Hash;
use DataTables;
use Alert;
use Auth;
use DB;

class TransaksiController extends Controller
{
    public function index()
    {
        $data['judul'] =  "Data transaksi";
        $data['transaksi'] = Transaksi::all();

        return view('transaksi.data-transaksi', $data);
    }

    public function transaksi_baru()
    {
        $data['judul']  = "Transaksi Baru";
        $data['member'] = Member::all();
        $data['paket']  = Paket::all();
        $data['total'] = DetailTransaksi::where('status', 'berlangsung')->sum('jumlah_harga');

        $record = DB::table('transaksi')->latest('id')->first();

        if ($record) {
            $invoiceArr = explode('-', $record->kode_invoice);

            if ( empty($invoiceArr[0]) ){
                $data['kode_invoice'] = date('Y').'-0001';
            } else {
                $next = sprintf('%04s', $invoiceArr[1] + 1);
                $data['kode_invoice'] = $invoiceArr[0] . '-' . $next;
            }

        }else{
            $data['kode_invoice'] = date('Y') . '-0001';
        }

        return view('transaksi.transaksi', $data);
    }

    public function tambah_paket(Request $request)
    {
        $trs = Transaksi::all();

        if ($trs->isEmpty()) {
            $sql = "ALTER TABLE transaksi AUTO_INCREMENT = 0 ";
            $result = DB::select(DB::raw($sql));
        }

        if ($detail = DetailTransaksi::where('status', 'berlangsung')->first()) {
            $id_transaksi = $detail->id_transaksi;
        }else{
            $id_transaksi = Transaksi::max('id')+1;
        }

        $harga_paket = Paket::find($request->id_paket)->harga;

        $jumlah_harga = $harga_paket * $request->qty;

        $detil = new DetailTransaksi;
        $detil->id_transaksi = $id_transaksi;
        $detil->id_paket = $request->id_paket;
        $detil->qty = $request->qty;
        $detil->keterangan = $request->keterangan;
        $detil->jumlah_harga = $jumlah_harga;
        $detil->status = "berlangsung";
        $detil->save();
    }

    public function getdetailTransaksi()
    {
        $data = DB::table('detail_transaksi')
        ->join('paket', 'paket.id', '=', 'detail_transaksi.id_paket')
        ->where('status', 'berlangsung')
        ->get();

        return Datatables::of($data)->make(true);
    }

    public function batal()
    {
        DetailTransaksi::where('status', 'berlangsung')->delete();

        alert()->success('Transaksi berhasil dibatalkan', 'Pesan');
        return redirect('/transaksi/transaksi_baru');
    }

    public function hitung_total()
    {
        $total = DetailTransaksi::where('status', 'berlangsung')->sum('jumlah_harga');

        return response()->json($total);
    }

    public function store(Request $request)
    {
        if (!$request->id_member) {
            alert()->warning('Anda belum memilih member', 'Perhatian');
            return redirect('/transaksi/transaksi_baru');
        }

        $record = DB::table('transaksi')->latest('id')->first();

        if ($record) {
            $invoiceArr = explode('-', $record->kode_invoice);

            if ( empty($invoiceArr[0]) ){
                $kode_invoice = date('Y').'-0001';
            } else {
                $next = sprintf('%04s', $invoiceArr[1] + 1);
                $kode_invoice = $invoiceArr[0] . '-' . $next;
            }

        }else{
            $kode_invoice = date('Y') . '-0001';
        }

        $trs = new Transaksi;
        $trs->id_user = Auth::id();
        $trs->id_outlet = User::find(Auth::id())->id_outlet;
        $trs->id_member = $request->id_member;
        $trs->tgl = date('Y-m-d H:i:s');
        $trs->biaya_tambahan = $request->biaya_tambahan;
        $trs->diskon = $request->diskon;
        $trs->pajak = $request->pajak;
        $trs->status = 'Baru';
        $trs->kode_invoice = $kode_invoice;
        $trs->total_bayar = $request->total_bayar;
        $trs->tunai = $request->tunai;
        if ($request->tunai) {
            $trs->dibayar = 'Dibayar';
        }else{
            $trs->dibayar = 'Belum Dibayar';
        }
        $trs->batas_waktu = $request->batas_waktu;
        $trs->save();

        $detail = DetailTransaksi::where('status', 'berlangsung')->get();
        foreach ($detail as $det) {
            $det->status = 'selesai';
            $det->save();
        }

        $id_transaksi_next = Transaksi::max('id');

        return redirect('/transaksi/invoice/' . $id_transaksi_next);
    }

    public function invoice($id)
    {
        $data['judul'] = "Invoice";
        $data['data'] = Transaksi::find($id);
        $data['detail'] = DetailTransaksi::where('id_transaksi', $id)->get();

        return view('transaksi.invoice', $data);
    }
}
