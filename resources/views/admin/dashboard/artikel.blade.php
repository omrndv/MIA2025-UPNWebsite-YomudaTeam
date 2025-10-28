@extends('layouts.admin-dashboard')

@section('title', 'Data Artikel - LokaMas')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold text-neutral-800">Daftar Artikel</h1>
  <button 
    class="bg-orange-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-orange-700 transition">
    + Tambah Artikel
  </button>
</div>

{{-- CARD STATISTIK --}}
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
  <div class="bg-white shadow rounded-xl p-5 flex items-center gap-4">
    <div class="bg-orange-100 text-orange-600 p-3 rounded-full">
      <i class="fa-solid fa-newspaper text-lg"></i>
    </div>
    <div>
      <p class="text-sm text-neutral-500">Total Artikel</p>
      <h3 class="text-lg font-bold text-neutral-800">24</h3>
    </div>
  </div>

  <div class="bg-white shadow rounded-xl p-5 flex items-center gap-4">
    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
      <i class="fa-solid fa-clock text-lg"></i>
    </div>
    <div>
      <p class="text-sm text-neutral-500">Artikel Terbaru</p>
      <h3 class="text-lg font-bold text-neutral-800">2 hari lalu</h3>
    </div>
  </div>

  <div class="bg-white shadow rounded-xl p-5 flex items-center gap-4">
    <div class="bg-green-100 text-green-600 p-3 rounded-full">
      <i class="fa-solid fa-calendar text-lg"></i>
    </div>
    <div>
      <p class="text-sm text-neutral-500">Artikel Bulan Ini</p>
      <h3 class="text-lg font-bold text-neutral-800">8</h3>
    </div>
  </div>
</div>

{{-- TABEL DATA ARTIKEL --}}
<div class="bg-white rounded-xl shadow p-6 overflow-x-auto">
  <table class="min-w-full border-collapse">
    <thead>
      <tr class="bg-orange-100 text-left text-sm font-semibold text-neutral-700">
        <th class="px-4 py-3 rounded-tl-lg">Judul Artikel</th>
        <th class="px-4 py-3">Isi Artikel</th>
        <th class="px-4 py-3">Tanggal Upload</th>
        <th class="px-4 py-3 text-center rounded-tr-lg">Aksi</th>
      </tr>
    </thead>

    <tbody>
      @php
        $artikels = [
          [
            'judul' => 'UMKM Go Digital: Strategi Menembus Pasar Online',
            'isi' => 'Panduan praktis bagi pelaku UMKM untuk memanfaatkan platform digital guna meningkatkan penjualan...',
            'tanggal' => '2025-10-25'
          ],
          [
            'judul' => 'Membangun Branding Produk Lokal',
            'isi' => 'Artikel ini membahas pentingnya membangun identitas merek dan cara sederhana untuk meningkatkan kepercayaan konsumen...',
            'tanggal' => '2025-10-20'
          ],
          [
            'judul' => 'Tips Meningkatkan Engagement di Media Sosial',
            'isi' => 'Cara membuat konten menarik dan meningkatkan interaksi pelanggan di media sosial agar bisnis makin dikenal...',
            'tanggal' => '2025-10-17'
          ],
        ];
      @endphp

      @foreach ($artikels as $artikel)
        <tr class="border-b hover:bg-orange-50 transition text-sm">
          <td class="px-4 py-3 font-medium text-neutral-800">{{ $artikel['judul'] }}</td>
          <td class="px-4 py-3 text-neutral-700">{{ $artikel['isi'] }}</td>
          <td class="px-4 py-3 text-neutral-600">{{ $artikel['tanggal'] }}</td>
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