@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <section class="relative h-[400px] flex items-center justify-center text-white bg-cover bg-center"
        style="background-image: url('{{ asset('images/main.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Produk Kami</h1>
            <p class="text-lg md:text-xl mb-6">HERBAL MEDICINE COMPANY</p>
        </div>
    </section>

    <body class="bg-gray-50">
        <div class="container mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">
            <aside class="md:col-span-1 bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold mb-6">Kategori Produk</h2>
                <ul class="space-y-3">
                    <li class="flex justify-between items-center cursor-pointer hover:text-green-600">Sunscreen </li>
                    <li class="flex justify-between items-center cursor-pointer hover:text-green-600">Lip Care </li>
                    <li class="flex justify-between items-center cursor-pointer hover:text-green-600">Face Care </li>
                    <li class="flex justify-between items-center cursor-pointer hover:text-green-600">Pregnancy Skin Care
                    </li>
                    <li class="flex justify-between items-center cursor-pointer hover:text-green-600">Men Care </li>
                </ul>
            </aside>

            <main class="md:col-span-3">
                <!-- Grid Produk -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center text-center">
                        <img src="{{ asset('images/moist1.png') }}" alt="Tentang Kami">
                        <h3 class="font-medium text-gray-800">Chamomile & Argan Oil Shampoo Body Wash</h3>
                        <button class="mt-4 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500">Lihat
                            Detail</button>
                    </div>
                    <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center text-center">
                        <img src="{{ asset('images/hairoil1.png') }}" alt="Tentang Kami">
                        <h3 class="font-medium text-gray-800">5% Glycolic Acid Underarm Brightening Spray Cream</h3>
                        <button class="mt-4 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500">Lihat
                            Detail</button>
                    </div>
                    <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center text-center">
                        <img src="{{ asset('images/sunscreen1.png') }}" alt="Tentang Kami">
                        <h3 class="font-medium text-gray-800">Matcha Greentea Body Scrub</h3>
                        <button class="mt-4 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500">Lihat
                            Detail</button>
                    </div>
                    <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center text-center">
                        <img src="{{ asset('images/sunscreen2.png') }}" alt="Tentang Kami">
                        <h3 class="font-medium text-gray-800">Matcha Greentea Body Scrub</h3>
                        <button class="mt-4 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500">Lihat
                            Detail</button>
                    </div>
                    <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center text-center">
                        <img src="{{ asset('images/hairessence.png') }}" alt="Tentang Kami">
                        <h3 class="font-medium text-gray-800">Matcha Greentea Body Scrub</h3>
                        <button class="mt-4 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500">Lihat
                            Detail</button>
                    </div>
                    <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center text-center">
                        <img src="{{ asset('images/rosescrub.png') }}" alt="Tentang Kami">
                        <h3 class="font-medium text-gray-800">Matcha Greentea Body Scrub</h3>
                        <button class="mt-4 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500">Lihat
                            Detail</button>
                    </div>
                    <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center text-center">
                        <img src="{{ asset('images/bodyscrub.png') }}" alt="Tentang Kami">
                        <h3 class="font-medium text-gray-800">Matcha Greentea Body Scrub</h3>
                        <button class="mt-4 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500">Lihat
                            Detail</button>
                    </div>
                    <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center text-center">
                        <img src="{{ asset('images/sunscreen2.png') }}" alt="Tentang Kami">
                        <h3 class="font-medium text-gray-800">Matcha Greentea Body Scrub</h3>
                        <button class="mt-4 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500">Lihat
                            Detail</button>
                    </div>
                </div>
            </main>
        </div>

    </body>

    </html>
