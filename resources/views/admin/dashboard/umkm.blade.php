@extends('layouts.admin-dashboard')

@section('title', 'Data UMKM - LokaMas')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold text-neutral-800">Daftar UMKM</h1>
  <button 
    class="bg-orange-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-orange-700 transition">
    + Tambah UMKM
  </button>
</div>

{{-- CARD STATISTIK --}}
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
  <div class="bg-white shadow rounded-xl p-5 flex items-center gap-4">
    <div class="bg-orange-100 text-orange-600 p-3 rounded-full">
      <i class="fa-solid fa-store text-lg"></i>
    </div>
    <div>
      <p class="text-sm text-neutral-500">Total UMKM</p>
      <h3 class="text-lg font-bold text-neutral-800">12</h3>
    </div>
  </div>

  <div class="bg-white shadow rounded-xl p-5 flex items-center gap-4">
    <div class="bg-green-100 text-green-600 p-3 rounded-full">
      <i class="fa-solid fa-box text-lg"></i>
    </div>
    <div>
      <p class="text-sm text-neutral-500">Total Produk</p>
      <h3 class="text-lg font-bold text-neutral-800">58</h3>
    </div>
  </div>

  <div class="bg-white shadow rounded-xl p-5 flex items-center gap-4">
    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
      <i class="fa-solid fa-user text-lg"></i>
    </div>
    <div>
      <p class="text-sm text-neutral-500">Akun Terdaftar</p>
      <h3 class="text-lg font-bold text-neutral-800">7</h3>
    </div>
  </div>
</div>

{{-- TABEL DATA UMKM --}}
<div class="bg-white rounded-xl shadow p-6 overflow-x-auto">
  <table class="min-w-full border-collapse">
    <thead>
      <tr class="bg-orange-100 text-left text-sm font-semibold text-neutral-700">
        <th class="px-4 py-3 rounded-tl-lg">Nama UMKM</th>
        <th class="px-4 py-3">Alamat</th>
        <th class="px-4 py-3">Fasilitas</th>
        <th class="px-4 py-3">Jumlah Produk</th>
        <th class="px-4 py-3 text-center rounded-tr-lg">Aksi</th>
      </tr>
    </thead>

    <tbody>
      @php
        $umkms = [
          ['nama' => 'Kopi Nusantara', 'alamat' => 'Jl. Merdeka No.10, Purwokerto', 'fasilitas' => 'Wi-Fi, Tempat Parkir', 'produk' => 8],
          ['nama' => 'Batik Lestari', 'alamat' => 'Jl. S. Parman No.21, Banyumas', 'fasilitas' => 'Workshop, Gallery', 'produk' => 15],
          ['nama' => 'Tahu Crispy Maknyus', 'alamat' => 'Jl. Diponegoro No.7, Purwokerto', 'fasilitas' => '-', 'produk' => 5],
        ];
      @endphp

      @foreach ($umkms as $umkm)
        <tr class="border-b hover:bg-orange-50 transition text-sm">
          <td class="px-4 py-3 font-medium text-neutral-800">{{ $umkm['nama'] }}</td>
          <td class="px-4 py-3">{{ $umkm['alamat'] }}</td>
          <td class="px-4 py-3">{{ $umkm['fasilitas'] }}</td>
          <td class="px-4 py-3">{{ $umkm['produk'] }}</td>
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
@endsection
