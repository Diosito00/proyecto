<!DOCTYPE html>
<html lang="es">
<head>
    {{-- <meta charset="UTF-8">: Le dice al navegador que use la codificación de caracteres UTF-8, lo cual es vital para que las tildes (á, é) y la letra 'ñ' se vean correctamente. --}}
    <meta charset="UTF-8">
    
    {{-- <meta name="viewport"...>: Esencial para el diseño responsivo. Hace que la página web adapte su ancho al tamaño de la pantalla del dispositivo (celular, tablet, etc.). --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- <meta http-equiv="X-UA-Compatible"...>: Fuerza a Internet Explorer a usar su motor de renderizado más reciente (Edge). --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Carga de Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    
    {{-- Carga de Bootstrap Icons: Librería oficial de íconos de Bootstrap. De aquí salen la lupa, el corazón, el carrito y el usuario. --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    {{-- estilos personalizados específicos para la barra de navegación --}}
    <link rel="stylesheet" href="css/style-navbar.css">
</head>
{{-- <nav>: Etiqueta semántica HTML5 específica para bloques de navegación principal.
    navbar: Clase base de Bootstrap para crear la barra.
    navbar-expand-lg: ¡Clave para el modo responsivo! Le dice a la barra que se muestre completa (expandida) en pantallas Grandes (lg - Laptops/PCs) y que se colapse (modo menú hamburguesa) en pantallas más pequeñas (Tablets/Celulares). --}}
<nav class="navbar navbar-expand-lg custom-navbar">
    
    {{-- container-fluid: Ocupa el 100% del ancho de la pantalla (a diferencia de 'container' normal que deja márgenes grandes a los lados). 
        px-4: Agrega un Padding (relleno) en el eje X (izquierda y derecha) de nivel 4 para que los elementos no queden pegados a los bordes del monitor. --}}
    <div class="container-fluid px-4"> 
        
        {{-- navbar-brand: Clase especial para el logo o nombre de la marca. Bootstrap le da un tamaño y espaciado predeterminado perfecto. --}}
        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            {{-- El ícono de la página --}}
            <img src="{{ asset('imagenes/Logo-blanco.png') }}" alt="Ícono Tillas" width="35" height="35" class="d-inline-block align-text-top">
            
            {{-- El texto de la marca --}}
            <span class="fw-bold text-uppercase fs-6 tracking-wide text-white">Tillas</span>
        </a>

        {{-- BOTÓN   (Solo visible en celulares y tablets)
            navbar-toggler: Estiliza el botón.
            data-bs-toggle="collapse": Le indica al JavaScript de Bootstrap que este botón activa un elemento colapsable.
            data-bs-target="#menuPrincipal": Conecta este botón con el <div> que tiene el ID "menuPrincipal" (que contiene los enlaces). --}}
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Navegación">
            {{-- bi bi-list: Ícono de menú hamburguesa de Bootstrap Icons. fs-2 (Font-Size 2) lo hace más grande. --}}
            <i class="bi bi-list text-white fs-2"></i>
        </button>

        {{-- CONTENEDOR COLAPSABLE
            collapse navbar-collapse: Todo lo que esté dentro de este <div> se ocultará en celulares y solo se mostrará cuando se presione el botón hamburguesa. En PC siempre será visible. --}}
        <div class="collapse navbar-collapse" id="menuPrincipal">
            
            {{-- <ul>: Unordered List. Etiqueta para crear una lista de elementos.
                navbar-nav: Aplica formato de barra de navegación a la lista (quita viñetas y acomoda los elementos).
                me-auto: Significa Margin-End Auto. Pone todo el margen sobrante a la derecha de esta lista, empujando los botones de búsqueda y perfil hacia el extremo derecho de la pantalla. --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 center-links">
                
                {{-- <li>: List Item. Cada elemento de la lista. nav-item: Margen para elementos de la navbar. --}}
                <li class="nav-item">
                    {{-- nav-link: Le da estilo de enlace de navegación (color, efecto al pasar el mouse, área de clic ampliada). --}}
                    <a class="nav-link fs-6" href="/">Inicio</a>
                </li>
                <li class="nav-item"><a class="nav-link fs-6" href="/catalogo">Catálogo</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="/comercializacion">Comercialización</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="/quienes">Quienes somos</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="/contacto">Contacto</a></li>
            </ul>

            
        </div>
    </div>
</nav>
</html>