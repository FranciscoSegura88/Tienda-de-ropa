@extends('welcome')

@section('content')

    <div class="bg-gray-700 text-white p-4 flex justify-center">
      <nav>
          <ol class="flex space-x-6">
              <li><a href="{{ route('kidAccesories') }}" class="font-bold hover:underline">Accesorios</a></li>
              <li><a href="{{ route('kidShoes') }}" class="font-bold hover:underline">Calzado</a></li>
              <li><a href="{{ route('kidClothing') }}" class="font-bold hover:underline">Ropa</a></li>
          </ol>
      </nav>
    </div>

    <div class="relative w-full overflow-hidden">
        <video class="w-full h-auto" loop autoplay muted controlsList="nodownload nofullscreen" disablePictureInPicture>
            <source src="../video-and-imagen/4K Free Stock Footage Baby clothes - Mário J.R. Matos (720p, h264).mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>

    @yield('mainContent')
@endsection
