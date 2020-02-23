<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Outlet;
use App\Paket;
use Hash;
use DataTables;
use Alert;

class paketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['judul'] =  "Data paket";
        $data['paket'] = Paket::all();
        $data['outlet'] = Outlet::all();

       return view('master.paket', $data);
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
            'nama_paket' => 'required',
            'harga' => 'required',
            'jenis' => 'required'
        ]);

        $paket = new paket;
        $paket->nama_paket = $request->nama_paket;
        $paket->jenis = $request->jenis;
        $paket->harga = $request->harga;
        $paket->id_outlet = $request->id_outlet;
        $paket->save();

        alert()->success('Data berhasil ditambahkan', 'Pesan');

        return redirect('/paket');
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
            'nama_paket' => 'required',
            'harga' => 'required',
            'jenis' => 'required'
        ]);

        $paket = Paket::find($id);
        $paket->nama_paket = $request->nama_paket;
        $paket->jenis = $request->jenis;
        $paket->harga = $request->harga;
        $paket->id_outlet = $request->id_outlet;
        $paket->save();

        alert()->success('Data berhasil diubah', 'Pesan');

        return redirect('/paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paket::find($id)->delete();

        alert()->success('Data berhasil dihapus', 'Pesan');

        return redirect('/paket');
    }

    public function get_paket($id)
    {
        echo json_encode(Paket::find($id));
    }
}
