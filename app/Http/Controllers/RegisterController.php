<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    public function index()
    {
        return view('');
    }
    public function registration()
    {
        return view('register');
    }
    public function valid_registration(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',

        ]);
        Register::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('login')->with('success', 'Registration completed, now
        you can login');
    }

    public function valid_login(LoginRequest $request)
    {
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        //  $credentials = $request->only('email', 'password');
        //  info('Check', $credentials);

        $registration = Register::where('email', $request->email)->first();
        //dd(Hash::check($request->password, $registration->password));
        if ($registration && Hash::check($request->password, $registration->password)) {
            $request->session()->put('user', $registration);
            return redirect()->intended('dashboard');
        }

        //dd(Auth::attempt($credentials));
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('dashboard');
        // }

        return redirect('login')->with('success', 'Login detailes are not valid');
    }
}
