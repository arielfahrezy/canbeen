<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login.v_register');
    }

    public function register(){
        return view('login.v_register');
    }

    public function simpanregister(Request $request){
        // dd($request);
        User::create([
            'name' -> $request->name,
            'username' -> $request->username,
            'kelas' -> $request->kelas,
            'nisn' ->request->nisn,
            'password' ->bcrypt($request->password),
        ]);

        return view('login.v-login');
    }

     public function dashboard(){
        return view('dashboard');
     }
}