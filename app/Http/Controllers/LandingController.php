<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('layouts.main', [
            'title' => 'LokaMas - Website UMKM Lokal Banyumas',
            'includeNavbar' => true,
            'includeFooter' => true,
            'page' => 'pages.landing',
        ]);
    }
}
