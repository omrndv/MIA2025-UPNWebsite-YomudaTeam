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
            @php
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
            @endphp

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
                    <button onclick="alertFitur()" class="text-orange-600 hover:text-orange-700 hover:bg-orange-50 px-0">
                        Baca Selengkapnya →
                    </button>
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

<script>
    function alertFitur() {
        alert("🚧 Fitur belum tersedia.\nFitur ini akan segera hadir! 🚀");
    }
</script>