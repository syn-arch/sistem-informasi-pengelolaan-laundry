<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Outlet;
use Hash;
use DataTables;
use Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['judul'] =  "Data User";
        $data['user'] = User::all();
        $data['outlet'] = Outlet::all();

       return view('master.user', $data);
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
            'name' => 'required',
            'email' => 'required|unique:users',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        $user->password = Hash::make('password');
        $user->level = $request->level;
        $user->id_outlet = $request->id_outlet;
        $user->save();

        alert()->success('Data berhasil ditambahkan', 'Pesan');

        return redirect('/user');
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
            'name' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        $user->password = Hash::make('password');
        $user->level = $request->level;
        $user->id_outlet = $request->id_outlet;
        $user->save();

        alert()->success('Data berhasil diubah', 'Pesan');

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        alert()->success('Data berhasil dihapus', 'Pesan');

        return redirect('/user');
    }

    public function get_user($id)
    {
        echo json_encode("SELECT * FROM USER WHERE id = '$id' ");
    }
}
