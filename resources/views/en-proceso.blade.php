<!DOCTYPE html>
<!-- lang="es": indica que el contenido está en español -->
<html lang="es">
<head>
    <!-- Permite mostrar correctamente acentos y caracteres especiales -->
    <meta charset="UTF-8">
    <!-- Hace que la página sea responsive (se adapte a celulares) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título que aparece en la pestaña del navegador -->
    <title>En procesos | Tillas - Zapatillas Urbanas</title>
    <!-- Ícono de la pestaña -->
    <link rel="icon" href="{{ asset('imagenes/Logo-blanco.ico') }}" type="image/x-icon">
    <!-- Bootstrap: framework CSS para diseño y estilos -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
<!-- Componente Blade: barra de navegación reutilizable -->
<x-navbar/>

<!-- container: centra el contenido y limita el ancho text-center: centra todo el texto  py-5: padding vertical (espacio arriba y abajo) -->
<div class="container text-center py-5">
    <!-- h2: título principal  fw-bold: negrita  mb-3: margen inferior -->
    <h2 class="fw-bold mb-3">🚧 Página en construcción</h2>
    <!-- p: párrafo  text-muted: color gris mb-4: margen inferior -->
    <p class="text-muted mb-4">
        Estamos trabajando para traerte esta sección muy pronto.
    </p>
    <!-- a: enlace href="/": redirige a la página principal btn: clase base de botón en Bootstrap btn-dark: botón color oscuro -->
    <a href="/" class="btn btn-dark">Volver al inicio</a>
</div>
<!-- Componente Blade: footer reutilizable -->
<x-footer/>
<!-- JS de Bootstrap: permite funcionalidades interactivas -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>