<!DOCTYPE html>
<!-- lang="es": indica que el idioma es español -->
<html lang="es">
<head>
    <!-- Permite mostrar correctamente acentos y caracteres especiales -->
    <meta charset="UTF-8">
    <!-- Hace que la página sea responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la pestaña -->
    <title>Mensaje enviado | Tillas - Zapatillas Urbanas</title>
    <link rel="icon" href="{{ asset('imagenes/Logo-blanco.ico') }}" type="image/x-icon">
    <!-- Bootstrap: framework de estilos -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- CSS personalizado para esta página -->
    <link rel="stylesheet" href="{{ asset('css/style-exito.css') }}">
    <!-- Bootstrap Icons: librería de íconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<!-- body-exito: clase personalizada para estilos (fondo, colores, etc) -->
<body class="body-exito">

<!-- container: centra el contenido d-flex: activa flexbox  justify-content-center: centra horizontalmente align-items-center: centra verticalmente min-vh-100: ocupa el 100% del alto de la pantalla -->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!-- Tarjeta del mensaje con sombra y texto centrado card-exito: clase personalizada shadow: sombra  text-center: texto centrado -->
    <div class="card-exito shadow text-center">
        <!-- i: ícono bi-check-circle-fill: ícono de éxito icono-exito: estilo personalizado mb-3: margen inferior -->
        <i class="bi bi-check-circle-fill icono-exito mb-3"></i>
        <!-- h2: título fw-bold: negrita mb-3: margen inferior -->
        <h2 class="fw-bold mb-3">Mensaje enviado</h2>

        <!-- lead: texto destacado -->
        <p class="lead">
            <!-- session('nombre'): obtiene el nombre desde Laravel ?? 'usuario': valor por defecto si no existe -->
            Hola <strong>{{ session('nombre') ?? 'usuario' }}</strong>, qué bueno recibir tu mensaje.
        </p>
        <!-- text-muted: texto gris -->
        <p class="text-muted">
            <!-- session('email'): obtiene el email  valor por defecto si no existe -->
            Nos pondremos en contacto con vos al correo:
            <strong>{{ session('email') ?? 'tu correo' }}</strong>
        </p>

        <!-- mt-4: margen superior -->
        <p class="mt-4">
            ¡Muchas gracias por confiar en Tillas!
        </p>
        <!-- Botón para volver al inicio, a: enlace  href="/": vuelve al inicio btn-dark: boton color oscuro btn-exito: estilo personalizado
        mt-3: margen superior -->
        <a href="/" class="btn btn-dark btn-exito mt-3">
            Volver al inicio
        </a>

    </div>

</div>

<!-- JS de Bootstrap -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>