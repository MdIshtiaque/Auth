<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }
        return redirect('login')->with('success', 'You are not allowed to access');
    }

    function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');

    }
}
