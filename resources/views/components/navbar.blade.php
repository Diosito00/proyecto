<!DOCTYPE html>
<!-- html: raíz del documento -->
<!-- lang="es": indica que el contenido está en español -->
<html lang="es">
<head>
    <!-- charset UTF-8: permite usar tildes, ñ, símbolos -->
    <meta charset="UTF-8">
    <!-- viewport: hace que la web sea responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- X-UA-Compatible: mejora compatibilidad con navegadores antiguos -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS: framework de estilos -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Bootstrap Icons: librería de íconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- CSS propio del navbar -->
    <link rel="stylesheet" href="css/style-navbar.css">
</head>

<!-- NAVBAR  nav: etiqueta semántica para navegación navbar: clase base de Bootstrap navbar-expand-lg: expandido en PC, colapsado en mobile custom-navbar: clase propia para estilos personalizados -->
<nav class="navbar navbar-expand-lg custom-navbar">
    <!-- container-fluid: ocupa todo el ancho px-4: padding horizontal -->
    <div class="container-fluid px-4"> 
        <!-- LOGO / MARCA navbar-brand: estilo especial para la marca d-flex: usa flexbox align-items-center: centra verticalmente gap-2: separación entre logo y texto -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            <!-- Imagen del logo asset(): genera ruta correcta width/height: tamaño d-inline-block: permite manejar dimensiones align-text-top: alinea con el texto -->
            <img src="{{ asset('imagenes/Logo-blanco.png') }}" alt="Ícono Tillas" width="35" height="35" class="d-inline-block align-text-top">
            
            <!-- Nombre de la marca fw-bold: negrita text-uppercase: mayúsculas fs-6: tamaño de texto tracking-wide: separación de letras (CSS propio) text-white: color blanco -->
            <span class="fw-bold text-uppercase fs-6 tracking-wide text-white">Tillas</span>
        </a>

        <!-- BOTÓN HAMBURGUESA (solo en celular) navbar-toggler: botón de Bootstrap border-0: sin borde data-bs-toggle="collapse": activa colapso data-bs-target="#menuPrincipal": conecta con el menú -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Navegación">
            <!-- Ícono hamburguesa bi bi-list: ícono  fs-2: tamaño grande text-white: color blanco -->
            <i class="bi bi-list text-white fs-2"></i>
        </button>

        {{-- CONTENEDOR COLAPSABLE
            collapse navbar-collapse: Todo lo que esté dentro de este <div> se ocultará en celulares y solo se mostrará cuando se presione el botón hamburguesa. En PC siempre será visible. --}}
        <div class="collapse navbar-collapse" id="menuPrincipal">
            <!-- LISTA DE LINKS  navbar-nav: estilo de navegación me-auto: empuja el contenido hacia la derecha mb-2 mb-lg-0: margen en mobile, sin margen en PC center-links: clase personalizada -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 center-links">
                
                {{-- <li>: List Item. Cada elemento de la lista. nav-item: Margen para elementos de la navbar. --}}
                <li class="nav-item">
                    {{-- nav-link: Le da estilo de enlace de navegación (color, efecto al pasar el mouse, área de clic ampliada). --}}
                    <a class="nav-link fs-8" href="/">Inicio</a>
                </li>
                <li class="nav-item"><a class="nav-link fs-8" href="/catalogo">Catálogo</a></li>
                <li class="nav-item"><a class="nav-link fs-8" href="/comercializacion">Comercialización</a></li>
                <li class="nav-item"><a class="nav-link fs-8" href="/quienes">Quienes somos</a></li>
                <li class="nav-item"><a class="nav-link fs-8" href="/contacto">Contacto</a></li>
                <li class="nav-item"><a class="nav-link fs-8" href="/terminos">Terminos de uso</a></li>
            </ul>

            
        </div>
    </div>

    <!-- CONTENEDOR FLEX d-flex: activa Flexbox para organizar los elementos en línea -->
    <div class="d-flex">
    <!-- BOTÓN DE LOGIN, <a>: se usa como botón que redirige a la página de login (/login), btn-outline-light: botón con borde blanco y fondo transparente, border-0: elimina el borde por defecto
    d-flex: convierte el botón en flexbox, align-items-center: centra verticalmente el contenido (ícono + texto), gap-2: agrega espacio entre el ícono y el texto, px-3 py-2: padding horizontal y vertical, rounded-pill: bordes totalmente redondeados (estilo tipo cápsula)-->
    <a href="/login" class="btn btn-outline-light fw-bold border-0 d-flex align-items-center gap-2 px-3 py-2 rounded-pill">
        
        <!-- ÍCONO DE USUARIO bi bi-person: ícono de Bootstrap Icons representa usuario/login -->
        <i class="bi bi-person"></i> 
        <!-- TEXTO DEL BOTÓN span: contenedor en línea para el texto permite separar visualmente del ícono -->
        <span>Ingresar</span>
    </a>
    </div>

</nav>
</html>