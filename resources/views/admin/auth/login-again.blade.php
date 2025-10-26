@extends('layouts.admin')
@section('title', 'Login Again')

@section('content')
<div class="w-full min-h-screen flex items-center justify-center bg-neutral-100 px-4">
  <div class="w-full max-w-[456px] p-8 bg-white rounded-[56px] border border-neutral-200 flex flex-col items-center gap-10 shadow-sm">

    {{-- LOGO + TITLE --}}
    <div class="w-full flex flex-col items-center gap-3">
      <img src="{{ asset('images/logo.png') }}" alt="Logo UMKM Banyumas" class="h-20">
      <div class="text-center">
        <h1 class="text-black text-xl font-bold font-['Plus_Jakarta_Sans']">Kata sandi berhasil diganti!</h1>
        <p class="text-black text-sm font-normal font-['Plus_Jakarta_Sans'] mt-2">Masuk menggunakan kata sandi baru</p>
      </div>
    </div>

      {{-- TOMBOL LOGIN --}}
      <button type="submit" class="w-full px-8 py-4 bg-orange-600 rounded-full text-white text-sm font-semibold font-['Plus_Jakarta_Sans'] hover:bg-orange-700 transition">
        Masuk
      </button>
    </form>
  </div>
</div>
@endsection