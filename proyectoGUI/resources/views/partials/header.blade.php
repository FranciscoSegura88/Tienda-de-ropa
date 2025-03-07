<header class="bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between p-4">
        <!-- Logo -->
        <a href="{{ route('trend') }}">
          <img src="logo.svg" alt="Icono" class="h-30 w-auto">
        </a>

        <nav class="hidden md:flex space-x-6">
            <ol class="flex space-x-6">
                <li><a href="{{ route('men') }}" class="text-gray-700 hover:text-gray-900 font-medium">Hombre</a></li>
                <li><a href="{{ route('women') }}" class="text-gray-700 hover:text-gray-900 font-medium">Mujer</a></li>
                <li><a href="{{ route('kids') }}" class="text-gray-700 hover:text-gray-900 font-medium">Niños</a></li>
                <li><a href="{{ route('offers') }}" class="text-gray-700 hover:text-gray-900 font-medium">Ofertas</a></li>
            </ol>
        </nav>

        <button id="menu-toggle" class="md:hidden p-2 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
        <ol class="flex flex-col space-y-4 p-4">
            <li><a href="{{ route('men') }}" class="text-gray-700 hover:text-gray-900 font-medium">Hombre</a></li>
            <li><a href="{{ route('women') }}" class="text-gray-700 hover:text-gray-900 font-medium">Mujer</a></li>
            <li><a href="{{ route('kids') }}" class="text-gray-700 hover:text-gray-900 font-medium">Niños</a></li>
            <li><a href="{{ route('offers') }}" class="text-gray-700 hover:text-gray-900 font-medium">Ofertas</a></li>
        </ol>
    </div>
</header>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
