@php
$stats = [
['count' => '500+', 'label' => 'UMKM Terdaftar'],
['count' => '1000+', 'label' => 'Produk Lokal'],
['count' => '50+', 'label' => 'Pasar Mitra'],
];

$images = [
'https://images.pexels.com/photos/5926388/pexels-photo-5926388.jpeg',
'https://images.pexels.com/photos/5990645/pexels-photo-5990645.jpeg',
];

$articles = [
[
'icon' => 'fa-lightbulb',
'title' => '5 Tips Memulai UMKM dari Nol',
'excerpt' => 'Panduan lengkap untuk Anda yang ingin memulai usaha kecil dengan modal minim tapi hasil maksimal.',
'category' => 'Tips Usaha',
'readTime' => '5 menit',
'image' => 'https://images.unsplash.com/photo-1595872018818-97555653a011'
],
[
'icon' => 'fa-bullhorn',
'title' => 'Strategi Pemasaran Digital untuk UMKM',
'excerpt' => 'Manfaatkan media sosial dan platform digital untuk meningkatkan penjualan produk Anda.',
'category' => 'Pemasaran',
'readTime' => '7 menit',
'image' => 'https://images.unsplash.com/photo-1595872018818-97555653a011'
],
[
'icon' => 'fa-chart-line',
'title' => 'Cara Meningkatkan Branding Produk Lokal',
'excerpt' => 'Buat produk lokal Anda lebih menarik dan dikenal luas dengan strategi branding yang tepat.',
'category' => 'Branding',
'readTime' => '6 menit',
'image' => 'https://images.unsplash.com/photo-1595872018818-97555653a011'
],
];

$testimonials = [
[
'name' => 'Ibu Siti Aminah',
'business' => 'Pemilik Warung Getuk Sokaraja',
'image' => 'https://images.unsplash.com/photo-1595872018818-97555653a011?auto=format&fit=crop&w=150&q=80',
'rating' => 5,
'text' => 'Alhamdulillah, sejak bergabung di platform ini, penjualan getuk saya meningkat drastis! Banyak pelanggan baru dari luar kota yang pesan. Terima kasih UMKM Banyumas!',
],
[
'name' => 'Pak Bambang Sutrisno',
'business' => 'Pengrajin Batik Banyumasan',
'image' => 'https://images.unsplash.com/photo-1595872018818-97555653a011?auto=format&fit=crop&w=150&q=80',
'rating' => 5,
'text' => 'Platform ini sangat membantu saya menjangkau pasar yang lebih luas. Batik saya sekarang dikenal sampai ke Jakarta. Mantap pokoknya!',
],
[
'name' => 'Mbak Dewi Lestari',
'business' => 'Pemilik Brand Fashion Lokal',
'image' => 'https://images.unsplash.com/photo-1595872018818-97555653a011?auto=format&fit=crop&w=150&q=80',
'rating' => 5,
'text' => 'Sebagai pelaku UMKM muda, platform ini sangat memudahkan saya untuk promosi. Fiturnya lengkap dan mudah digunakan. Recommended banget!',
],
];

$quoteIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-12 h-12 text-orange-600 mb-4 opacity-50">
    <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.7-2-2-2H4c-1.25 0-2 .75-2 2v6c0 1.25.75 2 2 2h2c.75 0 1 .5 1 1v3c0 1.25-.75 2-2 2H3" />
    <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.7-2-2-2h-4c-1.25 0-2 .75-2 2v6c0 1.25.75 2 2 2h2c.75 0 1 .5 1 1v3c0 1.25-.75 2-2 2h-1" />
</svg>';
$starIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none" class="w-5 h-5 fill-yellow-400">
    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
</svg>';

$ctaStats = [
['count' => '500+', 'label' => 'UMKM Terdaftar'],
['count' => '1000+', 'label' => 'Produk Tersedia'],
['count' => '5000+', 'label' => 'Pelanggan Puas'],
];

$heartIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="currentColor" stroke="none" class="w-16 h-16 text-white fill-white">
    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3.09.96-3.99 2.4c-.9-1.44-2.23-2.4-3.99-2.4A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
</svg>';
$arrowRightIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 w-5 h-5">
    <path d="M5 12h14" />
    <path d="m12 5 7 7-7 7" />
</svg>';
@endphp

