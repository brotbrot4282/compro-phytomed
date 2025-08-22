@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <!-- Hero -->
    <section class="relative h-72 flex items-center justify-center text-center text-green-500 bg-cover bg-center"
        style="background-image: url('{{ asset('images/product-hermain.jpg') }}');">
        <div class="absolute inset-0 bg-white bg-opacity-50"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-2">Produk Kami</h1>
            <p class="text-lg md:text-xl">Solusi Herbal Terbaik untuk Kesehatan Anda</p>
        </div>
    </section>

    <!-- Product Section -->
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- Card Produk -->
        <div class="bg-gray-50 rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="{{ asset('images/sunscreen1.png') }}" alt="Produk 1" class="w-full h-48 object-cover">
            <div class="p-8">
                <h3 class="text-lg font-semibold mb-2">Produk Herbal 1</h3>
                <p class="text-sm text-gray-600 mb-3">Deskripsi singkat produk herbal pertama.</p>
                <a href="#" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm">
                    Lihat Detail
                </a>
            </div>
        </div>

        <div class="bg-gray-50 rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="{{ asset('images/sunscreen2.png') }}" alt="Produk 2" class="w-full h-48 object-cover">
            <div class="p-8">
                <h3 class="text-lg font-semibold mb-2">Produk Herbal 2</h3>
                <p class="text-sm text-gray-600 mb-3">Deskripsi singkat produk herbal kedua.</p>
                <a href="#" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm">
                    Lihat Detail
                </a>
            </div>
        </div>

        <div class="bg-gray-50 rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="{{ asset('images/hairoil1.png') }}" alt="Produk 3" class="w-full h-48 object-cover">
            <div class="p-8">
                <h3 class="text-lg font-semibold mb-2">Produk Herbal 3</h3>
                <p class="text-sm text-gray-600 mb-3">Deskripsi singkat produk herbal ketiga.</p>
                <a href="#" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm">
                    Lihat Detail
                </a>
            </div>
        </div>

        <div class="bg-gray-50 rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="{{ asset('images/moist1.png') }}" alt="Produk 4" class="w-full h-48 object-cover">
            <div class="p-8">
                <h3 class="text-lg font-semibold mb-2">Produk Herbal 4</h3>
                <p class="text-sm text-gray-600 mb-3">Deskripsi singkat produk herbal keempat.</p>
                <a href="#" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm">
                    Lihat Detail
                </a>
            </div>
        </div>
    </div>
    </div>
    </section>
    </body>

    </html>
