<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|max:16',
            'password' => 'required|max:5',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 0) {
                $request->session()->regenerate();
                return redirect()->intended('/pedagang');
            } elseif (Auth::user()->role == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/admin');
            } elseif (Auth::user()->role == 2) {
                $request->session()->regenerate();
                return redirect()->intended('/eksekutif');
            }
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
