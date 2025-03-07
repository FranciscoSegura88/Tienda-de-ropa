@extends('components.men')

@section('mainContent')

    <div class="flex flex-wrap justify-center gap-6 p-6">
        <!-- Tarjeta 1 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto1.jpg" alt="Producto 1" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio hombre 1</h3>
            <p class="text-sm text-gray-600">Descripción del producto 1.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto2.jpg" alt="Producto 2" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio hombre 2</h3>
            <p class="text-sm text-gray-600">Descripción del producto 2.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>

        <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 text-center w-48">
            <img src="producto3.jpg" alt="Producto 3" class="w-full rounded-lg">
            <h3 class="text-lg font-semibold mt-2">Accesorio hombre 3</h3>
            <p class="text-sm text-gray-600">Descripción del producto 3.</p>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-lg mt-4 hover:bg-gray-700">Comprar</button>
        </div>
    </div>
@endsection
