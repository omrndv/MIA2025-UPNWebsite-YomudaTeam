<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LokaMas - Website UMKM Lokal Banyumas</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,600;12..96,700&family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                        bricolage: ['Bricolage Grotesque', 'sans-serif'],
                        jakarta: ['Plus Jakarta Sans', 'sans-serif'],
                        montserrat: ['Montserrat', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="flex flex-col min-h-screen font-inter text-gray-800 bg-white">

    @if(!empty($includeNavbar) && $includeNavbar)
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

                <a href="#beranda" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo LokaMas UMKM Banyumas" class="h-20">
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
                    <a href="#contact" class="text-gray-600 hover:text-orange-600 text-[15px] font-medium transition">
                        Kontak
                    </a>
                    <a href="#" class="bg-orange-600 text-white px-5 py-2.5 rounded-full text-sm font-semibold shadow-md hover:bg-orange-700 transition transform hover:scale-105">
                        Daftar UMKM
                    </a>
                </div>

                <div class="md:hidden flex items-center">
                    <button @click="open = !open" class="text-gray-600 hover:text-orange-600 focus:outline-none p-2 rounded-md" aria-label="Toggle Menu">
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
                <a href="#contact" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-orange-50 hover:text-orange-600 border-t pt-3 mt-1 border-gray-100">
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
    @endif

    <main class="flex-1">
        @isset($page)
        @include($page) 
        @endisset
    </main>

    @if(!empty($includeFooter) && $includeFooter)
    <footer id="contact" class="bg-gradient-to-br from-gray-900 to-gray-800 text-gray-400 py-16 border-t border-gray-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">

                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="bg-orange-600 text-white p-2 rounded-lg">
                            <i class="fa-solid fa-store text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold text-white">LokaMas</span>
                    </div>
                    <p class="text-sm leading-relaxed mb-6">
                        Platform digital untuk mempromosikan dan mengembangkan UMKM lokal Kabupaten Banyumas.
                    </p>

                    <div class="flex space-x-4">
                        <a href="#" onclick="handleLinkClick(event)" class="w-10 h-10 flex items-center justify-center bg-orange-600 hover:bg-orange-700 text-white rounded-full transition-all duration-300 transform hover:scale-110" aria-label="Facebook LokaMas">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" onclick="handleLinkClick(event)" class="w-10 h-10 flex items-center justify-center bg-orange-600 hover:bg-orange-700 text-white rounded-full transition-all duration-300 transform hover:scale-110" aria-label="Instagram LokaMas">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" onclick="handleLinkClick(event)" class="w-10 h-10 flex items-center justify-center bg-orange-600 hover:bg-orange-700 text-white rounded-full transition-all duration-300 transform hover:scale-110" aria-label="Youtube LokaMas">
                            <i class="fab fa-youtube text-lg"></i>
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-lg font-bold text-white mb-4">Menu</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#beranda" onclick="handleLinkClick(event)" class="hover:text-orange-500 transition-colors">Beranda</a></li>
                        <li><a href="#kategori" onclick="handleLinkClick(event)" class="hover:text-orange-500 transition-colors">Kategori</a></li>
                        <li><a href="#produk" onclick="handleLinkClick(event)" class="hover:text-orange-500 transition-colors">Produk</a></li>
                        <li><a href="#artikel" onclick="handleLinkClick(event)" class="hover:text-orange-500 transition-colors">Artikel</a></li>
                        <li><a href="#tentang" onclick="handleLinkClick(event)" class="hover:text-orange-500 transition-colors">Tentang</a></li>
                    </ul>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-lg font-bold text-white mb-4">Kategori Populer</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" onclick="handleLinkClick(event)" class="hover:text-orange-500 transition-colors">Kuliner Lokal</a></li>
                        <li><a href="#" onclick="handleLinkClick(event)" class="hover:text-orange-500 transition-colors">Kerajinan Tangan</a></li>
                        <li><a href="#" onclick="handleLinkClick(event)" class="hover:text-orange-500 transition-colors">Fashion</a></li>
                        <li><a href="#" onclick="handleLinkClick(event)" class="hover:text-orange-500 transition-colors">Produk Pertanian</a></li>
                        <li><a href="#" onclick="handleLinkClick(event)" class="hover:text-orange-500 transition-colors">Jasa</a></li>
                    </ul>
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-lg font-bold text-white mb-4">Kontak Kami</h3>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot text-orange-500 mt-1 flex-shrink-0"></i>
                            <span>Jl. Jenderal Sudirman No. 123,<br>Purwokerto, Banyumas</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-orange-500 flex-shrink-0"></i>
                            <span><a href="tel:+6281234567890" class="hover:text-orange-500 transition">+62 812-3456-7890</a></span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-orange-500 flex-shrink-0"></i>
                            <span><a href="mailto:info@umkmbanyumas.id" class="hover:text-orange-500 transition">info@umkmbanyumas.id</a></span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-8 mt-4" data-aos="fade-up" data-aos-delay="500">
                <p class="text-center text-sm text-gray-500">
                    © <span id="current-year"></span> LokaMas UMKM Banyumas. Dibuat dengan <span class="text-orange-500">❤️</span> untuk kemajuan UMKM lokal.
                </p>
            </div>
        </div>
    </footer>
    @endif

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            disable: 'mobile' 
        });

        function handleLinkClick(event) {
            event.preventDefault(); 
            alert("🚧 Fitur belum tersedia\nFitur ini akan segera hadir! Minta di prompt berikutnya ya! 🚀");
        }
        
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>
</body>

</html>