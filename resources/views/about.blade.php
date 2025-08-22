@extends('layouts.app')
@push('styles')
    @section('content')
        <section class="relative h-screen flex flex-col items-center justify-center text-white bg-cover bg-center"
            style="background-image: url('{{ asset('images/bgtentangkami.png') }}');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="relative z-10 text-center px-4">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">About Us</h1>
                <p class="text-lg md:text-xl mb-6">HERBAL MEDICINE COMPANY</p>
            </div>
        </section>
        <section id="why-us" class="py-5 bg-gray-opacity-90">
            <div class="w-full mx-auto px-6 md:px-12 text-center py-20">
                <h2 class="text-3xl md:text-5xl font-semibold text-green-600 mb-6">
                    HUBUNGI KAMI
                </h2>
                <div class="w-20 h-2 bg-green-600 mx-auto mt-2 rounded-full mb-5"></div>
                <div class="w-full mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-10">
                    <div class="bg-white rounded-2xl shadow p-6">
                        <h3 class="text-lg font-semibold mb-4 text-gray-700">Kirimkan pesan kepada kami</h3>
                        <form action="#" method="POST" class="space-y-4">
                            <input type="text" name="nama" placeholder="Nama"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                            <input type="email" name="email" placeholder="E-mail"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                            <input type="text" name="whatsapp" placeholder="No Whatsapp"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                            <textarea name="pesan" placeholder="Pesan" rows="4"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
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
            </div>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
            </section>
        @endsection
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
                        0: {
                            slidesPerView: 1
                        },
                        640: {
                            slidesPerView: 2
                        },
                        1024: {
                            slidesPerView: 4
                        }
                    }
                });
            </script>
        @endpush
