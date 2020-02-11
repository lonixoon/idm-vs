<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function product()
    {
        return view('product');
    }

    public function support()
    {
        return view('support');
    }

    public function contact()
    {
        return view('contact');
    }
}
