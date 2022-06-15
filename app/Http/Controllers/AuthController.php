<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
            return view('user/register', $data);
    }

    public function simpanuser(Request $request)
    {
            $user = new User([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' =>Hash::make($request->password)
        ]);
        $user->save();
        return redirect()->route('login');
        
    }

    public function login()
    {
        $data['title'] = 'Login';
            return view('user/login', $data);
    }

    public function ceklogin(Request $request)
    {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
        ]);
        if(Auth::attempt(['email' => $request-> email, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors('password', 'Email atau Password Salah!');
    }

}
