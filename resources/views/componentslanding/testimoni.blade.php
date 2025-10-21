@php
// Data Testimonial
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
@endphp

<style>
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
</style>

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
                data-aos-delay="{{ 100 + ($index * 200) }}" {{-- Tambahkan delay yang meningkat: 100, 300, 500 --}}>
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