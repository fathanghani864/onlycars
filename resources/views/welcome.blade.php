{{-- File: resources/views/welcome.blade.php --}}

@extends('layout.app')

@section('title', 'Selamat Datang')

@section('content')
    <div class="bg-gray-100 min-h-screen">
        <!-- Hero Section -->
        <header class="relative bg-black bg-cover bg-center min-h-screen flex items-center"
            style="background-image: url('{{ asset('storage/galleries/hero.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative container mx-auto px-4 py-40 text-center">
                <h1 class="text-5xl font-extrabold text-white mb-4">Selamat Datang di OnlyCars</h1>
                <p class="text-xl text-gray-200 max-w-2xl mx-auto mb-8">
                    Temukan segala hal tentang event otomotif, merchandise eksklusif, dan galeri dokumentasi terbaik.
                </p>
                <a href="{{ route('events.index') }}"
                    class="inline-block bg-white text-gray-800 font-bold py-3 px-8 rounded-lg shadow-lg hover:bg-gray-300 transition">
                    Jelajahi Event
                </a>
            </div>
        </header>

        <!-- About Us Section -->
        <section id="about-us" class="py-16 bg-white">
            <div class="container mx-auto px-4 max-w-4xl">
                <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Tentang Kami</h2>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            AutoFest adalah platform terdepan yang didedikasikan untuk para penggemar otomotif. Kami
                            menyediakan informasi terlengkap tentang event-event otomotif terbaru, mulai dari pameran mobil
                            klasik hingga balapan modern yang mendebarkan.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Misi kami adalah menghubungkan komunitas otomotif dan menjadi sumber terpercaya untuk semua
                            kebutuhan Anda, termasuk merchandise eksklusif dan galeri foto dari setiap acara. Kami percaya
                            bahwa setiap mobil memiliki cerita, dan kami di sini untuk merayakan cerita-cerita tersebut.
                        </p>
                    </div>
                    <div>
                        <!-- Tinggi gambar di sini ditentukan oleh `h-` -->
                        <img src="{{ asset('storage/galleries/team.jpg')}}" alt="Tim AutoFest" class="rounded-xl shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Cards Section -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Apa yang Kami Tawarkan</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Events -->
                    <div class="bg-white rounded-xl shadow-lg p-6 text-center transition-transform hover:scale-105">
                        <i class="fas fa-calendar-alt text-5xl text-gray-800 mb-4"></i>
                        <h3 class="text-2xl font-bold mb-2">Event Otomotif</h3>
                        <p class="text-gray-600">Temukan jadwal dan detail lengkap dari semua event besar di seluruh dunia.
                        </p>
                    </div>
                    <!-- Card 2: Merchandise -->
                    <div class="bg-white rounded-xl shadow-lg p-6 text-center transition-transform hover:scale-105">
                        <i class="fas fa-box-open text-5xl text-gray-800 mb-4"></i>
                        <h3 class="text-2xl font-bold mb-2">Merchandise Eksklusif</h3>
                        <p class="text-gray-600">Dapatkan koleksi merchandise edisi terbatas dari tim dan acara favorit
                            Anda.</p>
                    </div>
                    <!-- Card 3: Gallery -->
                    <div class="bg-white rounded-xl shadow-lg p-6 text-center transition-transform hover:scale-105">
                        <i class="fas fa-images text-5xl text-gray-800 mb-4"></i>
                        <h3 class="text-2xl font-bold mb-2">Galeri Foto</h3>
                        <p class="text-gray-600">Lihat dokumentasi visual menakjubkan dari setiap momen tak terlupakan.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection