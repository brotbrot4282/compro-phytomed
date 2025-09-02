@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <section class="relative h-[400px] flex items-center justify-center text-white bg-cover bg-center"
        style="background-image: url('{{ asset('images/konten2.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Kontak Kami</h1>
            <p class="text-lg md:text-xl mb-6">Phytomed Neo Farma</p>
            <a href="https://wa.me/6281234567890?text=Halo%20saya%20tertarik%20dengan%20produk%20Anda" target="_blank"
                class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white px-5 py-3 rounded-full shadow-lg transition text-lg font-semibold mt-4 justify-center">
                <img src="{{ asset('images/logowa.png') }}" alt="WhatsApp" class="w-6 h-6">
                Chat via WhatsApp
            </a>
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
        </div>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @endsection
    @push('scripts')
    @endpush
