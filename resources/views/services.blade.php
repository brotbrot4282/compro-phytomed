@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <section class="relative h-[400px] flex items-center justify-center text-white bg-cover bg-center"
        style="background-image: url('{{ asset('images/main.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Layanan Kami</h1>
            <p class="text-lg md:text-xl mb-6">Our Services</p>
        </div>
    </section>
    <div class="container mx-auto px-6 py-10">
        <h2 class="text-3xl font-semibold text-center text-green-600 mb-6">Layanan Kami</h2>
        <div class="w-20 h-2 bg-green-600 mx-auto mt-2 rounded-full mb-10"></div>
    </div>
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
