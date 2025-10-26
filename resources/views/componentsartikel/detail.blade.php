@extends('layouts.main')

@section('title', '5 Tips Memulai UMKM dari Nol')

@section('content')
    <section class="py-24 px-6 bg-gradient-to-br from-amber-50 to-orange-50 min-h-screen">
        <div class="max-w-4xl mx-auto">

            <a href="{{ url('/') }}#artikel" class="inline-flex items-center text-orange-600 hover:text-orange-700 mb-8 transition duration-300">
                <i class="fa-solid fa-arrow-left mr-2"></i>
                Kembali ke Artikel
            </a>

            <div data-aos="fade-up" class="relative rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition duration-500 mb-8">
                <img src="https://images.unsplash.com/photo-1595872018818-97555653a011"
                    alt="Ilustrasi Tips Memulai UMKM" class="w-full h-80 object-cover">
                <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-1 rounded-full text-orange-600 font-semibold text-sm shadow-md">
                    Tips Usaha
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="50" class="text-center mb-10">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4 font-bricolage">
                    5 Tips Memulai UMKM dari Nol
                </h1>
                <p class="text-gray-500 flex items-center justify-center gap-2 text-sm">
                    <i class="fa-solid fa-clock text-orange-600"></i> 5 menit baca
                    <span class="mx-2 text-gray-400">•</span>
                    <i class="fa-solid fa-user-circle text-orange-600"></i> Admin UMKM Banyumas
                </p>
            </div>

            <article data-aos="fade-up" data-aos-delay="100" class="prose prose-lg max-w-none prose-orange mx-auto">
                <p>
                    Memulai usaha kecil atau UMKM dari nol memang menantang, terutama bagi Anda yang baru pertama kali
                    terjun ke dunia bisnis. Namun dengan strategi yang tepat, bukan tidak mungkin usaha Anda bisa berkembang
                    pesat. Berikut beberapa tips penting yang bisa Anda terapkan:
                </p>

                <h3>1. Tentukan Produk yang Tepat</h3>
                <p>
                    Pilih produk yang sesuai dengan kebutuhan pasar dan minat pribadi Anda. Dengan begitu, Anda akan lebih
                    bersemangat menjalankannya dan memahami seluk-beluk produknya.
                </p>

                <h3>2. Buat Rencana Bisnis yang Jelas</h3>
                <p>
                    Rencana bisnis menjadi panduan arah perkembangan usaha Anda. Tentukan target pasar, strategi pemasaran,
                    dan proyeksi keuangan sejak awal.
                </p>

                <h3>3. Manfaatkan Platform Digital</h3>
                <p>
                    Gunakan media sosial dan marketplace untuk memperluas jangkauan pelanggan. Saat ini, keberadaan online
                    menjadi kunci utama agar bisnis bisa bersaing.
                </p>

                <h3>4. Kelola Keuangan dengan Bijak</h3>
                <p>
                    Pisahkan keuangan pribadi dengan bisnis. Catat setiap pemasukan dan pengeluaran agar bisa memantau
                    perkembangan usaha secara akurat.
                </p>

                <h3>5. Konsisten dan Terus Belajar</h3>
                <p>
                    Dunia usaha terus berkembang. Jangan takut untuk berinovasi dan belajar dari pengalaman, baik dari
                    kesuksesan maupun kegagalan.
                </p>

                <blockquote class="border-l-4 border-orange-500 pl-4 py-2 italic text-gray-600">
                    "Kunci utama kesuksesan UMKM bukan hanya modal, tetapi semangat dan konsistensi dalam belajar serta beradaptasi."
                </blockquote>

                <p>
                    Dengan menerapkan langkah-langkah di atas, Anda akan memiliki fondasi kuat untuk memulai UMKM yang
                    berkelanjutan dan berdaya saing.
                </p>
            </article>

            <div data-aos="fade-up" data-aos-delay="200" class="text-center mt-12">
                <a href="{{ url('/') }}#artikel"
                    class="inline-block bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg font-semibold shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    ← Kembali ke Daftar Artikel
                </a>
            </div>
        </div>
    </section>
@endsection