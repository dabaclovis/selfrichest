<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function phones()
    {
        return view('pages.phone');
    }

    public function computer()
    {
        return view('pages.computer');
    }
    public function about()
    {
        return view('pages.about');
    }

    public function policy()
    {
        return view('pages.policy');
    }
    public function others()
    {
        return view('pages.others');
    }

    public function articles()
    {
        return view('pages.articles');
    }
}
