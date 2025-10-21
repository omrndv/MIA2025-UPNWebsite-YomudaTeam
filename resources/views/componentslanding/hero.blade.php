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
@endphp

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