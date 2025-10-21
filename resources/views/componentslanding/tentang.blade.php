<style>
    @keyframes floatUpDown {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-float {
        animation: floatUpDown 3s ease-in-out infinite;
    }
</style>

<section class="py-20 bg-white" id="tentang">
    <div class="max-w-screen-xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

        <div data-aos="fade-right">
            <h2 class="text-4xl font-extrabold text-gray-900">
                Tentang <span class="text-orange-600">UMKM Banyumas</span>
            </h2>
            <p class="mt-4 text-gray-700 leading-relaxed">
                Platform digital yang didedikasikan untuk mempromosikan dan mengembangkan
                UMKM lokal di Kabupaten Banyumas. Kami percaya bahwa produk lokal
                memiliki kualitas yang tidak kalah dengan produk luar, dan layak mendapat
                perhatian lebih.
            </p>
            <p class="mt-4 text-gray-700 leading-relaxed">
                Dengan menggabungkan kearifan lokal dan teknologi modern, kami membantu
                pelaku UMKM untuk menjangkau pasar yang lebih luas, sekaligus memudahkan
                masyarakat menemukan produk-produk berkualitas dari tetangga sendiri.
            </p>

            <div class="mt-8 grid grid-cols-2 gap-5">
                <div class="bg-orange-50 p-5 rounded-xl text-left shadow-sm hover:shadow-md transition" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fa-solid fa-bullseye text-orange-600 text-2xl mb-2"></i>
                    <h3 class="font-semibold text-gray-900">Misi Kami</h3>
                    <p class="text-gray-600 text-sm mt-1">Memberdayakan UMKM lokal Banyumas untuk berkembang dan bersaing di era digital.</p>
                </div>

                <div class="bg-orange-50 p-5 rounded-xl text-left shadow-sm hover:shadow-md transition" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fa-solid fa-users text-orange-600 text-2xl mb-2"></i>
                    <h3 class="font-semibold text-gray-900">Komunitas</h3>
                    <p class="text-gray-600 text-sm mt-1">Membangun ekosistem yang saling mendukung antara pelaku UMKM dan konsumen.</p>
                </div>

                <div class="bg-orange-50 p-5 rounded-xl text-left shadow-sm hover:shadow-md transition" data-aos="zoom-in" data-aos-delay="300">
                    <i class="fa-solid fa-chart-line text-orange-600 text-2xl mb-2"></i>
                    <h3 class="font-semibold text-gray-900">Pertumbuhan</h3>
                    <p class="text-gray-600 text-sm mt-1">Membantu UMKM meningkatkan penjualan dan jangkauan pasar lebih luas.</p>
                </div>

                <div class="bg-orange-50 p-5 rounded-xl text-left shadow-sm hover:shadow-md transition" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fa-solid fa-circle-check text-orange-600 text-2xl mb-2"></i>
                    <h3 class="font-semibold text-gray-900">Kualitas</h3>
                    <p class="text-gray-600 text-sm mt-1">
                        Menjamin produk berkualitas dari pelaku UMKM terpercaya dan terverifikasi.
                    </p>
                </div>
            </div>
        </div>

        <div class="relative" data-aos="fade-left">
            <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=800&q=80"
                alt="Pasar Banyumas"
                class="rounded-2xl shadow-lg w-full object-cover">
            <div class="absolute bottom-4 left-4 bg-white rounded-xl px-5 py-4 shadow-lg animate-float">
                <p class="text-orange-600 font-bold text-lg">500+</p>
                <p class="text-gray-700 text-sm font-medium">UMKM Bergabung</p>
            </div>
        </div>

    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        // Sesuaikan pengaturan global sesuai keinginan Anda
        duration: 1000, // Durasi animasi dalam ms
        once: true, // Hanya animasikan sekali saat discroll
    });
</script>