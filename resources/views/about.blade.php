<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile - about</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <header class="bg-black shadow-md fixed w-full top-0 left-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">

            <!-- Logo -->
            <div class="text-xl font-bold text-white">
                PYTHOMED
            </div>

            <!-- Navigation (Center) -->
            <nav class="hidden md:flex space-x-8 absolute left-1/2 transform -translate-x-1/2">
                <a href="{{ url('/') }}" class="text-white hover:text-red-600">Home</a>
                <a href="{{ url('/about') }}" class="text-white hover:text-red-600">About</a>
                <a href="{{ url('/services') }}" class="text-white hover:text-red-600">Services</a>
                <a href="{{ url('/contact') }}" class="text-white hover:text-red-600">Contact</a>
            </nav>

            <!-- Mobile Menu Button (Right) -->
            <div class="md:hidden">
                <button id="menu-btn" class="text-white text-2xl focus:outline-none">
                    ☰
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t shadow-md">
            <nav class="flex flex-col p-4 space-y-3">
                <a href="{{ url('/') }}" class="text-white hover:text-red-600">Home</a>
                <a href="{{ url('/about') }}" class="text-white hover:text-red-600">About</a>
                <a href="{{ url('/services') }}" class="text-white hover:text-red-600">Services</a>
                <a href="{{ url('/contact') }}" class="text-white hover:text-red-600">Contact</a>
            </nav>
        </div>
    </header>


    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-screen flex flex-col items-center justify-center text-white"
        style="background-image: url('{{ asset('images/backgroundhome.jpg') }}');">
        <!-- Overlay biar teks jelas -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Konten Hero -->
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">ABOUT US</h1>
            <p class="text-lg md:text-xl mb-6">Kami adalah perusahaan yang bergerak di bidang Herbal</p>
            <a href="{{ url('/about') }}"
                class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg shadow-lg transition">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center p-4 bg-black text-white">
        <p>&copy; {{ date('Y') }} Perusahaan Kami. All rights reserved.</p>
    </footer>

    <!-- Script Menu Mobile -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
