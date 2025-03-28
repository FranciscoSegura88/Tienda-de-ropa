@extends('welcome')

@section('content')
    <div class="flex w-full overflow-hidden p-4 items-center justify-center">
        <video class="w-1/2 h-auto" loop autoplay muted controlsList="nodownload nofullscreen" disablePictureInPicture>
            <source src="../video-and-imagen/main.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>


    <div class="flex flex-wrap justify-center gap-6 p-6">
        <!--Productos trend-->

        <div class="card trend bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Producto oferta 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card trend bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Producto oferta 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card trend bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Producto oferta 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <!--Accesorio niño-->

        <div class="card ninos accesorios bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio niño 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card ninos accesorios bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="wninos accesoriosl rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio niño 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card ninos accesorios bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio niño 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <!--Ropa niño-->

        <div class="card ninos ropa bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Ropa niño 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card ninos ropa bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Ropa niño 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card ninos ropa bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Ropa niño 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <!--Tenis mujer-->

        <div class="card tenis mujer bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis mujer 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card tenis mujer bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis mujer 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card tenis mujer bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis mujer 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <!--Tenis niño-->

        <div class="card ninos tenis bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis niño 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card ninos tenis bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis niño 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card ninos tenis bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis niño 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <!--Accesorio hombre-->

        <div class="card hombre accesorio bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio hombre 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card hombre accesorio bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio hombre 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card hombre accesorio  bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio hombre 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <!-- Ropa hombre -->
        <div class="card hombre ropa bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Ropa hombre 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card hombre ropa bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Ropa hombre 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card hombre ropa bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Ropa hombre 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <!-- Tenis mujer -->
        <div class="card mujer tenis bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis mujer 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card mujer tenis bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis mujer 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card mujer tenis bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis mujer 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <!-- Tenis Hombre -->
        <div class="card hombre tenis bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis hombre 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card hombre tenis bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis hombre 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card hombre tenis bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Tenis hombre 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <!-- Accesorios mujer -->
        <div class="card mujer accesorio bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="accesorio mujer text-lg font-semibold mt-2">Accesorio mujer 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card mujer accesorio bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio mujer 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card mujer accesorio bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio mujer 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <!-- Ropa mujer -->
        <div class="card mujer ropa bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="ropa mujer producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Ropa mujer 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card mujer ropa bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Ropa mujer 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="card mujer ropa bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Ropa mujer 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

    </div>
@endsection
