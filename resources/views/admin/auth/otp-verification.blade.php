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
        <h2 class="text-black text-xl font-bold font-['Plus_Jakarta_Sans']">Masukan kode OTP</h2>
        <div class="inline-flex justify-start items-start gap-1">
          <div class="text-center justify-start text-neutral-900 text-sm font-normal font-['Plus_Jakarta_Sans']">Kode OTP dikirim ke</div>
          <div class="text-center justify-start text-orange-600 text-sm font-bold font-['Plus_Jakarta_Sans']">lokamas@gmail.com</div>
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
      <div class="inline-flex justify-start items-start gap-1">
        <div class="text-center justify-start text-neutral-900 text-sm font-normal font-['Plus_Jakarta_Sans']">Kode OTP tidak dikirim?</div>
                <div class="text-right text-orange-600 text-sm font-bold cursor-pointer hover:underline font-['Plus_Jakarta_Sans']">
          Kirim ulang
        </div>
      </div>
    </div>

        {{-- BUTTON LOGIN --}}
        <button type="submit" class="w-full py-3 md:py-4 bg-orange-600 text-white text-sm md:text-base font-semibold font-['Plus_Jakarta_Sans'] rounded-full hover:bg-orange-700 transition-all">
          Selanjutnya
        </button>
      </form>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const inputs = document.querySelectorAll('input[type="text"][id^="otp"]');

    inputs.forEach((input, index) => {
      input.addEventListener("input", (e) => {
        const value = e.target.value;

        // Hanya izinkan angka
        if (!/^[0-9]$/.test(value)) {
          e.target.value = "";
          return;
        }

        // Jika sudah isi 1 angka, pindah ke input berikutnya
        if (value && index < inputs.length - 1) {
          inputs[index + 1].focus();
        }
      });

      // Jika tekan backspace di input kosong, pindah ke input sebelumnya
      input.addEventListener("keydown", (e) => {
        if (e.key === "Backspace" && !input.value && index > 0) {
          inputs[index - 1].focus();
        }
      });
    });
  });
</script>

@endsection