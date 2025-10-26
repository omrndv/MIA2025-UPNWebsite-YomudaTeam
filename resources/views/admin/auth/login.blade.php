@extends('layouts.admin')
@section('title', 'Login Admin')

@section('content')
<div class="w-full min-h-screen flex items-center justify-center bg-neutral-100 px-4">
  <div class="w-full max-w-[456px] p-8 bg-white rounded-[56px] border border-neutral-200 flex flex-col items-center gap-10 shadow-sm">

    {{-- LOGO + TITLE --}}
    <div class="w-full flex flex-col items-center gap-3">
      <img src="{{ asset('images/logo.png') }}" alt="Logo UMKM Banyumas" class="h-20">
      <div class="text-center">
        <h1 class="text-black text-xl font-bold font-['Plus_Jakarta_Sans']">Selamat Datang di Menu Admin!</h1>
        <p class="text-black text-sm font-normal font-['Plus_Jakarta_Sans'] mt-2">Masukkan data sesuai dengan akunmu</p>
      </div>
    </div>

    {{-- FORM LOGIN --}}
    <form action="#" method="POST" class="w-full flex flex-col gap-4">
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

      {{-- PASSWORD --}}
      <div class="flex flex-col gap-2">
        <label for="password" class="text-black text-sm font-semibold font-['Plus_Jakarta_Sans']">Sandi</label>
        <div class="flex items-center gap-2 px-6 py-4 rounded-full border-2 border-neutral-200">
          <i class="fa-solid fa-lock text-orange-500 text-lg"></i>
          <input 
            type="password" 
            id="password" 
            name="password" 
            class="flex-1 bg-transparent outline-none text-sm text-zinc-700 placeholder-zinc-500"
            placeholder="Masukkan kata sandimu"
            required
          >
          <i class="fa-solid fa-eye-slash text-zinc-500 text-lg cursor-pointer" id="toggle-password"></i>
        </div>
      </div>

    {{-- LUPA SANDI --}}
    <div class="text-right">
    <a href="{{ route('admin.forgot-password') }}" class="text-orange-600 text-sm font-bold font-['Plus_Jakarta_Sans'] hover:underline">
        Lupa kata sandi?
    </a>
    </div>

      {{-- TOMBOL LOGIN --}}
      <button type="submit" class="mt-5 w-full px-8 py-4 bg-orange-600 rounded-full text-white text-sm font-semibold font-['Plus_Jakarta_Sans'] hover:bg-orange-700 transition">
        Masuk
      </button>
    </form>
  </div>
</div>
@endsection