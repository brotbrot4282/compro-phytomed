@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .wave3-bg {
            background: url('images/sumpelan3.png') no-repeat bottom center;
            background-size: cover;
        }

        .wave-bg {
            background: url('images/sumpelanbg.png') no-repeat bottom center;
            background-size: cover;
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-slide {
            display: flex;
            width: max-content;
            animation: slide 20s linear infinite;
        }
    </style>
@endpush
@section('content')
    <!-- Hero Section -->
    <section class="relative hero-bg h-screen flex flex-col items-center justify-center text-white">

        <!-- Overlay biar teks jelas -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Konten Hero -->
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">PT PYTHOMED NEO FARMA</h1>
            <p class="text-lg md:text-xl mb-6">HERBAL MEDICINE COMPANY</p>
            <a href="{{ url('/about') }}"
                class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg transition">
                Know More About Us
            </a>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="about" class="py-16 bg-white/bg-opacity-90">
        <div class="container mx-auto px-6 md:px-12
        text-center">
            <!-- Grid: gambar + teks -->
            <div class="grid md:grid-cols-2 gap-0 items-center mt-8 md:mt-12">
                <!-- Gambar -->
                <div class="flex justify-center">
                    <img src="{{ asset('images/konten2.jpg') }}" alt="Tentang Kami"
                        class="rounded-2xl shadow-lg w-full max-w-md">
                </div>

                <!-- Teks -->
                <div class="text-left space-y-4 md:space-y-6">
                    <h3 class="text-2xl font-semibold text-gray-800">Apa itu Phytomed Neo Farma?</h3>
                    <p class="text-gray-600">
                        Phytomed Neo Farma merupakan pabrik herbal yang akan membantu anda mewujudkan brand milik anda.
                        Anda dapat menciptakan produk herbal dengan brand milik anda sendiri. Sedangkan Kami akan
                        menyediakan bahan baku, mesin dan tenaga kerja.

                        Kami akan membantu proses produksi dari awal dan perizinan seperti Legalitas HKI, BPOM, hingga
                        produk anda siap jual Kami satu-satunya pabrik yang memberikan Konsultasi Gratis, Kunjungan
                        Pabrik, dan Jasa Produksi paling terjangkau.
                    </p>
                </div>
            </div>

    </section>
    <section id="why-us" class="py-20 bg-gray-opacity-90">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-green-600 mb-6">
                LAYANAN MAKLON HERBAL
            </h2>
            <p class="text-green-600 max-w-3xl mx-auto mb-12">
                Phytomed Neo Farma adalah perusahaan maklon herbal yang berkomitmen menghadirkan produk kesehatan
                berbasis bahan alam dengan kualitas terbaik.
                Didirikan sejak 2015, kami telah dipercaya sebagai mitra oleh berbagai brand untuk mengembangkan produk
                herbal unggulan.
            </p>

            <!-- Grid 4 kolom -->
            <div class="grid md:grid-cols-4 gap-4 ">

                <!-- Box 1 -->
                <div
                    class="bg-green-600 p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center transition-transform duration-300 ease-in-out 
              hover:shadow-xl hover:-translate-y-2">
                    <div class="flex justify-center mb-4 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-12 h-12">
                            <path
                                d="M9 2h6v2h-1v6.586l4.707 4.707a1 1 0 01-.707 1.707H6a1 1 0 01-.707-1.707L10 10.586V4H9V2zm2 8v-6h2v6.586l3.293 3.293H7.707L11 10.586zM5 20h14a1 1 0 010 2H5a1 1 0 110-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">
                        Formulasi & Racikan Herbal
                    </h3>
                    <p class="text-white">
                        Pengembangan resep herbal eksklusif sesuai kebutuhan, dengan riset mendalam dari tim ahli.
                    </p>
                </div>
                <!-- Box 2 -->
                <div
                    class="bg-gray-200 p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center transition-transform duration-300 ease-in-out 
              hover:shadow-xl hover:-translate-y-2">
                    <div class="flex justify-center mb-4 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-12 h-12">
                            <path d="M19.14 12.94c.04-.31.06-.63.06-.94s-.02-.63-.06-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.11-.2-.36-.28-.57-.22l-2.39.96a7.14
                                                                         7.14 0 0 0-1.62-.94l-.36-2.54A.486.486 0 0 0 14 2h-4c-.24 0-.44.17-.48.41l-.36
                                                                         2.54c-.59.24-1.13.56-1.62.94l-2.39-.96c-.21-.06-.46.02-.57.22L2.66
                                                                         8.87c-.11.2-.06.47.12.61l2.03 1.58c-.04.31-.06.63-.06.94s.02.63.06.94l-2.03
                                                                         1.58a.5.5 0 0 0-.12.61l1.92 3.32c.11.2.36.28.57.22l2.39-.96c.49.38
                                                                         1.03.7 1.62.94l.36 2.54c.04.24.24.41.48.41h4c.24 0
                                                                         .44-.17.48-.41l.36-2.54c.59-.24 1.13-.56
                                                                         1.62-.94l2.39.96c.21.06.46-.02.57-.22l1.92-3.32a.5.5
                                                                         0 0 0-.12-.61l-2.03-1.58zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5
                                                                         3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">
                        Produksi & Manufaktur
                    </h3>
                    <p class="text-gray-800">
                        Proses produksi modern dengan standar kualitas tinggi, menggunakan peralatan higienis, efisien,
                        dan sesuai regulasi industri herbal.
                    </p>
                </div>


                <!-- Box 3 -->
                <div
                    class="bg-green-600 p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center transition-transform duration-300 ease-in-out 
              hover:shadow-xl hover:-translate-y-2">
                    <div class="flex justify-center mb-4 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-12 h-12">
                            <path d="M9 21h6v-1H9v1zm3-19C7.48 2 4 5.48 4 10c0
                                                                         3.07 1.64 5.64 4 7.17V19c0 .55.45 1 1
                                                                         1h6c.55 0 1-.45 1-1v-1.83c2.36-1.53
                                                                         4-4.1 4-7.17 0-4.52-3.48-8-8-8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">
                        Desain & Konsep Branding
                    </h3>
                    <p class="text-white mb-2">
                        Konsultasi branding agar produk memiliki ciri khas. Desain kemasan modern & menarik sesuai
                        identitas brand. Penyediaan berbagai pilihan packaging (botol, sachet, kapsul, box, dsb).
                    </p>
                </div>
                <!-- Box 4 -->
                <div
                    class="bg-gray-200 p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center transition-transform duration-300 ease-in-out 
              hover:shadow-xl hover:-translate-y-2">
                    <div class="flex justify-center mb-4 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-12 h-12">
                            <path d="M3 7l9-4 9 4-9 4-9-4zm18 2v8l-9 4-9-4V9l9 4 9-4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">
                        Packaging & Finishing
                    </h3>
                    <p class="text-gray-800">
                        Pilihan desain kemasan premium maupun ekonomis, dengan sistem pengemasan rapi, aman, dan siap
                        distribusi.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section id="why-us" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 md:px-12 text-center">

            <div class="grid md:grid-cols-4 gap-4">
                <!-- Box 5 -->
                <div
                    class="bg-gray-200 p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center transition-transform duration-300 ease-in-out 
              hover:shadow-xl hover:-translate-y-2">
                    <div class="flex justify-center mb-4 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-12 h-12">
                            <path d="M20.59 13.41l-7.17-7.17A2 2 0 0 0 12.17 6H6a2 2 0 0
                                                                         0-2 2v6.17c0 .53.21 1.04.59 1.41l7.17 7.17c.78.78
                                                                         2.05.78 2.83 0l6-6c.78-.78.78-2.05 0-2.83zM7.5
                                                                         10.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">
                        Label Pribadi
                    </h3>
                    <p class="text-gray-800">
                        Kami menyediakan layanan label pribadi sehingga Anda bisa memiliki produk dengan merek sendiri
                        tanpa harus repot mengurus seluruh proses produksi.
                    </p>
                </div>

                <!-- Box 6 -->
                <div
                    class="bg-green-600 p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center transition-transform duration-300 ease-in-out 
              hover:shadow-xl hover:-translate-y-2">
                    <div class="flex justify-center mb-4 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-12 h-12">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28
                                                                         2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81
                                                                         4.5 2.09C13.09 3.81 14.76 3 16.5
                                                                         3 19.58 3 22 5.42 22 8.5c0 3.78-3.4
                                                                         6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Kepercayaan Pelanggan</h3>
                    <p class="text-white">
                        Transparansi, kualitas, dan pelayanan terbaik adalah cara kami menjaga kepercayaan pelanggan.
                    </p>
                </div>
                <!-- Box 7 -->
                <div
                    class="bg-gray-200 p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center transition-transform duration-300 ease-in-out 
              hover:shadow-xl hover:-translate-y-2">
                    <div class="flex justify-center mb-4 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                            <path
                                d="M3 6h11a1 1 0 0 1 1 1v3h3.586a1 1 0 0 1 .894.553L21.7 13.8A2 2 0 0 1 22 14.8V18a1 1 0 0 1-1 1h-1.05a2.75 2.75 0 0 1-5.9 0H9.95a2.75 2.75 0 0 1-5.9 0H3a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Logistik & Pengiriman</h3>
                    <p class="text-gray-800">
                        Dimanapun Anda berada, kami akan memproduksi kosmetik untuk Anda. Pengiriman dapat dipilih
                        melalui laut, kereta, atau udara.
                    </p>
                </div>
                <!-- Box 8 -->
                <div
                    class="bg-green-600 p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center transition-transform duration-300 ease-in-out 
              hover:shadow-xl hover:-translate-y-2">
                    <div class="flex justify-center mb-4 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                            <path
                                d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm-1 14-4-4 1.41-1.41L11 13.17l5.59-5.59L18 9l-7 7Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Sertifikat yang jelas</h3>
                    <p class="text-white">
                        GMPC, ISO 22716, BSCI, FDA, MSDS, COA, serta dapat membantu untuk mendapatkan sertifikat CPNP,
                        CPSR, PIF, Sertifikat Penjualan Bebas, Sertifikat Asal, SASO, dan lainnya.
                    </p>
                </div>
            </div>
        </div>
        <!-- Section Inovasi Teknologi -->
        <section id="why-us" class="py-20 bg-gray-opacity-90">
            <section class="wave-bg h-64 flex items-center justify-center text-white text-2xl font-bold">
            </section>
            <div class="w-full mx-auto px-6 md:px-12 text-center bg-green-600">
                <h2 class="text-3xl md:text-5xl font-semibold text-white mb-6">
                    INOVASI & TEKNOLOGI
                </h2>
                <div class="w-20 h-2 bg-white mx-auto mt-2 rounded-full mb-5"></div>
                <div class="w-20 h-2 bg-green-600 mx-auto mt-2 rounded-full mb-5"></div>
                <p class="text-white max-w-7xl mx-auto mb-8">
                    Bagian Inovasi dan Teknologi dalam perusahaan minuman kami merupakan pusat kreativitas dan
                    penelitian
                    yang memandu evolusi produk kami. Tim kami terdiri dari para ahli inovasi, ilmuwan pangan, dan
                    insinyur
                    teknologi yang berdedikasi untuk menciptakan pengalaman minuman yang unik dan berkesan. Berfokus
                    pada
                    pemanfaatan teknologi terkini dan konsep inovatif, kami berkomitmen untuk memimpin tren industri dan
                    memenuhi harapan konsumen yang terus berkembang.
                </p>
                <section class="py-12 bg-green-600">
                    <div class="w-full mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-10">
                        <div>
                            <span class="text-7xl font-bold text-white">01</span>
                            <h2 class="text-2xl font-semibold text-white mt-4">Tim Riset Profesional</h2>
                            <p class="mt-4 text-white leading-relaxed font-medium text-left">
                                Memiliki tim riset ahli dan profesional di industri kimia untuk membuat produk kosmetik
                                yang
                                inovatif.
                                Menjamin keamanan produk yang dihasilkan dengan uji laboratorium sesuai dengan standart.
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('images/timriset.png') }}" alt="Tim Riset"
                                class="rounded-2xl shadow-lg max-w-[550px] mx-auto w-full object-contain">
                        </div>
                    </div>
                </section>
                <section class="py-12 bg-green-600">
                    <div class="w-full mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-10">

                        <!-- Text -->
                        <div class="order-1 md:order-2">
                            <span class="text-7xl font-bold text-white">02</span>
                            <h2 class="text-2xl font-semibold text-white mt-4">Tim Produksi Profesional</h2>
                            <p class="mt-4 text-white leading-relaxed font-medium text-left ">
                                Memiliki tim produksi yang ahli dan profesional yang berpengalaman dalam melaksanakan
                                produksi yang sesuai standar CPKB sehingga produk Anda terjamin kualitasnya.
                            </p>
                        </div>

                        <!-- Image -->
                        <div class="order-2 md:order-1">
                            <img src="{{ asset('images/produksi.png') }}" alt="Tim Riset"
                                class="rounded-2xl shadow-lg max-w-[550px] mx-auto w-full object-contain">
                        </div>

                    </div>
                </section>

                <section class="py-12 bg-green-600">
                    <div class="w-full mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-10">
                        <div>
                            <span class="text-7xl font-bold text-white">03</span>
                            <h2 class="text-2xl font-semibold text-white mt-4">Gudang Penyimpanan Khusus</h2>
                            <p class="mt-4 text-white leading-relaxed font-medium text-left">
                                Kami memiliki gudang penyimpanan yang luas dengan penataan khusus disesuaikan dengan
                                tujuan
                                penyimpanan barang. Terdiri dari 3 tatanan khusus yaitu untuk bahan baku, bahan kemas,
                                dan
                                gudang produk jadi.
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('images/gudang.png') }}" alt="Tim Riset"
                                class="rounded-2xl shadow-lg max-w-[550px] mx-auto w-full object-contain">
                        </div>
                    </div>
                </section>
                <section class="py-12 bg-green-600">
                    <div class="w-full mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-10">

                        <!-- Text -->
                        <div class="order-1 md:order-2">
                            <span class="text-7xl font-bold text-white">04</span>
                            <h2 class="text-2xl font-semibold text-white mt-4">Mesin & Peralatan Canggih</h2>
                            <p class="mt-4 text-white leading-relaxed font-medium text-left">
                                Memilki mesin pengolah yang lengkap dengan teknologi canggih dan terkomputerisasi. Dapat
                                mengolah dalam kapasitas tinggi dan menghasilkan produk yang berkualitas.
                            </p>
                        </div>

                        <!-- Image -->
                        <div class="order-2 md:order-1">
                            <img src="{{ asset('images/mesin.png') }}" alt="Tim Riset"
                                class="rounded-2xl shadow-lg max-w-[550px] mx-auto w-full object-contain">
                        </div>

                    </div>
                </section>
            </div>
            </div>
        </section>

        <section id="why-us" class="py-20 bg-gray-opacity-90">
            <div class="w-full mx-auto px-6 md:px-12 text-center">
                <h2 class="text-3xl md:text-5xl font-semibold text-green-600 mb-6">
                    CARA MEMULAI MAKLON
                </h2>
                <div class="w-20 h-2 bg-green-600 mx-auto mt-2 rounded-full mb-8"></div>
                <section class="bg-white py-10 rounded-2xl shadow-lg">
                    <!-- Baris Pertama -->
                    <div class="relative flex flex-wrap items-center justify-center">
                        <!-- garis horizontal hanya tampil di desktop -->
                        <div class="absolute top-1/2 w-full border-t-2 border-gray-200 hidden lg:block">
                        </div>

                        <!-- Step 1 -->
                        <div class="relative w-full sm:w-1/2 lg:w-1/4 px-4 text-center mb-10">
                            <div class="bg-white inline-block p-4 rounded-full shadow-md z-10 hover:shadow-lg">
                                <img src="images/consul1.png" alt="Step 1" class="w-16 h-16 mx-auto">
                            </div>
                            <h3 class="mt-4 font-semibold text-green-600">1. Konsultasi Konsep Produk</h3>
                        </div>

                        <!-- Step 2 -->
                        <div class="relative w-full sm:w-1/2 lg:w-1/4 px-4 text-center mb-10">
                            <div class="bg-white inline-block p-4 rounded-full shadow-md z-10 hover:shadow-lg">
                                <img src="images/produk.png" alt="Step 2" class="w-16 h-16 mx-auto">
                            </div>
                            <h3 class="mt-4 font-semibold text-green-600">2. Pembuatan Sampel Produk</h3>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative w-full sm:w-1/2 lg:w-1/4 px-4 text-center mb-10">
                            <div class="bg-white inline-block p-4 rounded-full shadow-md z-10 hover:shadow-lg">
                                <img src="images/payment.png" alt="Step 3" class="w-16 h-16 mx-auto">
                            </div>
                            <h3 class="mt-4 font-semibold text-green-600">3. Pembayaran Biaya Maklon</h3>
                        </div>

                        <!-- Step 4 -->
                        <div class="relative w-full sm:w-1/2 lg:w-1/4 px-4 text-center mb-10">
                            <div class="bg-white inline-block p-4 rounded-full shadow-md z-10 hover:shadow-lg">
                                <img src="images/legalitas.png" alt="Step 4" class="w-12 h-16 mx-auto">
                            </div>
                            <h3 class="mt-4 font-semibold text-green-600">4. Legalitas Perizinan</h3>
                        </div>
                    </div>

                    <!-- Baris Kedua -->
                    <div class="relative flex flex-wrap items-center justify-center mt-16">
                        <!-- garis horizontal hanya tampil di desktop -->
                        <div class="absolute top-1/2 w-full border-t-2 border-gray-200 hidden lg:block">
                        </div>

                        <!-- Step 5 -->
                        <div class="relative w-full sm:w-1/2 lg:w-1/4 px-4 text-center mb-10">
                            <div class="bg-white inline-block p-4 rounded-full shadow-md z-10 hover:shadow-lg">
                                <img src="images/package.png" alt="Step 5" class="w-12 h-14 mx-auto">
                            </div>
                            <h3 class="mt-4 font-semibold text-green-600">5. Desain Kemasan</h3>
                        </div>

                        <!-- Step 6 -->
                        <div class="relative w-full sm:w-1/2 lg:w-1/4 px-4 text-center mb-10">
                            <div class="bg-white inline-block p-4 rounded-full shadow-md z-10 hover:shadow-lg">
                                <img src="images/prosesproduksi.png" alt="Step 6" class="w-16 h-16 mx-auto">
                            </div>
                            <h3 class="mt-4 font-semibold text-green-600">6. Proses Produksi</h3>
                        </div>

                        <!-- Step 7 -->
                        <div class="relative w-full sm:w-1/2 lg:w-1/4 px-4 text-center mb-10">
                            <div class="bg-white inline-block p-4 rounded-full shadow-md z-10 hover:shadow-lg">
                                <img src="images/QC.png" alt="Step 7" class="w-16 h-16 mx-auto">
                            </div>
                            <h3 class="mt-4 font-semibold text-green-600">7. Quality Control</h3>
                        </div>

                        <!-- Step 8 -->
                        <div class="relative w-full sm:w-1/2 lg:w-1/4 px-4 text-center mb-10">
                            <div class="bg-white inline-block p-4 rounded-full shadow-md z-10 hover:shadow-lg">
                                <img src="images/shipping.png" alt="Step 8" class="w-16 h-10 mx-auto">
                            </div>
                            <h3 class="mt-4 font-semibold text-green-600">8. Pengiriman Produk</h3>
                        </div>
                    </div>
            </div>
        </section>
        </div>
    </section>
    <section id="why-us" class="py-5 bg-gray-opacity-90">
        <div class="w-full mx-auto px-6 md:px-12 text-center">
            <h2 class="text-3xl md:text-5xl font-semibold text-green-600 mb-6">
                HUBUNGI KAMI
            </h2>
            <div class="w-20 h-2 bg-green-600 mx-auto mt-2 rounded-full mb-5"></div>
            <div class="w-full mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-10">
                <div class="bg-white rounded-2xl shadow p-6">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Kirimkan pesan kepada kami</h3>
                    <form action="#" method="POST" class="space-y-4">
                        <input type="text" name="nama" placeholder="Nama"
                            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <input type="email" name="email" placeholder="E-mail"
                            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <input type="text" name="whatsapp" placeholder="No Whatsapp"
                            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <textarea name="pesan" placeholder="Pesan" rows="4"
                            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                        <button type="submit"
                            class="w-full bg-green-600 hover:bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow transition">
                            Kirim
                        </button>
                    </form>
                </div>

                <!-- FAQ -->
                <div class="space-y-4">

                    <!-- Item -->
                    <details class="bg-white rounded-xl shadow p-4 hover:drop-shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between">
                            Apa itu maklon Herbal?
                        </summary>
                        <p class="mt-2 text-green-600 text-left">Maklon herbal adalah jasa produksi produk kosmetik
                            dan
                            skincare sesuai brand Anda.</p>
                    </details>

                    <details class="bg-white rounded-xl shadow p-4 hover:drop-shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between">
                            Berapa minimal order quantity di Phytomed Neo Farma?
                        </summary>
                        <p class="mt-2 text-green-600 text-left">Minimal order quantity biasanya ditentukan sesuai
                            jenis
                            produk dan formulasi.</p>
                    </details>

                    <details class="bg-white rounded-xl shadow p-4  hover:drop-shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between text-left">
                            Apakah Phytomed Neo Farma membantu proses pendaftaran BPOM, HAKI dan sertifikasi
                            Halal?
                        </summary>
                        <p class="mt-2  text-green-600 text-left">Ya, kami membantu seluruh proses legalitas dan
                            sertifikasi.
                        </p>
                    </details>

                    <details class="bg-white rounded-xl shadow p-4 hover:drop-shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between">
                            Apakah Dua Naga Kosmetindo menyediakan wadah dan kemasan sekaligus desain?
                        </summary>
                        <p class="mt-2 text-green-600 text-left">Kami menyediakan berbagai pilihan wadah, kemasan, dan
                            desain
                            sesuai kebutuhan.</p>
                    </details>

                    <details class="bg-white rounded-xl shadow p-4 hover:shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between">
                            Bolehkah saya membawa kemasan atau wadah sendiri?
                        </summary>
                        <p class="mt-2 text-green-600 text-left">Bisa, Anda boleh membawa wadah atau kemasan sesuai
                            keinginan.
                        </p>
                    </details>

                    <details class="bg-white rounded-xl shadow p-4 hover:shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between text-left">
                            Bagaimana saya memulai bekerjasama dengan maklon Phytomed Neo Farma?
                        </summary>
                        <p class="mt-2  text-green-600 text-left">Cukup hubungi tim kami melalui form atau WhatsApp,
                            lalu
                            konsultasikan kebutuhan Anda.</p>
                    </details>

                </div>
            </div>
            <!-- Section Klien Kami -->
            <!-- Tambahkan Swiper CSS -->


            <section class="py-16 bg-gray-100">
                <div class="container mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-8">Klien Kami</h2>

                    <!-- Swiper Container -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Logo Klien -->
                            <div class="swiper-slide flex justify-center">
                                <img src="{{ asset('images/client6.png') }}" class="h-25" alt="Klien 1">
                            </div>
                            <div class="swiper-slide flex justify-center">
                                <img src="{{ asset('images/client2.png') }}" class="h-16" alt="Klien 2">
                            </div>
                            <div class="swiper-slide flex justify-center">
                                <img src="{{ asset('images/client3.png') }}" class="h-16" alt="Klien 3">
                            </div>
                            <div class="swiper-slide flex justify-center">
                                <img src="{{ asset('images/client4.png') }}" class="h-20" alt="Klien 4">
                            </div>
                            <div class="swiper-slide flex justify-center">
                                <img src="{{ asset('images/client5.png') }}" class="h-20" alt="Klien 5">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                </div><!--.container-->
            </section>


            <!-- Swiper JS -->


            <!-- CSS Animasi -->

        </div>
    @endsection
    <!-- Copyright -->
    @push('scripts')
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 4,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    0: { // layar paling kecil (HP)
                        slidesPerView: 1,
                    },
                    640: { // tablet kecil
                        slidesPerView: 2,
                    },
                    1024: { // desktop
                        slidesPerView: 4,
                    }
                }
            });
        </script>




        <script>
            var App = (function() {

                //=== Use Strict ===//
                'use strict';

                //=== Private Variables ===//
                var gallery = $('#js-gallery');

                //=== Gallery Object ===//
                var Gallery = {
                    zoom: function(imgContainer, img) {
                        var containerHeight = imgContainer.outerHeight(),
                            src = img.attr('src');

                        if (src.indexOf('/products/normal/') != -1) {
                            // Set height of container
                            imgContainer.css("height", containerHeight);

                            // Switch hero image src with large version
                            img.attr('src', src.replace('/products/normal/', '/products/zoom/'));

                            // Add zoomed class to gallery container
                            gallery.addClass('is-zoomed');

                            // Enable image to be draggable
                            img.draggable({
                                drag: function(event, ui) {
                                    ui.position.left = Math.min(100, ui.position.left);
                                    ui.position.top = Math.min(100, ui.position.top);
                                }
                            });
                        } else {
                            // Ensure height of container fits image
                            imgContainer.css("height", "auto");

                            // Switch hero image src with normal version
                            img.attr('src', src.replace('/products/zoom/', '/products/normal/'));

                            // Remove zoomed class to gallery container
                            gallery.removeClass('is-zoomed');
                        }
                    },
                    switch: function(trigger, imgContainer) {
                        var src = trigger.attr('href'),
                            thumbs = trigger.siblings(),
                            img = trigger.parent().prev().children();

                        // Add active class to thumb
                        trigger.addClass('is-active');

                        // Remove active class from thumbs
                        thumbs.each(function() {
                            if ($(this).hasClass('is-active')) {
                                $(this).removeClass('is-active');
                            }
                        });

                        // Reset container if in zoom state
                        if (gallery.hasClass('is-zoomed')) {
                            gallery.removeClass('is-zoomed');
                            imgContainer.css("height", "auto");
                        }

                        // Switch image source
                        img.attr('src', src);
                    }
                };

                //=== Public Methods ===//
                function init() {

                    // Listen for clicks on anchors within gallery
                    gallery.delegate('a', 'click', function(event) {
                        var trigger = $(this);
                        var triggerData = trigger.data("gallery");

                        if (triggerData === 'zoom') {
                            var imgContainer = trigger.parent(),
                                img = trigger.siblings();
                            Gallery.zoom(imgContainer, img);
                        } else if (triggerData === 'thumb') {
                            var imgContainer = trigger.parent().siblings();
                            Gallery.switch(trigger, imgContainer);
                        } else {
                            return;
                        }

                        event.preventDefault();
                    });

                }

                //=== Make Methods Public ===//
                return {
                    init: init
                };

            })();

            App.init();
        </script>
    @endpush
