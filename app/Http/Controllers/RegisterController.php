<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function post(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required',
            'name' => 'required',
            'password' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/auth/login');
    }
}
