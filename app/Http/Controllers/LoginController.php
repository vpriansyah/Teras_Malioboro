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
        $request->validate([
            'nik' => 'required',
            'lokasi_no_kios_id' => 'required'
        ]);
        $credentials = $request->only('nik', 'lokasi_no_kios_id');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/pedagang');
        }

        return back()->with(['loginError', 'Login gagal!']);
    }
}
