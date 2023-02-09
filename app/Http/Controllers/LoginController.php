<?php

namespace App\Http\Controllers;

use Hash;

use App\Models\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    // public function valid_login(Request $request)
    // {
    //     // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        //  $credentials = $request->only('email', 'password');

        //  $Login = Login::where('email', $credentials['email'])->first();

        //  if ($Login && \Hash::check($credentials['password'], $Login->password)) {
        //      Auth::login($Login);

        //      return redirect()->intended('dashboard');
        //  }

        // dd($credentials, Auth::attempt($credentials));
        // // info('Check', [$credentials]);
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('dashboard');
        // }

    //     $Register = Register::where("email", $request->email);
    //     $RegisterP = Register::where("password", $request->password);
    //     if($Register && $RegisterP == TRUE){

    //         return redirect()->intended('dashboard');
    //     }
    //     return redirect('login')->with('success', 'Login detailes are not valid');
    //  }
}
