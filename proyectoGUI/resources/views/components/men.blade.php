@extends('welcome')

@section('content')
    <!-- Header -->
    <header class="bg-gray-800 text-white p-4 flex justify-between items-center">
        <img src="hola.jpeg" alt="Icono" class="h-12">
        <nav>
            <ol class="flex space-x-6">
                <li><a href="../views/trend.blade.php" class="font-bold hover:underline">Trend</a></li>
                <li><a href="../views/hombre.blade.php" class="font-bold hover:underline">Hombre</a></li>
                <li><a href="../views/mujer.blade.php" class="font-bold hover:underline">Mujer</a></li>
                <li><a href="../views/niños.blade.php" class="font-bold hover:underline">Niños</a></li>
                <li><a href="../views/ofertas.blade.php" class="font-bold hover:underline">Ofertas</a></li>
                <li><a href="#" class="font-bold hover:underline">Usuario</a></li>
                <li><a href="#" class="font-bold hover:underline">Carrito</a></li>
            </ol>
        </nav>
    </header>

    <!-- Subheader -->
    <div class="bg-gray-700 text-white p-4 flex justify-center">
        <nav>
            <ol class="flex space-x-6">
                <li><a href="accesorios.html" class="font-bold hover:underline">Accesorios</a></li>
                <li><a href="calzado.html" class="font-bold hover:underline">Calzado</a></li>
                <li><a href="ropa.html" class="font-bold hover:underline">Ropa</a></li>
            </ol>
        </nav>
    </div>

    <!-- Contenido principal -->
    <main>
        <!-- Video de presentación -->
        <div class="relative w-full overflow-hidden">
            <video class="w-full h-auto" loop autoplay muted controlsList="nodownload nofullscreen" disablePictureInPicture>
                <source src="../video-and-imagen/No copyright man wearing clothes  Man closing shirt buttons  Free stock footage  Creative commons - Stock Videos-Copyright Free (720p, h264).mp4" type="video/mp4">
                Tu navegador no soporta la etiqueta de video.
            </video>
        </div>

        <!-- Tarjetas de productos -->
        <div class="flex flex-wrap justify-center gap-6 p-6">
            <!-- Tarjeta 1 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
                <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
                <h3 class="text-lg font-semibold mt-2">Producto 1</h3>
                <p class="text-sm text-gray-600">Descripción del producto 1.</p>
                <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
            </div>

            <!-- Tarjeta 2 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
                <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
                <h3 class="text-lg font-semibold mt-2">Producto 2</h3>
                <p class="text-sm text-gray-600">Descripción del producto 2.</p>
                <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
            </div>

            <!-- Tarjeta 3 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
                <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
                <h3 class="text-lg font-semibold mt-2">Producto 3</h3>
                <p class="text-sm text-gray-600">Descripción del producto 3.</p>
                <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4 fixed bottom-0 w-full">
        <p>&copy; 2023 Tu Tienda. Todos los derechos reservados.</p>
    </footer>
@endsection
