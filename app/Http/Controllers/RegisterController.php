<?php

namespace App\Http\Controllers;

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
            'email' => 'required|email',
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

    public function valid_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

         $credentials = $request->only('email', 'password');

        //  $Login = Login::where('email', $credentials['email'])->first();

        //  if ($Login && \Hash::check($credentials['password'], $Login->password)) {
        //      Auth::login($Login);

        //      return redirect()->intended('dashboard');
        //  }

        // dd($credentials, Auth::attempt($credentials));
        // // info('Check', [$credentials]);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

    //     $Register = Register::where("email", $request->email);
    //     $RegisterP = Register::where("password", $request->password);
    //     if($Register && $RegisterP == TRUE){

    //         return redirect()->intended('dashboard');
    //     }
        return redirect('login')->with('success', 'Login detailes are not valid');
     }



}
