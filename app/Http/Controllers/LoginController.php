<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function valid_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        //$email = $request->email;
        // $password = Hash::make($request->password);
        // $credentials = $request->only('email', [$password]);

        // info('gajhkdhg', [$credentials]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('dashboard');
        }
        return redirect('login')->with('success', 'Login detailes are not valid');
    }
}
