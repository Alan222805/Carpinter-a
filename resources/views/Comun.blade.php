<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpinteria el castor</title>
    @yield('estilos')
    <link rel="stylesheet" href="/css/Comun.css">
</head>
<body>
    <header id="menu">
        <nav>
            <div class="logo">
                <a href="/"><img src="/imagenes/logo.jpg" alt="" class="logo_carpinteria"></a>
            </div>
            <ul>
                <li class="nav-item"><a class="nav-link" href="/">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="Cotizaciones">Cotizaciones</a></li>
                
                <li class="nav-item"><a class="nav-link" href="Servicio_cliente">Ayuda y Soporte</a></li>
                <li class="nav-item"><a class="nav-link" href="login"><img src="/imagenes/image.png" alt="" width="40px">Inicia sesión o registrate</a></li>
            </ul>
        </nav>
    </header>

    @yield('ContenidoPrincipal')

    <footer>
        <div class="logo">
            <a href=""><img src="/imagenes/logo.jpg" alt="" class="logo_carpinteria"></a>
        </div>
        <ul>
            <li class="item_footer"><a class="enlace_footer" href="#">Ayuda y soporte</a></li>
            <li class="item_footer"><a class="enlace_footer" href="#">Instagram</a></li>
            <li class="item_footer"><a class="enlace_footer" href="#">Facebook</a></li>
            <li class="item_footer"><a class="enlace_footer" href="#">Productos</a></li>
            <li class="item_footer"><a class="enlace_footer" href="#">Acerca de nosotros</a></li>
            <li>© 2024 WOODCRAFT</li>
        </ul>
    </footer>
</body>
</html>