<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    //

    public function dashboard()
    {
        if (Auth::user()->role == 'admin') {
            return view('admin.dashboard');
        }elseif (Auth::user()->role == 'admin') {

            return view('dashboard');
        }else{
            return abort(404);
        }
    }
}
