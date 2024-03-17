<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\userModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function semua_user(){
        $hasil = userModel::All();
        return view('user', ['hasil'=>$hasil]);
    }
    public function simpan_user(Request $request)
    {
        $akun=new userModel();
        $akun->id_user=$request->id_user;
        $akun->username=$request->username;
        $akun->password=Hash::make($request->password);
        $akun->role=$request->role;
        $akun->save();
        return redirect('user');
    }
    public function edit_user(Request $request)
    {
        $akun=userModel::find($request->id_user);
        return view('edit_user',compact('akun'));
    }

    public function update_user(Request $request)
    {
        $akun=userModel::find($request->id);

        $akun->username=$request->username;

        if($request->password && $request->password_b)
        {
            $cek_pass = Hash::check($request->password, $akun->password);

            if($cek_pass)
            {
                $akun->password = Hash::make($request->password_b);
            }
        }
        else
        {
            $akun->password = $akun->password;
        }

        $akun->role=$request->role;
        $akun->save();
        return redirect('user');
    }

    public function destroy($id_user)
    {
        $akun=userModel::find($id_user);
        $akun->delete();
        return redirect('user');
    }

    public function login()
    {
        return view('login');
    }

    public function logins(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
                'username.required' => 'Username tidak boleh kosong!',
                'password.required' => 'Password tidak boleh kosong!',
        ]);

        $credentials = [
                'username' => $req->username,
                'password' => $req->password,
                'role' => $req->role,
        ];
        
        if(Auth::attempt($credentials))
        {
            $akun = userModel::where('username', $req->username);
            $akun = $akun->get();
            foreach($akun as $a);

            $req->session()->regenerate();
            $req->session()->put('id_user', $a->id_user);
            $req->session()->put('nama', $a->nama);
            $req->session()->put('username', $req->username);
            $req->session()->put('role', $a->admin);

            return redirect('user');

        }
        else
        {
            return redirect('/')->withInput();
        }
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
