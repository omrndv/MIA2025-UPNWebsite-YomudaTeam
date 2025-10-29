@extends('layouts.admin-dashboard')

@section('title', 'Data Akun - LokaMas')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold text-neutral-800">Daftar Akun</h1>
  <button 
    class="bg-orange-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-orange-700 transition">
    + Tambah Akun
  </button>
</div>

{{-- CARD STATISTIK --}}
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
  <div class="bg-white shadow rounded-xl p-5 flex items-center gap-4">
    <div class="bg-orange-100 text-orange-600 p-3 rounded-full">
      <i class="fa-solid fa-user text-lg"></i>
    </div>
    <div>
      <p class="text-sm text-neutral-500">Total Akun</p>
      <h3 class="text-lg font-bold text-neutral-800">15</h3>
    </div>
  </div>

  <div class="bg-white shadow rounded-xl p-5 flex items-center gap-4">
    <div class="bg-green-100 text-green-600 p-3 rounded-full">
      <i class="fa-solid fa-user-plus text-lg"></i>
    </div>
    <div>
      <p class="text-sm text-neutral-500">Akun Baru Bulan Ini</p>
      <h3 class="text-lg font-bold text-neutral-800">5</h3>
    </div>
  </div>

  <div class="bg-white shadow rounded-xl p-5 flex items-center gap-4">
    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
      <i class="fa-solid fa-users text-lg"></i>
    </div>
    <div>
      <p class="text-sm text-neutral-500">Akun Aktif</p>
      <h3 class="text-lg font-bold text-neutral-800">13</h3>
    </div>
  </div>
</div>

{{-- TABEL DATA AKUN --}}
<div class="bg-white rounded-xl shadow p-6 overflow-x-auto">
  <table class="min-w-full border-collapse">
    <thead>
      <tr class="bg-orange-100 text-left text-sm font-semibold text-neutral-700">
        <th class="px-4 py-3 rounded-tl-lg">Email</th>
        <th class="px-4 py-3">Username</th>
        <th class="px-4 py-3">Password</th>
        <th class="px-4 py-3 text-center rounded-tr-lg">Aksi</th>
      </tr>
    </thead>

    <tbody>
      @php
        // Untuk demo: pakai 'raw' sebagai kata sandi asli agar bisa di-toggle.
        $akuns = [
          ['email' => 'admin@lokamas.id', 'username' => 'adminlokamas', 'password_mask' => '********', 'password_raw' => 'Admin@123'],
          ['email' => 'rina@gmail.com', 'username' => 'rina_umkm', 'password_mask' => '********', 'password_raw' => 'RinaPass!'],
          ['email' => 'agus@batiklestari.com', 'username' => 'agus_batik', 'password_mask' => '********', 'password_raw' => 'Batik2025'],
          ['email' => 'tini@kopinusantara.id', 'username' => 'tini_kopi', 'password_mask' => '********', 'password_raw' => 'TiniKopi#'],
        ];
      @endphp

      @foreach ($akuns as $akun)
        <tr class="border-b hover:bg-orange-50 transition text-sm">
          <td class="px-4 py-3 font-medium text-neutral-800">{{ $akun['email'] }}</td>
          <td class="px-4 py-3 text-neutral-700">{{ $akun['username'] }}</td>

          {{-- Kolom password: teks + tombol mata --}}
          <td class="px-4 py-3 text-neutral-600">
            <div class="flex items-center justify-start gap-2">
              {{-- teks password (awalnya masked) --}}
              <span class="password-text text-sm text-neutral-800" data-password="{{ $akun['password_raw'] }}">
                {{ $akun['password_mask'] }}
              </span>

              {{-- tombol mata --}}
              <button type="button" class="toggle-password-btn text-neutral-500 hover:text-neutral-800" title="Tampilkan / Sembunyikan kata sandi" aria-label="Tampilkan kata sandi">
                <i class="fa-solid fa-eye-slash"></i>
              </button>
            </div>
          </td>

          <td class="px-4 py-3 text-center">
            <div class="flex justify-center gap-3">
              {{-- Edit --}}
              <button class="text-blue-600 hover:text-blue-800 transition" title="Edit">
                <i class="fa-solid fa-pen-to-square"></i>
              </button>
              {{-- Hapus --}}
              <button class="text-red-600 hover:text-red-800 transition" title="Hapus">
                <i class="fa-solid fa-trash"></i>
              </button>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{-- SCRIPT: toggle show/hide password --}}
@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // pilih semua tombol toggle
    const toggles = document.querySelectorAll('.toggle-password-btn');

    toggles.forEach(btn => {
      btn.addEventListener('click', function () {
        // cari elemen teks password di baris yang sama
        const row = btn.closest('tr');
        if (!row) return;
        const pwdSpan = row.querySelector('.password-text');
        if (!pwdSpan) return;

        const raw = pwdSpan.getAttribute('data-password') || '';
        const masked = '********';

        // cek apakah sekarang sedang ditampilkan
        const isShown = pwdSpan.textContent !== masked && pwdSpan.textContent.trim() !== '';

        if (isShown) {
          // sembunyikan
          pwdSpan.textContent = masked;
          btn.querySelector('i').classList.remove('fa-eye');
          btn.querySelector('i').classList.add('fa-eye-slash');
          btn.setAttribute('aria-pressed', 'false');
        } else {
          // tampilkan
          pwdSpan.textContent = raw;
          btn.querySelector('i').classList.remove('fa-eye-slash');
          btn.querySelector('i').classList.add('fa-eye');
          btn.setAttribute('aria-pressed', 'true');
        }
      });
    });
  });
</script>
@endpush

{{-- Jika layout admin-dashboard tidak menggunakan stack 'scripts', cukup paste script langsung sebelum closing body. --}}
@endsection
