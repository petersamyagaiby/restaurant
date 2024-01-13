<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function pages()
    {
        return view('pages');
    }

    public function contact()
    {
        return view('contact');
    }

    public function booking()
    {
        return view('book a table');
    }
}
