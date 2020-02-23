<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Outlet;
use Hash;
use DataTables;
use Alert;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['judul'] =  "Data outlet";
        $data['outlet'] = Outlet::all();

       return view('master.outlet', $data);
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
            'nama_outlet' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        $outlet = new Outlet;
        $outlet->nama_outlet = $request->nama_outlet;
        $outlet->telepon = $request->telepon;
        $outlet->alamat = $request->alamat;
        $outlet->save();

        alert()->success('Data berhasil ditambahkan', 'Pesan');

        return redirect('/outlet');
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
            'nama_outlet' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        $outlet = outlet::find($id);
        $outlet->nama_outlet = $request->nama_outlet;
        $outlet->alamat = $request->alamat;
        $outlet->telepon = $request->telepon;
        $outlet->save();

        alert()->success('Data berhasil diubah', 'Pesan');

        return redirect('/outlet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Outlet::find($id)->delete();

        alert()->success('Data berhasil dihapus', 'Pesan');

        return redirect('/outlet');
    }

    public function get_outlet($id)
    {
        echo json_encode(outlet::find($id));
    }
}
