@extends('layouts.admin')
@section('title', 'Lupa Sandi')

@section('content')
<div class="w-full min-h-screen flex items-center justify-center bg-neutral-100 px-4">
  <div class="w-full max-w-[456px] p-8 bg-white rounded-[56px] border border-neutral-200 flex flex-col items-center gap-10 shadow-sm">

    {{-- LOGO + TITLE --}}
    <div class="w-full flex flex-col items-center gap-3">
      <img src="{{ asset('images/logo.png') }}" alt="Logo UMKM Banyumas" class="h-20">
      <div class="text-center">
        <h1 class="text-black text-xl font-bold font-['Plus_Jakarta_Sans']">Reset kata sandi</h1>
        <p class="text-black text-sm font-normal font-['Plus_Jakarta_Sans'] mt-2">Jangan khawatir, ikuti langkah berikut ini</p>
      </div>
    </div>

    {{-- Form --}}
    <form action="{{ route('admin.otp-verification') }}" method="GET" class="w-full flex flex-col gap-4">
      @csrf
      {{-- EMAIL --}}
      <div class="flex flex-col gap-2">
        <label for="email" class="text-black text-sm font-semibold font-['Plus_Jakarta_Sans']">Email</label>
        <div class="flex items-center gap-2 px-6 py-4 rounded-full border-2 border-neutral-200">
          <i class="fa-solid fa-envelope text-orange-500 text-lg"></i>
          <input 
            type="email" 
            id="email" 
            name="email" 
            class="flex-1 bg-transparent outline-none text-sm text-zinc-700 placeholder-zinc-500"
            placeholder="Masukkan alamat emailmu"
            required
          >
        </div>
      </div>

      {{-- TOMBOL --}}
      <button type="submit" class="mt-5 w-full px-8 py-4 bg-orange-600 rounded-full text-white text-sm font-semibold font-['Plus_Jakarta_Sans'] hover:bg-orange-700 transition">
        Selanjutnya
      </button>
    </form>
  </div>
</div>
@endsection