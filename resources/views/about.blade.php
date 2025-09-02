@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <section class="relative h-[400px] flex items-center justify-center text-white bg-cover bg-center"
        style="background-image: url('{{ asset('images/bgtentangkami.png') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Tentang Kami</h1>
            <p class="text-lg md:text-xl mb-6">Phytomed Neo Farma</p>
        </div>
    </section>
    <section class="py-16 bg-gray-50 ">
        <section id="about" class="py-16 bg-white/bg-opacity-90">
            <div class="container mx-auto px-6 md:px-12
        text-center">
                <div class="grid md:grid-cols-2 gap-0 items-center mt-8 md:mt-12">
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
                    <div class="flex justify-center">
                        <img src="{{ asset('images/konten3.png') }}" alt="Tentang Kami"
                            class="rounded-2xl shadow-lg w-full max-w-md">
                    </div>
                    <div class="flex justify-center py-20">
                        <img src="{{ asset('images/konten2.jpg') }}" alt="Tentang Kami"
                            class="rounded-2xl shadow-lg w-full max-w-md">
                    </div>
                    <div class="text-left space-y-4 md:space-y-6">
                        <p class="text-gray-600">
                        <div class="text-left space-y-4 md:space-y-6">
                            <h3 class="text-2xl font-semibold text-gray-800">Konsultasi Produk Gratis</h3>
                            <p class="text-gray-600">
                                Kami menyediakan jasa konsultasi peroduk mu secara gratis, konsultasikan produk mu bersama
                                tim Phytomed Neo Farma
                                Tim kami siap membantu mulai dari konsep hingga produk kamu diluncurkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <section id="why-us" class="py-5 bg-gray-opacity-90">
                <div class="w-full mx-auto px-6 md:px-12 text-center py-20">
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
                                <summary
                                    class="cursor-pointer font-medium text-gray-700 flex items- justify-between text-left">
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
                                <p class="mt-2 text-green-600 text-left">Kami menyediakan berbagai pilihan wadah, kemasan,
                                    dan
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
                                <summary
                                    class="cursor-pointer font-medium text-gray-700 flex items- justify-between text-left">
                                    Bagaimana saya memulai bekerjasama dengan maklon Phytomed Neo Farma?
                                </summary>
                                <p class="mt-2  text-green-600 text-left">Cukup hubungi tim kami melalui form atau WhatsApp,
                                    lalu
                                    konsultasikan kebutuhan Anda.</p>
                            </details>

                        </div>
                    </div>
                </div>
            </section>
        </section>
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
