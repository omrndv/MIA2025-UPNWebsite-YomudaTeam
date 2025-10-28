<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('layouts.main', [
            'page' => 'pages.artikel',
            'includeNavbar' => true,
            'includeFooter' => true,
        ]);
    }
}
