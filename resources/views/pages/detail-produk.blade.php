<section class="container mx-auto px-4 py-12 md:py-16">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-12">

        <div class="space-y-4">
            <img src="{{ $product['image_url'] ?? asset('images/default.jpg') }}"
                alt="{{ $product['name'] ?? 'Produk' }}"
                class="w-full h-auto rounded-xl shadow-xl object-cover lg:h-[450px]">

            <div class="flex space-x-3 overflow-x-auto">
                {{-- Gunakan loop di sini jika ada array gambar kecil --}}
                <img src="{{ $product['image_url'] ?? asset('images/default.jpg') }}"
                    alt="Thumbnail 1"
                    class="w-20 h-20 rounded-lg object-cover border-2 border-orange-500 cursor-pointer">

                {{-- Placeholder gambar kedua dan ketiga --}}
                <img src="{{ asset('images/batik-detail-2.jpg') }}"
                    alt="Thumbnail 2"
                    class="w-20 h-20 rounded-lg object-cover border border-gray-200 cursor-pointer hover:border-orange-500">
                <img src="{{ asset('images/batik-detail-3.jpg') }}"
                    alt="Thumbnail 3"
                    class="w-20 h-20 rounded-lg object-cover border border-gray-200 cursor-pointer hover:border-orange-500">
            </div>
        </div>

        <div class="font-jakarta">
            <span class="text-sm font-semibold uppercase tracking-wider text-orange-600">
                {{ $product['category'] ?? 'Batik & Kain Tradisional' }}
            </span>

            <h1 class="text-3xl md:text-4xl font-bricolage font-bold text-gray-900 mt-2 mb-4">
                {{ $product['name'] ?? 'Nama Produk Tidak Diketahui' }}
            </h1>

            <div class="flex items-center space-x-4 mb-6">
                <div class="flex items-center text-yellow-500">
                    <i class="fas fa-star"></i>
                    <span class="ml-1 text-gray-800 font-medium">{{ $product['rating'] ?? '0.0' }}</span>
                </div>
                <span class="text-sm text-gray-500">
                    ({{ $product['reviews'] ?? '0' }} Ulasan)
                </span>
                <span class="text-sm text-gray-500 font-medium">| Stok: {{ $product['stock'] ?? 'Tidak Tersedia' }}</span>
            </div>

            <div class="mb-6">
                <span class="text-4xl font-extrabold text-orange-600">
                    {{ $product['price'] ?? 'Rp 0' }}
                </span>
            </div>

            <p class="text-gray-700 leading-relaxed mb-6 border-b pb-6">
                {{ $product['description'] ?? 'Deskripsi produk belum tersedia dari UMKM ini.' }}
            </p>

            <div class="flex flex-col sm:flex-row gap-4 mb-8">

                {{-- TOMBOL UTAMA: PESAN VIA WHATSAPP (Link WA API) --}}
                <a href="https://wa.me/{{ $product['whatsapp'] ?? '6281234567890' }}?text=Halo%2C%20saya%20tertarik%20dengan%20produk%20*{{ urlencode($product['name'] ?? 'Produk LokaMas') }}*%20seharga%20{{ $product['price'] ?? 'Harga' }}.%20Apakah%20stok%20masih%20tersedia%3F%20(Ditemukan%20di%20LokaMas)"
                    target="_blank"
                    class="w-full flex items-center justify-center px-6 py-3 bg-green-500 text-white font-bold rounded-lg shadow-md hover:bg-green-600 transition duration-300">
                    <i class="fab fa-whatsapp mr-2"></i> Pesan via WhatsApp
                </a>
            </div>

            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200 text-sm">
                <h3 class="font-bold text-gray-800 mb-2">Informasi UMKM</h3>
                <p class="mb-1 text-gray-600"><i class="fas fa-store mr-2 text-orange-500"></i> **UMKM:** {{ $product['umkm'] ?? '-' }}</p>
                <p class="mb-1 text-gray-600"><i class="fas fa-map-marker-alt mr-2 text-orange-500"></i> **Lokasi:** {{ $product['location'] ?? 'Banyumas' }}</p>
                <a href="#" class="text-orange-600 hover:text-orange-800 font-medium mt-2 block">Lihat Profil Toko</a>
            </div>
        </div>

    </div>

    <div class="max-w-6xl mx-auto mt-16">
        <h2 class="text-2xl font-bricolage font-bold text-gray-900 mb-6 border-b pb-2">Spesifikasi Produk</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-4 text-gray-700">
            @forelse($product['details'] ?? [] as $key => $value)
            <div class="flex justify-between border-b border-gray-100 pb-2">
                <span class="font-medium text-gray-600">{{ $key }}</span>
                <span class="text-right">{{ $value }}</span>
            </div>
            @empty
            <p class="col-span-2 text-center text-gray-500 py-4">Detail spesifikasi produk belum ditambahkan oleh UMKM ini.</p>
            @endforelse
        </div>
    </div>

    <div class="max-w-6xl mx-auto mt-16">
        <h2 class="text-2xl font-bricolage font-bold text-gray-900 mb-6 border-b pb-2">Lokasi UMKM</h2>
        <div class="p-6 bg-white rounded-xl border border-gray-200 shadow-lg">

            <p class="text-gray-700 mb-4 text-center sm:text-left">
                Anda dapat mengunjungi UMKM **{{ $product['umkm'] ?? 'Toko' }}** di alamat:
                <span class="font-semibold text-gray-900 block mt-1">
                    {{ $product['full_address'] ?? 'H722+5J6, Kalibiru, Teluk, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah' }}
                </span>
            </p>

            {{-- KODE IFRAME RESMI ANDA --}}
            <div class="h-96 w-full rounded-lg overflow-hidden border border-gray-300 shadow-inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.09201570368!2d109.29423497522124!3d-7.455072173475606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655bed30d35eb3%3A0xca11d41203e75029!2sGriya%20Batik%20HN!5e0!3m2!1sid!2sid!4v1761454417779!5m2!1sid!2sid"
                    width="100%"
                    height="100%" style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            {{-- Link untuk membuka di aplikasi Maps (Menggunakan alamat dari Controller) --}}
            <a href="https://maps.google.com/?q={{ urlencode($product['full_address'] ?? 'Batik Nusantara Purwokerto') }}"
                target="_blank"
                class="mt-4 inline-flex items-center text-orange-600 hover:text-orange-800 font-medium text-sm">
                Buka di Google Maps <i class="fas fa-external-link-alt ml-2"></i>
            </a>
        </div>
    </div>

    <div class="max-w-6xl mx-auto mt-16">
        <h2 class="text-2xl font-bricolage font-bold text-gray-900 mb-6 border-b pb-2">Ulasan Pelanggan ({{ $product['reviews'] ?? '0' }})</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="md:col-span-1 p-6 bg-gray-50 rounded-xl border border-gray-200 flex flex-col items-center justify-center">
                <p class="text-6xl font-extrabold text-orange-600 mb-2">{{ $product['rating'] ?? '5.0' }}</p>
                <div class="flex text-2xl text-yellow-500 mb-2">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-sm text-gray-500">Dari {{ $product['reviews'] ?? '0' }} Ulasan</p>

                {{-- Statistik Bintang (Contoh Statis) --}}
                <div class="w-full mt-4 space-y-1 text-sm text-gray-600">
                    @foreach([5, 4, 3, 2, 1] as $star)
                    <div class="flex items-center">
                        <span class="mr-2">{{ $star }} Bintang</span>
                        <div class="flex-1 bg-gray-200 rounded-full h-2.5">
                            {{-- Ganti nilai width di bawah dengan persentase nyata dari data Anda --}}
                            <div class="bg-orange-500 h-2.5 rounded-full" style="width: {{ $star * 15 }}%"></div>
                        </div>
                        <span class="ml-2 text-xs text-gray-500">{{ $star * 5 }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="md:col-span-2 space-y-6">

                @php
                // Data dummy ulasan untuk contoh loop
                $reviews = [
                ['name' => 'Nadiv', 'date' => '20 Okt 2025', 'rating' => 5, 'comment' => 'Kualitas batiknya premium, sesuai deskripsi. Pengiriman cepat dan packing aman. Cocok buat hadiah!'],
                ['name' => 'Budi', 'date' => '18 Okt 2025', 'rating' => 4, 'comment' => 'Motifnya bagus dan unik. Sedikit tebal, tapi nyaman dipakai. Recommended!'],
                ['name' => 'Citra L.', 'date' => '15 Okt 2025', 'rating' => 5, 'comment' => 'Sangat bangga dengan produk lokal Banyumas. Batik tulisnya rapi, terima kasih LokaMas!'],
                ];
                @endphp

                @forelse($reviews as $review)
                <div class="border-b pb-4">
                    <div class="flex items-center mb-2">
                        <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold text-sm mr-3">
                            {{ substr($review['name'], 0, 1) }}
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">{{ $review['name'] }}</p>
                            <div class="flex items-center text-xs text-yellow-500">
                                @for ($i = 0; $i < $review['rating']; $i++)
                                    <i class="fas fa-star"></i>
                                    @endfor
                                    @for ($i = 0; $i < 5 - $review['rating']; $i++)
                                        <i class="far fa-star text-gray-300"></i>
                                        @endfor
                                        <span class="ml-2 text-gray-500">{{ $review['date'] }}</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic ml-13">"{{ $review['comment'] }}"</p>
                </div>
                @empty
                <p class="text-center text-gray-500 italic py-4 col-span-3">Belum ada ulasan untuk produk ini. Jadilah pembeli pertama yang memberikan ulasan!</p>
                @endforelse

            </div>
        </div>

        {{-- Tombol untuk menulis ulasan baru (opsional) --}}
        <div class="mt-8 text-center">
            <button class="px-6 py-2 border border-orange-600 text-orange-600 hover:bg-orange-50 transition rounded-lg font-medium">
                Tulis Ulasan Anda
            </button>
        </div>
    </div>

</section>