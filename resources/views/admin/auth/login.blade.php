@extends('layouts.admin')

@section('content')
<div class="min-h-screen flex flex-col lg:flex-row bg-white">

  {{-- BAGIAN KIRI (gambar + overlay teks) --}}
  <div class="relative w-full lg:w-[473px] h-[300px] lg:h-auto overflow-hidden flex-shrink-0">

    {{-- GAMBAR BACKGROUND --}}
    <img src="{{ asset('images/login-side.png') }}" alt="Background Admin" class="absolute inset-0 w-full h-full object-cover">

    {{-- OVERLAY GRADIENT --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/0 to-black/70"></div>
    
    {{-- LOGO + SHADOW --}}
    <div class="absolute top-6 left-6 z-20">
      {{-- shadow di bawah logo --}}
      <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-14 h-5 bg-black/40 rounded-full blur-md z-10 md:w-20 md:h-6 md:-bottom-3"></div>

      {{-- logo --}}
      <img 
        src="{{ asset('images/logo.png') }}" 
        alt="Logo LokaMas" 
        class="relative h-12 md:h-16 z-20"
      >
    </div>

    {{-- TEKS --}}
    <div class="absolute left-6 right-6 bottom-6 lg:left-[37px] lg:right-auto lg:bottom-[40px] lg:w-96 flex flex-col gap-2 z-10 text-left">
      <h1 class="text-white text-2xl md:text-3xl font-bold font-['Plus_Jakarta_Sans'] leading-snug">
        Selamat Datang di Panel Admin LokaMas
      </h1>
      <p class="text-white text-xs md:text-sm font-normal font-['Plus_Jakarta_Sans'] leading-relaxed">
        Silakan masuk menggunakan akun admin Anda untuk mengelola data UMKM Banyumas dan menjaga informasi tetap up-to-date.
      </p>
    </div>
  </div>

  {{-- BAGIAN KANAN (form login tanpa shadow) --}}
  <div class="flex-1 flex justify-center items-center bg-white px-6 py-10 md:py-16">
    <div class="w-full max-w-md md:max-w-lg lg:max-w-[536px] p-6 md:p-10 rounded-3xl md:rounded-[56px] flex flex-col items-center gap-8 md:gap-10">

      {{-- JUDUL --}}
      <div class="text-center">
        <h2 class="text-black text-xl font-bold font-['Plus_Jakarta_Sans']">Menu Admin!</h2>
        <p class="text-black text-sm font-normal font-['Plus_Jakarta_Sans'] mt-2">Masukkan data sesuai dengan akunmu</p>
      </div>

      {{-- FORM --}}
      <form action="#" method="POST" class="w-full flex flex-col gap-5 md:gap-6">
        @csrf

        {{-- EMAIL --}}
        <div class="flex flex-col gap-2">
          <label for="email" class="text-black text-sm font-semibold font-['Plus_Jakarta_Sans']">Email</label>
          <div class="flex items-center gap-3 px-5 md:px-6 py-3 md:py-4 rounded-full border-2 border-neutral-200">
            <i class="fa-solid fa-user text-orange-500 text-lg"></i>
            <input 
              type="email" 
              id="email" 
              name="email"
              placeholder="Masukkan alamat emailmu"
              class="flex-1 bg-transparent outline-none text-sm md:text-base text-zinc-700 placeholder-zinc-500 font-['Plus_Jakarta_Sans']"
              required>
          </div>
        </div>

        {{-- PASSWORD --}}
        <div class="flex flex-col gap-2">
          <label for="password" class="text-black text-sm font-semibold font-['Plus_Jakarta_Sans']">Sandi</label>
          <div class="flex items-center gap-3 px-5 md:px-6 py-3 md:py-4 rounded-full border-2 border-neutral-200">
            <i class="fa-solid fa-lock text-orange-500 text-lg"></i>
            <input 
              type="password" 
              id="password" 
              name="password"
              placeholder="Masukkan kata sandimu"
              class="flex-1 bg-transparent outline-none text-sm md:text-base text-zinc-700 placeholder-zinc-500 font-['Plus_Jakarta_Sans']"
              required>
            <i class="fa-solid fa-eye text-zinc-400 cursor-pointer"></i>
          </div>
        </div>

        {{-- LUPA PASSWORD --}}
        <div class="text-right text-orange-600 text-sm font-bold cursor-pointer hover:underline font-['Plus_Jakarta_Sans']">
          Lupa kata sandi?
        </div>

        {{-- BUTTON LOGIN --}}
        <button type="submit" class="w-full py-3 md:py-4 bg-orange-600 text-white text-sm md:text-base font-semibold font-['Plus_Jakarta_Sans'] rounded-full hover:bg-orange-700 transition-all">
          Masuk
        </button>
      </form>
    </div>
  </div>
</div>
@endsection