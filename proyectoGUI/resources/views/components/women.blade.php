@extends('welcome')

@section('content')

    <div class="bg-gray-700 text-white p-4 flex justify-center">
      <nav>
          <ol class="flex space-x-6">
              <li><a href="{{ route('womenAccesories') }}" class="font-bold hover:underline">Accesorios</a></li>
              <li><a href="{{ route('womenShoes') }}" class="font-bold hover:underline">Calzado</a></li>
              <li><a href="{{ route('womenClothing') }}" class="font-bold hover:underline">Ropa</a></li>
          </ol>
      </nav>
    </div>

    <div class="relative w-full overflow-hidden">
        <video class="w-full h-auto" loop autoplay muted controlsList="nodownload nofullscreen" disablePictureInPicture>
            <source src="../video-and-imagen/Clothing Store Panning  Cloth Store  Free Stock Video  Royalty Free Video  No Copyright - Vivek Gupta (720p, h264).mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>

    @yield('mainContent')
@endsection
