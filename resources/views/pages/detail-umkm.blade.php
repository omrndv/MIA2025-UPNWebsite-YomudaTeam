    <section class="mx-36 my-12">
        <div class="max-w-full">
            <div class="w-full border rounded-xl p-6 flex items-center justify-between bg-white">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/imgg4.jpg') }}" alt="Logo" class="w-16 h-16 rounded-full object-cover">
                    <div class="flex flex-col">
                        <div class="flex items-center gap-1">
                            <h2 class="font-bold text-2xl text-orange-600">Toko Buah Arum</h2>
                            <span class="text-purple-500 text-xl">✔</span>
                        </div>
                        <span class="text-base text-gray-500">Sokaraja, Banyumas | Indonesia </span>

                    </div>
                </div>
                <div class="flex items-center gap-6">
                    <div class="flex flex-col items-center">
                        <span class="text-orange-600 text-xl"><i class="fa-solid fa-clock"></i></span>
                        <span class="text-sm font-semibold">08.30 - 17.00</span>
                        <span class="text-xs text-gray-500">Jam Buka</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-xl text-orange-600"><i class="fa-solid fa-store"></i></span>
                        <span class="text-sm font-semibold">Makanan & Minuman</span>
                        <span class="text-xs text-gray-500">Kategori</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-yellow-500 text-xl"><i class="fa-solid fa-star"></i></span>
                        <span class="text-sm font-semibold">4.9</span>
                        <span class="text-xs text-gray-500">Rating & Ulasan</span>
                    </div>
                </div>
            </div>
        </div>

        <h6 class="text-gray-800 font-semibold text-2xl mt-8"> Produk Unggulan Toko Buah Arum</h6>
        <h6 class="text-gray-400 font-base text-base mt-1"> Pilihan terbaik yang kami siapkan khusus untuk
            Anda.
        </h6>

        <div class="grid grid-cols-4 gap-4 my-8">
            @for ($i = 0; $i < 4; $i++)
                <div class="bg-white rounded-2xl shadow hover:-translate-y-1 transition" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="relative">
                        <img src="{{ asset('images/imgg4.jpg') }}" alt="Produk 1"
                            class="w-full rounded-t-2xl object-cover max-h-[220px]">
                        <div
                            class="absolute top-3 right-3 bg-white rounded-full shadow px-2 py-1 flex items-center gap-1 text-sm font-semibold">
                            <i class="fa-solid fa-star text-yellow-400"></i> 4.8
                        </div>
                    </div>
                    <div class="p-5 text-left">
                        <h3 class="text-lg font-semibold text-gray-900">Template Nama Produk</h3>
                        <p class="text-gray-600 text-sm">Buah Segar</p>
                        <div class="flex items-center text-gray-500 text-sm mt-1">
                            <i class="fa-solid fa-boxes-stacked mr-2"></i> 7+rb Terjual
                        </div>
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-orange-600 font-bold text-lg">Rp *******</p>
                            <a href="{{ route('produk.detail', ['slug' => 'getuk-goreng-sokaraja']) }}"
                                class="inline-block bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-orange-700 transition">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="grid grid-cols-3 gap-4 my-12">
            <!-- Gambar Kiri -->
            <div class="col-span-2">
                <img class="max-h-[600px] w-full rounded-lg object-cover" src="{{ asset('images/imgg4.jpg') }}"
                    alt="">
            </div>

            <!-- Gambar Kanan -->
            <div class="grid grid-rows-2 gap-2 h-full">
                <div class="max-h-[290px]">
                    <img class="h-full w-full object-cover rounded-lg" src="{{ asset('images/imgg2.jpg') }}"
                        alt="">
                </div>
                <div class="max-h-[295px]">
                    <img class="h-full w-full object-cover rounded-lg" src="{{ asset('images/imgg3.jpg') }}"
                        alt="">
                </div>
            </div>
        </div>

        <hr>

        <h6 class="text-gray-800 font-semibold text-2xl mt-8"> Produk Lainnya Toko Buah Arum</h6>
        <h6 class="text-gray-400 font-base text-base mt-1"> Produk lainnya dari Toko Buah Arum </h6>

        <div class="grid grid-cols-4 gap-4 my-8">
            @for ($i = 0; $i < 8; $i++)
                <div class="bg-white rounded-2xl shadow hover:-translate-y-1 transition" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="relative">
                        <img src="{{ asset('images/imgg4.jpg') }}" alt="Produk 1"
                            class="w-full rounded-t-2xl object-cover max-h-[220px]">
                        <div
                            class="absolute top-3 right-3 bg-white rounded-full shadow px-2 py-1 flex items-center gap-1 text-sm font-semibold">
                            <i class="fa-solid fa-star text-yellow-400"></i> 4.8
                        </div>
                    </div>
                    <div class="p-5 text-left">
                        <h3 class="text-lg font-semibold text-gray-900">Template Nama Produk</h3>
                        <p class="text-gray-600 text-sm">Buah Segar</p>
                        <div class="flex items-center text-gray-500 text-sm mt-1">
                            <i class="fa-solid fa-boxes-stacked mr-2"></i> 7+rb Terjual
                        </div>
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-orange-600 font-bold text-lg">Rp *******</p>
                            <a href="{{ route('produk.detail', ['slug' => 'getuk-goreng-sokaraja']) }}"
                                class="inline-block bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-orange-700 transition">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>







        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                        data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">Profile</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Dashboard</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">Settings</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Contacts</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                aria-labelledby="contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
        </div>

        <section class="px-6 mt-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 border-b pb-2">Lokasi UMKM</h2>
            <div class="p-6 bg-white rounded-xl border border-gray-200 shadow-lg">

                <p class="text-gray-700 mb-4 text-center sm:text-left">
                    Anda dapat mengunjungi UMKM **{{ $product['umkm'] ?? 'Toko' }}** di alamat:
                    <span class="font-semibold text-gray-900 block mt-1">
                        {{ $product['full_address'] ?? 'H722+5J6, Kalibiru, Teluk, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah' }}
                    </span>
                </p>

                {{-- KODE IFRAME RESMI ANDA --}}
                <div class="h-96 w-full rounded-lg overflow-hidden border border-gray-300 shadow-inner">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.09201570368!2d109.29423497522124!3d-7.455072173475606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655bed30d35eb3%3A0xca11d41203e75029!2sGriya%20Batik%20HN!5e0!3m2!1sid!2sid!4v1761454417779!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                {{-- Link untuk membuka di aplikasi Maps (Menggunakan alamat dari Controller) --}}
                <a href="https://maps.google.com/?q={{ urlencode($product['full_address'] ?? 'Batik Nusantara Purwokerto') }}"
                    target="_blank"
                    class="mt-4 inline-flex items-center text-orange-600 hover:text-orange-800 font-medium text-sm">
                    Buka di Google Maps <i class="fas fa-external-link-alt ml-2"></i>
                </a>
            </div>
            </div>

        </section>
        <h2 class="text-4xl font-bold text-gray-600 my-12">Rekomendasi</h2>
    </section>
