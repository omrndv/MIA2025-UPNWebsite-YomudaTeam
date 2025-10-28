<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function detailartikel()
    {
        return view('layouts.main', [
            'page' => 'pages.detail-artikel',
            'includeNavbar' => true,
            'includeFooter' => true,
        ]);
    }
}
