<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $cek = $request->validate ([
            'email'      => 'required|string',
            'password'   => 'required'
        ]);

        if(Auth::attempt($cek)){
            $request->session()->regenerate();
            return redirect()->intended('/beranda')->with('informasi','Selamat datang');
        } else {
            Alert::error('Login Gagal', 'Email atau Password salah.');
            return back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }
}
