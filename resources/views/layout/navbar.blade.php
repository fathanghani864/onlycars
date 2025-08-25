<nav class="bg-black text-white shadow-lg fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center py-6 px-6">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-2">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/car.png" alt="Logo" class="w-8 h-8">
            <span class="text-2xl font-bold tracking-wide">AutoFest</span>
        </a>

        <!-- Menu -->
        <ul class="hidden md:flex space-x-8 font-medium">
            <li><a href="/" class="hover:text-red-500 transition">Home</a></li>
            <li><a href="/event" class="hover:text-red-500 transition">Event</a></li>
            <li><a href="/gallery" class="hover:text-red-500 transition">Gallery</a></li>
            <li><a href="/about" class="hover:text-red-500 transition">About</a></li>
            <li><a href="/contact" class="hover:text-red-500 transition">Contact</a></li>
        </ul>

        <!-- Button -->
        <div class="hidden md:block">
            <a href="/register" class="bg-red-600 px-5 py-2 rounded-lg font-semibold hover:bg-red-700 transition">
                Register
            </a>
        </div>

        <!-- Mobile menu button -->
        <button id="menu-btn" class="md:hidden focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile menu -->
    <div id="menu" class="hidden md:hidden bg-black px-6 py-4 space-y-4">
        <a href="/" class="block hover:text-red-500 transition">Home</a>
        <a href="/event" class="block hover:text-red-500 transition">Event</a>
        <a href="/gallery" class="block hover:text-red-500 transition">Gallery</a>
        <a href="/about" class="block hover:text-red-500 transition">About</a>
        <a href="/contact" class="block hover:text-red-500 transition">Contact</a>
        <a href="/register"
            class="block bg-red-600 px-4 py-2 rounded-lg text-center font-semibold hover:bg-red-700 transition">Register</a>
    </div>
</nav>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>