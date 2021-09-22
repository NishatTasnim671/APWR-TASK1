<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function ServicePage()
    {
        $product=[
            "Name"=>"Laptop",
            "Brand"=>"hp",
            "Price"=>"80000",

        ];
        return view('service')->with('product',$product);

    }
    public function HomePage()
    {
        return view('home');
    }

    public function ContactPage()
    {
        return view('contact');
    }

    public function AboutPage()
    {
        return view('about');
    }

    public function TeamsPage()
    {
        return view('teams');
    }
 
}
