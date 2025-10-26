@extends('layouts.admin')
@section('title', 'Verifikasi OTP')

@section('content')
<div class="w-full min-h-screen flex items-center justify-center bg-neutral-100 px-4">
  <div class="w-full max-w-[456px] p-8 bg-white rounded-[56px] border border-neutral-200 flex flex-col items-center gap-10 shadow-sm">

    {{-- LOGO + TITLE --}}
    <div class="w-full flex flex-col items-center gap-3">
      <img src="{{ asset('images/logo.png') }}" alt="Logo UMKM Banyumas" class="h-20">
      <div class="text-center">
        <h1 class="text-black text-xl font-bold font-['Plus_Jakarta_Sans']">Masukkan kode OTP</h1>
        <div class="inline-flex justify-start items-start gap-1">
          <div class="text-center justify-start text-neutral-900 text-sm font-normal font-['Plus_Jakarta_Sans']">Kode OTP dikirim ke</div>
          <div class="text-center justify-start text-orange-600 text-sm font-bold font-['Plus_Jakarta_Sans']">lokamas@gmail.com</div>
        </div>
      </div>
    </div>

    {{-- FORM OTP --}}
    <div class="self-stretch flex flex-col justify-center items-center gap-5">
      <div class="self-stretch inline-flex justify-start items-start gap-4">
        {{-- Kotak OTP --}}
        <div class="flex-1 h-20 px-6 py-5 rounded-full outline outline-2 outline-offset-[-2px] outline-neutral-200 flex justify-center items-center gap-2">
          <input 
            type="text" 
            maxlength="1" 
            class="text-center text-neutral-900 text-base font-semibold font-['Plus_Jakarta_Sans'] outline-none w-full h-full" 
            id="otp1" 
            required 
            autofocus
          >
        </div>
        <div class="flex-1 h-20 px-6 py-5 rounded-full outline outline-2 outline-offset-[-2px] outline-neutral-200 flex justify-center items-center gap-2">
          <input 
            type="text" 
            maxlength="1" 
            class="text-center text-neutral-900 text-base font-semibold font-['Plus_Jakarta_Sans'] outline-none w-full h-full" 
            id="otp2"
            required
          >
        </div>
        <div class="flex-1 h-20 px-6 py-5 rounded-full outline outline-2 outline-offset-[-2px] outline-neutral-200 flex justify-center items-center gap-2">
          <input 
            type="text" 
            maxlength="1" 
            class="text-center text-neutral-900 text-base font-semibold font-['Plus_Jakarta_Sans'] outline-none w-full h-full" 
            id="otp3"
            required
          >
        </div>
        <div class="flex-1 h-20 px-6 py-5 rounded-full outline outline-2 outline-offset-[-2px] outline-neutral-200 flex justify-center items-center gap-2">
          <input 
            type="text" 
            maxlength="1" 
            class="text-center text-neutral-900 text-base font-semibold font-['Plus_Jakarta_Sans'] outline-none w-full h-full" 
            id="otp4"
            required
          >
        </div>
      </div>
    </div>

    {{-- Kode tidak masuk? --}}
    <div class="inline-flex justify-start items-start gap-1">
      <div class="text-center justify-start text-neutral-900 text-sm font-normal font-['Plus_Jakarta_Sans']">Kode tidak masuk?</div>
      <a href="{{ route('admin.forgot-password') }}" class="text-orange-600 text-sm font-bold font-['Plus_Jakarta_Sans'] hover:underline">
        Kirim ulang kode
      </a>
    </div>

    {{-- TOMBOL SELANJUTNYA --}}
    <button type="submit" class="w-full px-8 py-4 bg-orange-600 rounded-full text-white text-sm font-semibold font-['Plus_Jakarta_Sans'] hover:bg-orange-700 transition">
      Selanjutnya
    </button>
  </div>
</div>
@endsection
