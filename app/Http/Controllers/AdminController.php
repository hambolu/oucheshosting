<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Whm;

class AdminController extends Controller
{
    //
    use Whm;

    public function allClients()
    {
        $whm = $this->Cpanel();
        $whmdata = json_decode(json_encode($whm['data']['acct'], true));
        return view('admin.clients',compact('whmdata'));
    }
}
