<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard Admin - LokaMas')</title>

  {{-- Tailwind + FontAwesome --}}
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

  {{-- Font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            jakarta: ['Plus Jakarta Sans', 'sans-serif'],
          },
          colors: {
            primary: '#ea580c',
          }
        }
      }
    }
  </script>
</head>

<body class="font-jakarta bg-neutral-100 min-h-screen flex">

  {{-- SIDEBAR --}}
  <aside id="sidebar" 
         class="fixed lg:static inset-y-0 left-0 w-72 bg-white shadow-lg flex flex-col justify-between transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50">

    {{-- BAGIAN ATAS --}}
    <div>
      {{-- LOGO --}}
      <div class="flex items-center justify-center py-4 border-b">
        <img src="{{ asset('images/logo.png') }}" alt="Logo LokaMas" class="h-16">
      </div>

      {{-- NAVIGATION --}}
      <nav class="mt-6 flex flex-col gap-2">
        <a href="{{ url('admin/dashboard/umkm') }}" 
           class="flex items-center gap-3 px-6 py-3 rounded-full mx-3 text-sm font-semibold transition
           {{ Request::is('admin/dashboard/umkm') ? 'bg-orange-600 text-white' : 'text-neutral-700 hover:bg-orange-50 hover:text-primary' }}">
          <i class="fa-solid fa-store text-lg"></i> UMKM
        </a>

        <a href="{{ url('admin/dashboard/artikel') }}" 
           class="flex items-center gap-3 px-6 py-3 rounded-full mx-3 text-sm font-semibold transition
           {{ Request::is('admin/dashboard/artikel') ? 'bg-orange-600 text-white' : 'text-neutral-700 hover:bg-orange-50 hover:text-primary' }}">
          <i class="fa-solid fa-newspaper text-lg"></i> Artikel
        </a>

        <a href="{{ url('admin/dashboard/akun') }}" 
           class="flex items-center gap-3 px-6 py-3 rounded-full mx-3 text-sm font-semibold transition
           {{ Request::is('admin/dashboard/akun') ? 'bg-orange-600 text-white' : 'text-neutral-700 hover:bg-orange-50 hover:text-primary' }}">
          <i class="fa-solid fa-user text-lg"></i> Akun
        </a>
      </nav>
    </div>

    {{-- BAGIAN BAWAH: PROFILE + LOGOUT --}}
    <div class="border-t px-6 py-5 flex flex-col gap-4">
      
  {{-- PROFILE ADMIN (Versi Icon) --}}
  <div class="flex items-center gap-3 bg-neutral-50 rounded-xl p-3">
    <div class="bg-orange-100 text-orange-600 p-3 rounded-full">
      <i class="fa-solid fa-user text-lg"></i>
    </div>
    <div>
      {{-- Nama dan username (dummy atau dari auth) --}}
      <p class="font-semibold text-neutral-800 text-sm">
        {{ Auth::user()->name ?? 'Admin LokaMas' }}
      </p>
      <p class="text-xs text-neutral-500">
        {{ Auth::user()->username ?? 'adminlokamas' }}
      </p>
    </div>
  </div>

      {{-- LOGOUT --}}
      <a href="{{ url('admin/logout') }}" 
         class="flex items-center gap-3 text-sm text-red-500 font-semibold hover:text-red-600 transition">
        <i class="fa-solid fa-right-from-bracket"></i> Keluar
      </a>
    </div>
  </aside>

  {{-- OVERLAY UNTUK MOBILE --}}
  <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden lg:hidden z-40"></div>

  {{-- KONTEN UTAMA --}}
  <main class="flex-1 p-6 lg:p-8 overflow-y-auto w-full">
    {{-- HEADER TOP (MOBILE) --}}
    <div class="flex items-center justify-between lg:hidden mb-4">
      <button id="menuBtn" class="text-2xl text-primary">
        <i class="fa-solid fa-bars"></i>
      </button>
      <h1 class="text-lg font-bold text-neutral-800">Dashboard</h1>
    </div>

    @yield('content')
  </main>

  {{-- SCRIPT TOGGLE SIDEBAR --}}
  <script>
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menuBtn');
    const overlay = document.getElementById('overlay');

    menuBtn?.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
      overlay.classList.toggle('hidden');
    });

    overlay?.addEventListener('click', () => {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });
  </script>

</body>
</html>