<style>
    @keyframes floatUpDown {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-float {
        animation: floatUpDown 3s ease-in-out infinite;
    }

    /* Styles untuk Testimoni */
    .card-shadow {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .text-gradient {
        background-image: linear-gradient(to right, var(--tw-gradient-stops));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
        --tw-gradient-stops: #f97316, #f59e0b;
    }

    /* Styles untuk CTA Section */
    @keyframes spin-cw {
        from {
            transform: rotate(0deg) scale(1);
        }

        to {
            transform: rotate(360deg) scale(1);
        }
    }

    @keyframes spin-ccw {
        from {
            transform: rotate(360deg) scale(1);
        }

        to {
            transform: rotate(0deg) scale(1);
        }
    }

    @keyframes pulse-heart {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    }

    .bg-animation-cw {
        animation: spin-cw 20s linear infinite;
    }

    .bg-animation-ccw {
        animation: spin-ccw 25s linear infinite;
    }

    .heart-pulse {
        animation: pulse-heart 2s ease-in-out infinite;
    }
</style>

<section class="bg-orange-50 py-16 md:py-24" id="beranda">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 items-center gap-12 lg:gap-20">
            <div data-aos="fade-right" data-aos-duration="800">
                <div class="inline-flex items-center bg-orange-100 text-orange-600 text-sm px-4 py-1.5 rounded-full font-semibold tracking-wide mb-5">
                    🧡 Dukung Produk Lokal
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
                    Bangga Dukung
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-amber-500">
                        UMKM Banyumas!
                    </span>
                </h1>

                <p class="text-lg text-gray-600 mb-8 max-w-lg" data-aos="fade-right" data-aos-delay="200" data-aos-duration="600">
                    Temukan berbagai produk berkualitas dari pelaku UMKM lokal Banyumas.
                    Dari kuliner khas, kerajinan tangan, fashion unik, hingga jasa terpercaya.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mb-12" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                    <a
                        href="#"
                        class="flex-1 sm:flex-none text-center bg-orange-600 text-white px-7 py-3 rounded-xl font-semibold shadow-lg shadow-orange-200 hover:bg-orange-700 transition transform hover:scale-[1.02] duration-200">
                        Lihat Produk Unggulan
                    </a>
                    <a
                        href="#"
                        class="flex-1 sm:flex-none text-center border-2 border-orange-600 text-orange-600 px-7 py-3 rounded-xl font-semibold hover:bg-orange-100 transition duration-200">
                        Daftar Jadi Mitra
                    </a>
                </div>

                <div class="flex flex-wrap gap-y-4 gap-x-10 text-sm text-gray-600" data-aos="fade-up" data-aos-delay="600" data-aos-duration="600">
                    @foreach ($stats as $stat)
                    <div>
                        <span class="text-orange-600 font-extrabold text-2xl block mb-0.5">{{ $stat['count'] }}</span>
                        <span class="text-sm text-gray-500">{{ $stat['label'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="relative hidden md:block w-full h-[400px]" data-aos="fade-left" data-aos-duration="600">
                <div class="absolute top-6 left-6 rounded-3xl overflow-hidden shadow-2xl transform rotate-3 transition duration-500 ease-in-out">
                    <img
                        src="{{ $images[1] }}"
                        alt="Ilustrasi produk UMKM di pasar Banyumas"
                        class="w-full h-full object-cover aspect-[4/3]"
                        loading="eager" />
                </div>

                <div class="absolute top-0 left-0 rounded-3xl overflow-hidden shadow-2xl transform rotate-6 hover:rotate-0 hover:scale-[1.05] transition duration-500 ease-in-out cursor-pointer" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
                    <img
                        src="{{ $images[0] }}"
                        alt="Ilustrasi produk UMKM di pasar Banyumas"
                        class="w-full h-full object-cover aspect-[4/3]"
                        loading="eager" />
                </div>

                <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-orange-300/50 rounded-full blur-xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white" id="kategori">
    <div class="max-w-screen-xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold text-gray-900" data-aos="fade-down">
            Kategori <span class="text-orange-600">Produk</span>
        </h2>
        <p class="mt-3 text-gray-600 max-w-2xl mx-auto" data-aos="fade-down" data-aos-delay="100">
            Jelajahi berbagai kategori produk UMKM lokal yang siap memenuhi kebutuhan Anda
        </p>

        <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-8 rounded-2xl bg-orange-50 hover:-translate-y-1 hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="200">
                <div class="flex justify-center items-center w-14 h-14 rounded-xl bg-orange-500 text-white mx-auto mb-4">
                    <i class="fa-solid fa-utensils text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Kuliner Lokal</h3>
                <p class="text-gray-600 text-sm mt-2">Makanan & minuman khas Banyumas</p>
            </div>

            <div class="p-8 rounded-2xl bg-purple-50 hover:-translate-y-1 hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="300">
                <div class="flex justify-center items-center w-14 h-14 rounded-xl bg-purple-500 text-white mx-auto mb-4">
                    <i class="fa-solid fa-palette text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Kerajinan Tangan</h3>
                <p class="text-gray-600 text-sm mt-2">Produk handmade berkualitas</p>
            </div>

            <div class="p-8 rounded-2xl bg-blue-50 hover:-translate-y-1 hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="400">
                <div class="flex justify-center items-center w-14 h-14 rounded-xl bg-blue-500 text-white mx-auto mb-4">
                    <i class="fa-solid fa-shirt text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Fashion</h3>
                <p class="text-gray-600 text-sm mt-2">Pakaian & aksesori lokal</p>
            </div>

            <div class="p-8 rounded-2xl bg-green-50 hover:-translate-y-1 hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="500">
                <div class="flex justify-center items-center w-14 h-14 rounded-xl bg-green-500 text-white mx-auto mb-4">
                    <i class="fa-solid fa-seedling text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Produk Pertanian</h3>
                <p class="text-gray-600 text-sm mt-2">Hasil bumi segar & organik</p>
            </div>

            <div class="p-8 rounded-2xl bg-yellow-50 hover:-translate-y-1 hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="600">
                <div class="flex justify-center items-center w-14 h-14 rounded-xl bg-yellow-500 text-white mx-auto mb-4">
                    <i class="fa-solid fa-wrench text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Jasa</h3>
                <p class="text-gray-600 text-sm mt-2">Layanan profesional terpercaya</p>
            </div>

            <div class="p-8 rounded-2xl bg-indigo-50 hover:-translate-y-1 hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="700">
                <div class="flex justify-center items-center w-14 h-14 rounded-xl bg-indigo-500 text-white mx-auto mb-4">
                    <i class="fa-solid fa-cube text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Lainnya</h3>
                <p class="text-gray-600 text-sm mt-2">Produk unik & menarik</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-orange-50" id="produk">
    <div class="max-w-screen-xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold text-gray-900" data-aos="fade-down">
            Produk <span class="text-orange-600">Unggulan</span>
        </h2>
        <p class="mt-3 text-gray-600 max-w-2xl mx-auto" data-aos="fade-down" data-aos-delay="100">
            Produk pilihan dari UMKM terbaik di Banyumas yang wajib Anda coba!
        </p>

        <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow hover:-translate-y-1 transition" data-aos="fade-up" data-aos-delay="200">
                <div class="relative">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYGhVhDDFlQNVJwPcBXTJzRk72LcoXdOplwQ&s" alt="Produk 1" class="w-full rounded-t-2xl object-cover">
                    <div class="absolute top-3 right-3 bg-white rounded-full shadow px-2 py-1 flex items-center gap-1 text-sm font-semibold">
                        <i class="fa-solid fa-star text-yellow-400"></i> 4.8
                    </div>
                </div>
                <div class="p-5 text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Getuk Goreng Sokaraja</h3>
                    <p class="text-gray-600 text-sm">Bu Siti Snack</p>
                    <div class="flex items-center text-gray-500 text-sm mt-1">
                        <i class="fa-solid fa-location-dot mr-1"></i> Sokaraja
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <p class="text-orange-600 font-bold text-lg">Rp 15.000</p>
                        <a href="{{ route('produk.detail', ['slug' => 'getuk-goreng-sokaraja']) }}"
                            class="inline-block bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-orange-700 transition">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow hover:-translate-y-1 transition" data-aos="fade-up" data-aos-delay="400">
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="Produk 2" class="w-full rounded-t-2xl object-cover">
                    <div class="absolute top-3 right-3 bg-white rounded-full shadow px-2 py-1 flex items-center gap-1 text-sm font-semibold">
                        <i class="fa-solid fa-star text-yellow-400"></i> 4.9
                    </div>
                </div>
                <div class="p-5 text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Batik Banyumasan</h3>
                    <p class="text-gray-600 text-sm">Batik Nusantara</p>
                    <div class="flex items-center text-gray-500 text-sm mt-1">
                        <i class="fa-solid fa-location-dot mr-1"></i> Purwokerto
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <p class="text-orange-600 font-bold text-lg">Rp 250.000</p>
                        <button class="bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-orange-700 transition">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow hover:-translate-y-1 transition" data-aos="fade-up" data-aos-delay="600">
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="Produk 3" class="w-full rounded-t-2xl object-cover">
                    <div class="absolute top-3 right-3 bg-white rounded-full shadow px-2 py-1 flex items-center gap-1 text-sm font-semibold">
                        <i class="fa-solid fa-star text-yellow-400"></i> 4.7
                    </div>
                </div>
                <div class="p-5 text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Kopi Robusta Banyumas</h3>
                    <p class="text-gray-600 text-sm">Kopi Gunung</p>
                    <div class="flex items-center text-gray-500 text-sm mt-1">
                        <i class="fa-solid fa-location-dot mr-1"></i> Baturaden
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <p class="text-orange-600 font-bold text-lg">Rp 45.000</p>
                        <button class="bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-orange-700 transition">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10" data-aos="fade-up" data-aos-delay="800">
            <a href="{{ route('produk.katalog') }}" class="inline-block border border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-white px-6 py-2 rounded-lg transition font-medium">
                Lihat Semua Produk
            </a>
        </div>
    </div>
</section>

<section class="py-20 bg-white" id="tentang">
    <div class="max-w-screen-xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
        <div data-aos="fade-right">
            <h2 class="text-4xl font-extrabold text-gray-900">
                Tentang <span class="text-orange-600">UMKM Banyumas</span>
            </h2>
            <p class="mt-4 text-gray-700 leading-relaxed">
                Platform digital yang didedikasikan untuk mempromosikan dan mengembangkan
                UMKM lokal di Kabupaten Banyumas. Kami percaya bahwa produk lokal
                memiliki kualitas yang tidak kalah dengan produk luar, dan layak mendapat
                perhatian lebih.
            </p>
            <p class="mt-4 text-gray-700 leading-relaxed">
                Dengan menggabungkan kearifan lokal dan teknologi modern, kami membantu
                pelaku UMKM untuk menjangkau pasar yang lebih luas, sekaligus memudahkan
                masyarakat menemukan produk-produk berkualitas dari tetangga sendiri.
            </p>

            <div class="mt-8 grid grid-cols-2 gap-5">
                <div class="bg-orange-50 p-5 rounded-xl text-left shadow-sm hover:shadow-md transition" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fa-solid fa-bullseye text-orange-600 text-2xl mb-2"></i>
                    <h3 class="font-semibold text-gray-900">Misi Kami</h3>
                    <p class="text-gray-600 text-sm mt-1">Memberdayakan UMKM lokal Banyumas untuk berkembang dan bersaing di era digital.</p>
                </div>

                <div class="bg-orange-50 p-5 rounded-xl text-left shadow-sm hover:shadow-md transition" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fa-solid fa-users text-orange-600 text-2xl mb-2"></i>
                    <h3 class="font-semibold text-gray-900">Komunitas</h3>
                    <p class="text-gray-600 text-sm mt-1">Membangun ekosistem yang saling mendukung antara pelaku UMKM dan konsumen.</p>
                </div>

                <div class="bg-orange-50 p-5 rounded-xl text-left shadow-sm hover:shadow-md transition" data-aos="zoom-in" data-aos-delay="300">
                    <i class="fa-solid fa-chart-line text-orange-600 text-2xl mb-2"></i>
                    <h3 class="font-semibold text-gray-900">Pertumbuhan</h3>
                    <p class="text-gray-600 text-sm mt-1">Membantu UMKM meningkatkan penjualan dan jangkauan pasar lebih luas.</p>
                </div>

                <div class="bg-orange-50 p-5 rounded-xl text-left shadow-sm hover:shadow-md transition" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fa-solid fa-circle-check text-orange-600 text-2xl mb-2"></i>
                    <h3 class="font-semibold text-gray-900">Kualitas</h3>
                    <p class="text-gray-600 text-sm mt-1">
                        Menjamin produk berkualitas dari pelaku UMKM terpercaya dan terverifikasi.
                    </p>
                </div>
            </div>
        </div>

        <div class="relative" data-aos="fade-left">
            <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=800&q=80"
                alt="Pasar Banyumas"
                class="rounded-2xl shadow-lg w-full object-cover">
            <div class="absolute bottom-4 left-4 bg-white rounded-xl px-5 py-4 shadow-lg animate-float">
                <p class="text-orange-600 font-bold text-lg">500+</p>
                <p class="text-gray-700 text-sm font-medium">UMKM Bergabung</p>
            </div>
        </div>
    </div>
</section>

<section id="artikel" class="py-20 px-4 bg-gradient-to-br from-amber-50 to-orange-50">
    <div class="container mx-auto">
        <div data-aos="fade-up" class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-orange-100 px-4 py-2 rounded-full mb-4">
                <i class="fa-solid fa-book-open text-orange-600"></i>
                <span class="text-orange-600 font-semibold">Artikel Edukatif</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Belajar <span class="bg-clip-text text-transparent bg-gradient-to-r from-orange-600 to-amber-500">Kembangkan Usaha</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Tips, trik, dan strategi untuk mengembangkan UMKM Anda ke level berikutnya
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($articles as $index => $article)
            <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                class="bg-white rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 hover:shadow-xl transition-all duration-300 cursor-pointer">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                        <span class="text-sm font-semibold text-orange-600">{{ $article['category'] }}</span>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex items-center gap-2 mb-4 text-gray-500 text-sm">
                        <i class="fa-solid {{ $article['icon'] }} text-orange-600"></i>
                        <span>{{ $article['readTime'] }} baca</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">{{ $article['title'] }}</h3>
                    <p class="text-gray-600 mb-4">{{ $article['excerpt'] }}</p>
                    <a href="{{ route('artikel.detail') }}"
                        class="text-orange-600 hover:text-orange-700 hover:bg-orange-50 px-0">
                        Baca Selengkapnya →
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div data-aos="fade-up" class="text-center mt-12">
            <button onclick="alertFitur()"
                class="bg-gradient-to-r from-orange-600 to-amber-600 hover:from-orange-700 hover:to-amber-700 text-white font-medium text-lg px-8 py-3 rounded-lg shadow-md transition-all duration-300">
                Lihat Semua Artikel
            </button>
        </div>
    </div>
</section>

<section class="py-20 px-4 bg-white" id="testimoni">
    <div class="container mx-auto">
        <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Kata <span class="text-gradient">Mereka</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Testimoni dari pelaku UMKM yang telah merasakan manfaat bergabung bersama kami
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($testimonials as $index => $testimonial)
            <div
                class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 card-shadow hover-lift"
                data-aos="fade-up"
                data-aos-delay="{{ 100 + ($index * 200) }}">
                {!! $quoteIcon !!}

                <div class="flex gap-1 mb-4">
                    @for ($i = 0; $i < $testimonial['rating']; $i++)
                        {!! $starIcon !!}
                        @endfor
                        </div>

                        <p class="text-gray-700 mb-6 leading-relaxed italic">
                            "{{ $testimonial['text'] }}"
                        </p>

                        <div class="flex items-center gap-4">
                            <img
                                class="w-16 h-16 rounded-full object-cover"
                                alt="{{ $testimonial['name'] }}"
                                src="{{ $testimonial['image'] }}" />
                            <div>
                                <p class="font-bold text-lg">{{ $testimonial['name'] }}</p>
                                <p class="text-sm text-gray-600">{{ $testimonial['business'] }}</p>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
</section>

<section class="py-20 px-4 bg-gradient-to-br from-orange-600 via-amber-600 to-yellow-600 relative overflow-hidden">
    <div
        class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl bg-animation-cw"></div>
    <div
        class="absolute bottom-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl bg-animation-ccw"></div>

    <div class="container mx-auto relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-block mb-6 heart-pulse" data-aos="zoom-in" data-aos-duration="500">
                {!! $heartIcon !!}
            </div>

            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6" data-aos="zoom-in" data-aos-delay="100">
                Yuk, Dukung Produk Lokal <br> Kita!
            </h2>

            <p class="text-xl md:text-2xl text-white/90 mb-8 leading-relaxed" data-aos="zoom-in" data-aos-delay="200">
                Setiap pembelian produk lokal adalah investasi untuk ekonomi Banyumas yang lebih baik.
                Mari bersama-sama memajukan UMKM lokal kita!
            </p>

            <div class="flex flex-wrap gap-4 justify-center" data-aos="zoom-in" data-aos-delay="300">
                <a
                    href="#"
                    class="inline-flex items-center justify-center rounded-lg text-lg px-8 py-3 font-semibold transition duration-150 ease-in-out 
                           bg-white text-orange-600 hover:bg-gray-100">
                    Mulai Belanja
                    {!! $arrowRightIcon !!}
                </a>

                <a
                    href="#"
                    class="inline-flex items-center justify-center rounded-lg text-lg px-8 py-3 font-semibold transition duration-150 ease-in-out 
                           border-2 border-white text-white hover:bg-white/10">
                    Daftar Sebagai Penjual
                </a>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-white" data-aos="zoom-in" data-aos-delay="400">
                @foreach ($ctaStats as $stat)
                <div data-aos="fade-up" data-aos-delay="500">
                    <p class="text-4xl font-bold mb-2">{{ $stat['count'] }}</p>
                    <p class="text-white/80">{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });

    function alertFitur() {
        alert("🚧 Fitur belum tersedia.\nFitur ini akan segera hadir! 🚀");
    }
</script>