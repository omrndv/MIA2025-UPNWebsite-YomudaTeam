<section class="container mx-auto px-4 py-12 md:py-16">
    <div class="text-center mb-10 md:mb-16">
        <h1 class="text-4xl md:text-5xl font-bricolage font-bold text-gray-900 mb-3">
            Katalog Produk UMKM Banyumas
        </h1>
        <p class="text-xl text-gray-600 font-jakarta">
            Jelajahi keanekaragaman produk lokal terbaik, dari kuliner hingga kerajinan.
        </p>
    </div>

    <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
        <div class="text-sm text-gray-700 font-medium">
            Menampilkan 12 dari 48 Produk
        </div>
        <div class="flex items-center gap-2">
            <label for="sort" class="text-sm font-medium text-gray-700 hidden sm:block">Urutkan:</label>
            <select id="sort" name="sort" class="block w-full sm:w-auto p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-sm">
                <option>Terbaru</option>
                <option>Harga Terendah</option>
                <option>Harga Tertinggi</option>
                <option>Rating Terbaik</option>
            </select>
        </div>
        
        {{-- Tombol Filter Mobile (Alpine.js diperlukan untuk ini) --}}
        {{-- <button class="sm:hidden p-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
            <i class="fas fa-filter mr-1"></i> Filter Kategori
        </button> --}}
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">

        {{-- START: CARD PRODUK (ULANGI UNTUK SEMUA PRODUK) --}}
        {{-- Kita buat 8 contoh produk agar halaman terlihat penuh --}}
        
        @php
            $products = [
                ['name' => 'Getuk Goreng Sokaraja', 'umkm' => 'Bu Siti Snack', 'location' => 'Sokaraja', 'price' => 'Rp 15.000', 'rating' => '4.8', 'img' => asset('images/getuk-goreng.jpg')],
                ['name' => 'Batik Banyumasan', 'umkm' => 'Batik Nusantara', 'location' => 'Purwokerto', 'price' => 'Rp 250.000', 'rating' => '4.9', 'img' => asset('images/batik-banyumas.jpg')],
                ['name' => 'Kopi Robusta Banyumas', 'umkm' => 'Kopi Gunung', 'location' => 'Baturaden', 'price' => 'Rp 45.000', 'rating' => '4.7', 'img' => asset('images/kopi-robusta.jpg')],
                ['name' => 'Nopia Mini Cokelat', 'umkm' => 'Toko Laris', 'location' => 'Purbalingga', 'price' => 'Rp 20.000', 'rating' => '4.6', 'img' => asset('images/nopia.jpg')],
                ['name' => 'Sandal Kulit Ukir', 'umkm' => 'Kerajinan Jati', 'location' => 'Wangon', 'price' => 'Rp 120.000', 'rating' => '4.5', 'img' => asset('images/sandal-kulit.jpg')],
                ['name' => 'Keripik Tempe Aneka Rasa', 'umkm' => 'Keripik Jaya', 'location' => 'Ajibarang', 'price' => 'Rp 18.000', 'rating' => '4.8', 'img' => asset('images/keripik-tempe.jpg')],
                ['name' => 'Gula Kelapa Organik', 'umkm' => 'Petani Alam', 'location' => 'Sumbang', 'price' => 'Rp 35.000', 'rating' => '5.0', 'img' => asset('images/gula-kelapa.jpg')],
                ['name' => 'Miniatur Rumah Adat', 'umkm' => 'Seni Ukir', 'location' => 'Purwokerto', 'price' => 'Rp 95.000', 'rating' => '4.3', 'img' => asset('images/miniatur-rumah.jpg')],
            ];
        @endphp

        @foreach($products as $product)
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                <div class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-0.5 rounded-full z-10 flex items-center gap-1">
                    <i class="fas fa-star text-xs"></i> {{ $product['rating'] }}
                </div>
                
                <a href="#">
                    <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="w-full h-40 object-cover group-hover:scale-[1.03] transition-transform duration-500">
                </a>
                
                <div class="p-4">
                    <a href="#" class="text-lg font-semibold text-gray-900 hover:text-orange-600 transition-colors line-clamp-2 h-14">
                        {{ $product['name'] }}
                    </a>

                    <p class="text-xs text-gray-500 mt-1 mb-3">
                        Oleh: <span class="font-medium text-gray-700">{{ $product['umkm'] }}</span> - {{ $product['location'] }}
                    </p>

                    <div class="flex items-center justify-between mt-3">
                        <span class="text-xl font-bold text-orange-600">
                            {{ $product['price'] }}
                        </span>
                        <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 transition-colors">
                            Beli <i class="fas fa-shopping-cart ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- END: CARD PRODUK --}}

    </div>

    <div class="mt-16 flex justify-center">
        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a href="#" aria-current="page" class="z-10 bg-orange-50 border-orange-500 text-orange-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                1
            </a>
            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                2
            </a>
            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                3
            </a>
            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                ...
            </span>
            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                10
            </a>
            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <i class="fas fa-chevron-right"></i>
            </a>
        </nav>
    </div>
    
</section>