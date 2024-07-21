<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function auth(Request $request){
        $request->validate(
            [
            'email' => 'required',
            'password' => 'required'
            ],[
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi',
            ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->hak_akses == 'admin'){
                return redirect('/admin');
            }else{
                return redirect('/dashboard');
            }
        }else{
            return redirect('/')->withErrors('Email atau Password tidak sesuai')->withInput();
        }
        
    }

    public function register(){
        return view('auth.signUp');
    }

    public function daftar(Request $request){
        $data = $request->validate([
            'email' => 'required|string|max:255|email',
            'password' => 'required|min:8'
        ]);

        User::create($data);

        $user = $request->only('email', 'password');
        Auth::attempt($user);

        return view('auth.login')->with('Berhasil Membuat akun');

    }

    public function logout(){
        Auth::logout();
    
            request()->session()->invalidate();
    
            request()->session()->regenerateToken();
    
            return redirect('/');
    }
}
