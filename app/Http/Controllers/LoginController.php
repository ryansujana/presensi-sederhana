<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;


class LoginController extends Controller
{
    public function halamanLogin()
    {
        return view('login.loginapp');
    }

    public function postLogin(Request $request)
    {
        // validasi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function registrasi()
    {
        return view('login.registrasi');
    }

    public function postRegistrasi(Request $request)
    {
        //dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => 'karyawan',
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');

    }

}
