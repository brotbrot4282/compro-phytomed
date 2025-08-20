<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
</head>

<body class="bg-gray-100" style="font-family: 'Poppins', sans-serif;">

    <!-- Navbar -->
    <header id="navbar" class="fixed w-full top-0 left-0 z-30 transition-all duration-300">
        <div class="container mx-auto flex justify-between items-center py-1.5 p-4">

            <!-- Logo -->
            <div class="flex items-center pl-8">
                <a href="#home">
                    <img src="{{ asset('images/logopy1.png') }}" alt="Logo" class="h-12 w-auto">
                </a>
            </div>
            <!-- Navigation (Center) -->
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
                <a href="{{ url('/product') }}" class="text-green-500">Product</a>
                <a href="{{ url('/services') }}" class="text-green-500">Services</a>
                <a href="{{ url('/contact') }}" class="text-green-500">Contact</a>
            </nav>
        </div>
    </header>




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
                <div class="text-left space-y-4">
                    <h3 class="text-2xl font-semibold text-gray-800">Apa itu Phytomed Neo Farma?</h3>
                    <p class="text-black">
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

            <!-- Grid 3 kolom -->
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Box 1 -->
                <div class="bg-green-600 p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="text-green-500 text-5xl mb-4">🌿</div>
                    <h3 class="text-xl font-semibold text-white mb-2">Formulasi Herbal Alami
                    </h3>
                    <p class="text-white">
                        Pengembangan resep herbal eksklusif sesuai permintaan.

                        Konsultasi dengan tim riset & ahli herbal.

                        Penyesuaian formula berdasarkan tren pasar & kebutuhan konsumen.
                    </p>
                </div>

                <!-- Box 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="text-green-500 text-5xl mb-4">⚡</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Produksi Aman Di Tangan Kami</h3>
                    <p class="text-black">
                        Kami selalu melakukan riset dan inovasi untuk menghadirkan produk herbal berkualitas tinggi.
                        Berbagai macam produk bisa dibuat di pabrik kami dan Tim terbaik kami siap membantu riset dan
                        formulasi produk anda
                    </p>
                </div>

                <!-- Box 3 -->
                <div class="bg-green-600 p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="text-green-500 text-5xl mb-4">🤝</div>
                    <h3 class="text-xl font-semibold text-white mb-2">Desain & Konsep Branding</h3>
                    <p class="text-white">
                        Konsultasi branding agar produk memiliki ciri khas.

                        Desain kemasan modern & menarik sesuai identitas brand.

                        Penyediaan berbagai pilihan packaging (botol, sachet, kapsul, box, dsb).
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="why-us" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <!-- Grid 3 kolom -->
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Box 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition text-center">
                    <div class="flex justify-center mb-4 text-green-500">
                        <!-- Icon Packaging -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            class="w-12 h-12">
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


                <!-- Box 2 -->
                <div class="bg-green-600 p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="text-white text-5xl mb-4">⚡</div>
                    <h3 class="text-xl font-semibold text-white mb-2">Produksi Aman Di Tangan Kami</h3>
                    <p class="text-white">
                        Kami selalu melakukan riset dan inovasi untuk menghadirkan produk herbal berkualitas tinggi.
                        Berbagai macam produk bisa dibuat di pabrik kami dan Tim terbaik kami siap membantu riset dan
                        formulasi produk anda
                    </p>
                </div>

                <!-- Box 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="text-green-500 text-5xl mb-4">🤝</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Kepercayaan Pelanggan</h3>
                    <p class="text-gray-800">
                        Transparansi, kualitas, dan pelayanan terbaik adalah cara kami menjaga kepercayaan pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Klien Kami -->
    <!-- Tambahkan Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Klien Kami</h2>

            <!-- Swiper Container -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- Logo Klien -->
                    <div class="swiper-slide flex justify-center">
                        <img src="{{ asset('images/client1.png') }}" class="h-25" alt="Klien 1">
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

            <!-- Gallery -->
            <div id="js-gallery" class="gallery">
                <!--Gallery Hero-->

                <!--Gallery Thumbs-->
                <div class="gallery__thumbs">
                    <a href="https://public-619e3.firebaseapp.com/Product-Gallery/products/normal/product-01_view-01.jpg"
                        data-gallery="thumb" class="is-active">
                        <img
                            src="https://public-619e3.firebaseapp.com/Product-Gallery/products/thumb/product-01_view-01.jpg">
                    </a>
                    <a href="https://public-619e3.firebaseapp.com/Product-Gallery/products/normal/product-01_view-02.jpg"
                        data-gallery="thumb">
                        <img
                            src="https://public-619e3.firebaseapp.com/Product-Gallery/products/thumb/product-01_view-02.jpg">
                    </a>
                    <a href="https://public-619e3.firebaseapp.com/Product-Gallery/products/normal/product-01_view-03.jpg"
                        data-gallery="thumb">
                        <img
                            src="https://public-619e3.firebaseapp.com/Product-Gallery/products/thumb/product-01_view-03.jpg">
                    </a>
                </div>
                <!--Gallery Thumbs-->

            </div><!--.gallery-->
            <!-- Gallery -->

        </div><!--.container-->
    </section>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
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


    <!-- CSS Animasi -->
    <style>
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


    <!-- Footer -->
    <footer class="bg-black text-white text-center py-6">
        <p>&copy; {{ date('Y') }} PT Phytomed Neo Farma. All rights reserved.</p>
    </footer>

    <!-- Script Menu Mobile -->
    <script>
        const navbar = document.getElementById("navbar");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                navbar.classList.add("bg-green-600", "shadow-md");
            } else {
                navbar.classList.remove("bg-green-600", "shadow-md");
            }
        });

        // Mobile menu toggle
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
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

</body>

</html>
