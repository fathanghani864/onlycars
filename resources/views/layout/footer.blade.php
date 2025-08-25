<!-- File: resources/views/layouts/footer.blade.php -->
<footer class="bg-black text-white py-10">
    <div class="container mx-auto px-4">
        <div
            class="flex flex-col md:flex-row items-center justify-between text-center md:text-left space-y-8 md:space-y-0">
            <!-- Logo dan Deskripsi Singkat -->
            <div class="flex flex-col items-center md:items-start space-y-4">
                <a href="/" class="flex items-center space-x-2">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/car.png" alt="Logo" class="w-8 h-8">
                    <span class="text-2xl font-bold tracking-wide">AutoFest</span>
                </a>
                <p class="text-gray-400 max-w-sm">
                    Tempat terbaik untuk menemukan event-event otomotif paling seru di Indonesia.
                </p>
            </div>

            <!-- Tautan Penting -->
            <div>
                <h3 class="text-lg font-bold mb-4">Tautan Penting</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="/" class="hover:text-red-500 transition">Beranda</a></li>
                    <li><a href="/event" class="hover:text-red-500 transition">Event</a></li>
                    <li><a href="/gallery" class="hover:text-red-500 transition">Galeri</a></li>
                    <li><a href="/about" class="hover:text-red-500 transition">Tentang Kami</a></li>
                    <li><a href="/contact" class="hover:text-red-500 transition">Kontak</a></li>
                </ul>
            </div>

            <!-- Bagian Layanan Baru -->
            <div>
                <h3 class="text-lg font-bold mb-4">Layanan</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#" class="hover:text-red-500 transition">Jual Tiket</a></li>
                    <li><a href="#" class="hover:text-red-500 transition">Sponsor</a></li>
                    <li><a href="#" class="hover:text-red-500 transition">Media Partner</a></li>
                    <li><a href="#" class="hover:text-red-500 transition">Layanan Kustom</a></li>
                </ul>
            </div>

            <!-- Bagian Informasi Baru -->
            <div>
                <h3 class="text-lg font-bold mb-4">Informasi</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#" class="hover:text-red-500 transition">FAQ</a></li>
                    <li><a href="#" class="hover:text-red-500 transition">Syarat & Ketentuan</a></li>
                    <li><a href="#" class="hover:text-red-500 transition">Kebijakan Privasi</a></li>
                </ul>
            </div>

            <!-- Tautan Media Sosial -->
            <div>
                <h3 class="text-lg font-bold mb-4">Ikuti Kami</h3>
                <div class="flex space-x-4 justify-center md:justify-start">
                    <a href="https://instagram.com" target="_blank" class="text-gray-400 hover:text-red-500 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-instagram">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-red-500 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-facebook">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-gray-400 hover:text-red-500 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-twitter">
                            <path
                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Hak Cipta -->
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-500">
            &copy; 2024 AutoFest. Dibuat dengan <a href="https://tailwindcss.com/"
                class="underline hover:text-red-500 transition">Tailwind CSS</a>.
        </div>
    </div>
</footer>