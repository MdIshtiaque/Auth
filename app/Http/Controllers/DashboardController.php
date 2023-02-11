<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        //dd(Auth::check());
        if($request->session()->has('user'))
        {
            return view('dashboard');
        }
        return redirect('login')->with('success', 'You are not allowed to access');
    }

    function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->flush();

        return redirect('login');

    }
}
