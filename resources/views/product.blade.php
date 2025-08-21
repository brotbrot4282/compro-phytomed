<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile - Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100" style="font-family: 'Poppins', sans-serif;">

    <!-- Navbar -->
    <header class="fixed w-full top-0 left-0 z-30 bg-green-600 shadow-md">
        <div class="container mx-auto flex justify-between items-center py-2 px-6">
            <!-- Logo -->
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logopy1.png') }}" alt="Logo" class="h-12 w-auto">
            </a>

            <!-- Navigation -->
            <nav class="hidden md:flex space-x-8 absolute left-1/2 transform -translate-x-1/2 font-bold"
                style="font-family: 'Poppins', sans-serif;">
                <a href="{{ url('/') }}" class="text-white">Home</a>
                <a href="{{ url('/about') }}" class="text-white">About</a>
                <a href="{{ url('/product') }}" class="text-white">Product</a>
                <a href="{{ url('/services') }}" class="text-white">Services</a>
                <a href="{{ url('/contact') }}" class="text-white">Contact</a>
            </nav>
            <!-- Mobile Menu Button (Right) -->
            <div class="md:hidden">
                <button id="menu-btn" class="text-white text-2xl focus:outline-none">
                    ☰
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white">
            <nav class="flex flex-col p-4 space-y-3">
                <a href="{{ url('/') }}" class="text-green-500">Home</a>
                <a href="{{ url('/about') }}" class="text-green-500">About</a>
                <a href="{{ url('/services') }}" class="text-green-500">Services</a>
                <a href="{{ url('/contact') }}" class="text-green-500">Contact</a>
            </nav>
        </div>
    </header>


    <!-- Hero -->
    <section class="relative h-72 flex items-center justify-center text-center text-green-500 bg-cover bg-center"
        style="background-image: url('{{ asset('images/product-hero.jpg') }}');">
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

    <!-- Footer -->
    <footer class="bg-black text-white text-center py-6 mt-12">
        <p>&copy; {{ date('Y') }} PT Phytomed Neo Farma. All rights reserved.</p>
    </footer>

</body>

</html>
