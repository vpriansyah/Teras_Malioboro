<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/pedagang');
        }
        // dd($credentials);
        // $this->validate($request, [
        //     'name'      => 'required',
        //     'password'  => 'required',
        // ]);

        // if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
        //     // Success
        //     $request->session()->regenerate();
        //     return redirect()->intended(route('pedagang'));
        // }
        return back()->with('loginError', 'Login gagal!');
    }
}
