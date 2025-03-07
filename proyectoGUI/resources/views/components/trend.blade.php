@extends('welcome')

@section('content')

    <!-- Video de presentación -->
    <div class="relative w-full overflow-hidden">
        <video class="w-full h-auto" loop autoplay muted controlsList="nodownload nofullscreen" disablePictureInPicture>
            <source src="../video-and-imagen/Free Stock Video - Designer Clothes Hanging on Rack - Free Stock Video (720p, h264).mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>

    @yield('mainContent')
@endsection
