<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Namecheap\NameCheapApi;
use App\Http\Namecheap\NameCheapDomains;

class DomainsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.order');

    }



// public function checkDomainAvailability($domain)
// {


//     $extensions = [
//         ".com",
//         ".net",
//         ".com.ng",
//         ".ng",
//         ".org",
//         ".ai",
//         ".store",
//         ".xyz",
//         ".shop",
//         ".tech"
//     ]; // List of extensions to check

//     $results = [];

//     foreach ($extensions as $extension) {
//         $response = Http::get('https://api.domainavailability.io/v1/' . $domain . '.' . $extension);

//         $status = $response->getStatusCode();

//         if ($status == 200) {
//             $body = json_decode($response->getBody(), true);
//             $available = $body['available'];
//         } else {
//             $available = false;
//         }

//         $results[$extension] = $available;
//     }

//     return $results;
// }


    public function search(Request $req)
    {
        $domain_name = $req->input('domain_name');
        $user = env('USER_NAME'); // Username required to access the API
        $key = env('API_KEY'); // Password required used to access the API
        $sandbox = false; // true for testing, false for live
        $username = env('API_USER'); // The Username on which a command is executed.Generally, the values of ApiUser and UserName parameters are the sam

        $api = new NamecheapApi($user, $key, $sandbox, $username);

        // Create a new instance of the command class we want to use
        $domains = new NamecheapDomains($api);

        //$domain = $params['sld'] . '.' . $params['tld'];
        $vars = ['DomainList' => $domain_name];
        $data = $domains->check($vars)->status();
        //dd($data);

        if ($data == "OK") {
            if ($domains->check($vars)->response() == 'false') {
                return 'not available';
            }

            if($domains->check($vars)->response() == 'true'){
                return 'available';
            }

        }else{
            dd(false);
        }
        // if ($data->attributes()->Status == "ok") {
        // }

        // $response = Http::get('https://api.namecheap.com/xml.response?ApiUser=FleskTechnology&ApiKey=22b1bacbc0db4a469da3e82427fd255a&UserName=FleskTechnology&Command=namecheap.domains.check&ClientIp=102.89.34.16&DomainList='.$domain_name);
        // dd (json_decode(($response->json())));
        // if($response->CommandResponse->DomainCheckResult->attributes()->Available == 'true'){
        //     dd(true);
        // }elseif($response->CommandResponse->DomainCheckResult->attributes()->Available == 'false'){
        //     dd(false);
        // }

        //dd($response->CommandResponse->DomainCheckResult->attributes()->Available);

       //eturn view('frontend.order',compact('ip_address','domain_name'));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Domains $domains)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domains $domains)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Domains $domains)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domains $domains)
    {
        //
    }
}