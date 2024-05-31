<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\Whm;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    use Whm;

    public function dashboard()
    {
        //    $whm = $this->checkDomain();
        //    dd($whm);
        if (Auth::user()->role == 'admin') {
            return view('admin.dashboard');
        }

        if (Auth::user()->role == 'user') {

            return view('client.dashboard');
        }
        return abort(404);
    }
}
