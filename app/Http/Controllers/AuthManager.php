<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login() {
        return view('login');
    
    }
    function register() {
        return view('register');
    }
    
    function loginPost(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "email atau password salah!");

        
    }
    
    function registerPost(Request $request) {
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make( $request->password);
        $user = User::create($data); 
        if(!$user) {
            return redirect(route('register'))->with("error", "Register gagal, silahkan coba lagi!");
        }
        return redirect(route('login'))->with("success", "Registrasi Sukeses! Silahkan Login");
    }
    
    function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect(route('login'))->with("success", "Berhasil Logout");
        
    }
}
