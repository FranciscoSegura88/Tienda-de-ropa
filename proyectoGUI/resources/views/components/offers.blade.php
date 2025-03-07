@extends('welcome') <!-- Asume que estás extendiendo welcome.blade.php -->

@section('content')

    <div class="bg-gray-700 text-white p-4 flex justify-center">
      <nav>
          <ol class="flex space-x-6">
              <li><a href="{{ route('offersAccesories') }}" class="font-bold hover:underline">Accesorios</a></li>
              <li><a href="{{ route('offersShoes') }}" class="font-bold hover:underline">Calzado</a></li>
              <li><a href="{{ route('offersClothing') }}" class="font-bold hover:underline">Ropa</a></li>
          </ol>
      </nav>
    </div>

    <!-- Video de presentación -->
    <div class="relative w-full overflow-hidden">
        <video class="w-full h-auto" loop autoplay muted controlsList="nodownload nofullscreen" disablePictureInPicture>
            <source src="../video-and-imagen/Choosing Clothes Stock Video - Motion Array (720p, h264).mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>

    @yield('mainContent')
@endsection
