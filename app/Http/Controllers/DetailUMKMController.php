<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailUMKMController extends Controller
{
    public function detailumkm()
    {
        return view('layouts.main', [
            'page' => 'pages.detail-umkm',
            'includeNavbar' => true,
            'includeFooter' => true,
        ]);
    }
}
