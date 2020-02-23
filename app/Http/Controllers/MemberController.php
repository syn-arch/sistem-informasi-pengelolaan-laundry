<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;
use Hash;
use DataTables;
use Alert;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['judul'] =  "Data member";
        $data['member'] = Member::all();

       return view('master.member', $data);
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
            'nama_member' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        $member = new member;
        $member->nama_member = $request->nama_member;
        $member->telepon = $request->telepon;
        $member->alamat = $request->alamat;
        $member->jk = $request->jk;
        $member->save();

        alert()->success('Data berhasil ditambahkan', 'Pesan');

        return redirect('/member');
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
            'nama_member' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        $member = Member::find($id);
        $member->nama_member = $request->nama_member;
        $member->alamat = $request->alamat;
        $member->telepon = $request->telepon;
        $member->jk = $request->jk;
        $member->save();

        alert()->success('Data berhasil diubah', 'Pesan');

        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::find($id)->delete();

        alert()->success('Data berhasil dihapus', 'Pesan');

        return redirect('/member');
    }

    public function get_member($id)
    {
        echo json_encode(Member::find($id));
    }
}
