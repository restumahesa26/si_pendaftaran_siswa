<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home.home');
    }

    public function profil()
    {
        return view('pages.home.profil');
    }

    public function berita()
    {
        return view('pages.home.berita');
    }
}
