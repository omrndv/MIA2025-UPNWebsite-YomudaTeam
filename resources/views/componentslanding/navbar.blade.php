@php
$navLinks = [
    ['name' => 'Beranda', 'url' => '#beranda'],
    ['name' => 'Kategori', 'url' => '#kategori'],
    ['name' => 'Produk', 'url' => '#produk'],
    ['name' => 'Tentang', 'url' => '#tentang'],
    ['name' => 'Artikel', 'url' => '#artikel'],
    ['name' => 'Testimoni', 'url' => '#testimoni'],
];

$menuIcon = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <line x1="4" x2="20" y1="12" y2="12" />
    <line x1="4" x2="20" y1="6" y2="6" />
    <line x1="4" x2="20" y1="18" y2="18" />
</svg>';
$closeIcon = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <path d="M18 6 6 18" />
    <path d="m6 6 12 12" />
</svg>';
@endphp

<nav
    class="bg-white sticky top-0 z-50 w-full shadow-md border-b border-orange-100 opacity-0 transition-opacity duration-500"
    x-data="{ open: false }"
    id="main-navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

            <a href="#" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
                <img src="{{ asset('images/logo.png') }}" alt="Logo UMKM Banyumas" class="h-20">
            </a>

            <div class="hidden md:flex flex-1 justify-center space-x-10 text-[15px] font-medium">
                @foreach ($navLinks as $link)
                <a href="{{ $link['url'] }}" class="relative group text-gray-600 hover:text-orange-600 transition">
                    {{ $link['name'] }}
                    <span class="absolute left-0 bottom-0 h-[2px] w-0 bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                @endforeach
            </div>

            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-orange-600 text-[15px] font-medium transition">
                    Kontak
                </a>
                <a href="#" class="bg-orange-600 text-white px-5 py-2.5 rounded-full text-sm font-semibold shadow-md hover:bg-orange-700 transition transform hover:scale-105">
                    Daftar UMKM
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-gray-600 hover:text-orange-600 focus:outline-none p-2 rounded-md">
                    <span x-show="!open" x-cloak>
                        {!! $menuIcon !!}
                    </span>
                    <span x-show="open" x-cloak>
                        {!! $closeIcon !!}
                    </span>
                </button>
            </div>
        </div>
    </div>

    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2"
        class="md:hidden bg-white shadow-lg border-t border-orange-100 absolute w-full">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            @foreach ($navLinks as $link)
            <a href="{{ $link['url'] }}" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-orange-50 hover:text-orange-600">
                {{ $link['name'] }}
            </a>
            @endforeach
            <a href="#" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-orange-50 hover:text-orange-600 border-t pt-3 mt-1 border-gray-100">
                Kontak
            </a>
            <a href="#" @click="open = false" class="block w-full text-center mt-2 bg-orange-600 text-white px-3 py-2 rounded-lg text-base font-semibold hover:bg-orange-700 transition">
                Daftar UMKM
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('main-navbar');
        setTimeout(() => {
            if (navbar) navbar.classList.remove('opacity-0');
        }, 200);
    });
</script>