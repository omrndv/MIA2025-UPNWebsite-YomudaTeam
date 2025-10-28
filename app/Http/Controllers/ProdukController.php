<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function katalog()
    {
        return view('layouts.main', [
            'page' => 'pages.produk', // Nama view untuk halaman katalog
            'includeNavbar' => true,
            'includeFooter' => true,
            // 'products' => $semuaProduk, // Kirim data produk
        ]);
    }

    public function detail($slug)
    {
        // Dalam implementasi nyata, Anda akan mencari produk berdasarkan $slug dari database
        // $product = Product::where('slug', $slug)->firstOrFail(); 

        // Contoh data dummy untuk produk "Batik Banyumasan"
        $product = [
            'name' => 'Batik Banyumasan Tulis Motif Sido Mukti',
            'umkm' => 'Batik Nusantara',
            'location' => 'Purwokerto',
            'price' => 'Rp 250.000',
            'whatsapp' => '628121234567',
            'rating' => '4.9',
            'reviews' => 125,
            'description' => 'Kain batik tulis premium dari Banyumas dengan motif klasik Sido Mukti, melambangkan kemakmuran dan harapan baik. Dibuat menggunakan canting tembaga dan pewarna alami, menjamin kualitas dan ketahanan warna.',
            'details' => [
                'Bahan' => 'Katun Primisima Grade A',
                'Teknik' => 'Batik Tulis Tangan',
                'Ukuran' => '240 x 105 cm',
                'Perawatan' => 'Cuci manual, jangan gunakan mesin, jemur di tempat teduh.'
            ],
            'image_url' => asset('images/batik-banyumas-large.jpg'), // Ganti dengan path gambar besar
            'stock' => 5
        ];

        return view('layouts.main', [
            'page' => 'pages.detail-produk', // Ini adalah file view detail produk
            'includeNavbar' => true,
            'includeFooter' => true,
            'product' => $product,
        ]);
    }
}
