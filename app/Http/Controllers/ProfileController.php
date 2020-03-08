<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Transaksi;
use App\Member;
use App\User;
use Hash;

class ProfileController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        $data['judul'] = "My Profile";
        $data['profile'] = User::find(Auth::id());

        return view('auth.profile', $data);
    }

    public function profile_update(Request $request)
    {
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->telepon = $request->telepon;
        $user->email = $request->email;
        $user->save();

        alert()->success('Profile berhasil diupdate', 'Pesan');
        return redirect('/profile');
    }

    public function change_password()
    {
        $data['judul'] = "Change Password";

        return view('auth.change_password', $data);

    }

    public function change_password_action(Request $request)
    {
        $this->validate($request, [
            'pw_lama' => 'required',
            'pw1' => 'required|same:pw2',
            'pw2' => 'required|same:pw1'
        ]);

        $user = User::find(Auth::id());

        if (Hash::check($request->pw_lama, $user->password)) {
            
            $user->password = bcrypt($request->pw1);
            $user->save();
            alert()->success('Password berhasil diubah', 'Pesan');
            return redirect('/ubah_password');

        }else{
            alert()->success('Password lama tidak sesuai', 'Pesan');
            return redirect('/ubah_password');

        }
    }
}
