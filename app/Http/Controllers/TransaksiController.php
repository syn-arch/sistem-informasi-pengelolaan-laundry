<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transaksi;
use App\Paket;
use Hash;
use DataTables;
use Alert;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['judul'] =  "Data transaksi";
        $data['transaksi'] = transaksi::all();

       return view('master.transaksi', $data);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_transaksi' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        $transaksi = new transaksi;
        $transaksi->nama_transaksi = $request->nama_transaksi;
        $transaksi->telepon = $request->telepon;
        $transaksi->alamat = $request->alamat;
        $transaksi->save();

        alert()->success('Data berhasil ditambahkan', 'Pesan');

        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_transaksi' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        $transaksi = transaksi::find($id);
        $transaksi->nama_transaksi = $request->nama_transaksi;
        $transaksi->alamat = $request->alamat;
        $transaksi->telepon = $request->telepon;
        $transaksi->save();

        alert()->success('Data berhasil diubah', 'Pesan');

        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        transaksi::find($id)->delete();

        alert()->success('Data berhasil dihapus', 'Pesan');

        return redirect('/transaksi');
    }

    public function get_transaksi($id)
    {
        echo json_encode(transaksi::find($id));
    }

    public function transaksi_baru()
    {
        $data['judul'] = "Transaksi Baru";

        return view('transaksi.transaksi', $data);
    }
}
