@php
$stats = [
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
                @foreach ($stats as $stat)
                <div data-aos="fade-up" data-aos-delay="500">
                    <p class="text-4xl font-bold mb-2">{{ $stat['count'] }}</p>
                    <p class="text-white/80">{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>