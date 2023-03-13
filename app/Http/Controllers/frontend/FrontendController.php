<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function main_page()
    {
        
        return view('frontend.index');
    }

    public function about_page()
    {
        return view('frontend.about');
    }

    public function service_page()
    {
        return view('frontend.services');
    }

    public function blog_page()
    {
        return view('frontend.blog');
    }

    public function contact_page()
    {
        return view('frontend.contact');
    }
}
