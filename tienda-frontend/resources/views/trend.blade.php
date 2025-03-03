<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Ropa</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white;
            color: #333;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img {
            height: 50px;
        }

        header nav ol {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header nav ol li {
            margin-left: 20px;
        }

        header nav ol li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        header nav ol li a:hover {
            text-decoration: underline;
        }

        /* Estilos para el video de fondo */
        .fullscreen-video {
            position: relative; /* Cambia a relative para que no se superponga al contenido */
            width: 100%; /* Ocupa el 100% del ancho */
            height: auto; /* Altura automática para mantener la proporción */
            overflow: hidden;
        }

        .fullscreen-video video {
            width: 100%; /* El video ocupa el 100% del ancho */
            height: auto; /* Altura automática para mantener la proporción */
        }

        /* Tarjetas de productos */
        .productos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px; 
            padding: 20px;
        }

        .tarjeta {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 200px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .tarjeta img {
            width: 100%;
            border-radius: 8px;
        }

        .tarjeta h3 {
            margin: 10px 0;
            font-size: 18px;
        }

        .tarjeta p {
            font-size: 14px;
            color: #666;
        }

        .tarjeta button {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .tarjeta button:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <img src="hola.jpeg" alt="Icono">
        <nav>
            <ol>
                <li><a href="../views/trend.blade.php">Trend</a></li>
                <li><a href="../views/hombre.blade.php">Hombre</a></li>
                <li><a href="../views/mujer.blade.php">Mujer</a></li>
                <li><a href="../views/niños.blade.php">Niños</a></li>
                <li><a href="../views/ofertas.blade.php">Ofertas</a></li>
                <li><a href="">Usuario</a></li>
                <li><a href="">Carrito</a></li>
            </ol>
        </nav>
    </header>

    <main>
        <!-- Video de presentación -->
        <div class="fullscreen-video">
            <video loop autoplay muted controlsList="nodownload nofullscreen" disablePictureInPicture>
                <source src="../video-and-imagen/Free Stock Video - Designer Clothes Hanging on Rack - Free Stock Video (720p, h264).mp4" type="video/mp4">
                Tu navegador no soporta la etiqueta de video.
            </video>
        </div>

        <div class="productos">
            <div class="tarjeta">
                <img src="producto1.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Descripción del producto 1.</p>
                <button>Comprar</button>
            </div>
            <div class="tarjeta">
                <img src="producto2.jpg" alt="Producto 2">
                <h3>Producto 2</h3>
                <p>Descripción del producto 2.</p>
                <button>Comprar</button>
            </div>
            <div class="tarjeta">
                <img src="producto3.jpg" alt="Producto 3">
                <h3>Producto 3</h3>
                <p>Descripción del producto 3.</p>
                <button>Comprar</button>
            </div>
        </div>
    </main>

    <footer>
        <p>© 2020 Tienda</p>
    </footer>

</body>
</html>