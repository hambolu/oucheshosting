<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Traits\Whm;

class DashboardController extends Controller
{
    //
    use Whm;

    public function dashboard()
    {
       $whm = $this->checkDomain();
       dd($whm);
        if (Auth::user()->role == 'admin') {
            return view('admin.dashboard');
        }elseif (Auth::user()->role == 'admin') {

            return view('client.dashboard');
        }else{
            return abort(404);
        }
    }
}
