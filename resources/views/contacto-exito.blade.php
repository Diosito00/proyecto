<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje enviado - Tillas</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-exito.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>


<!-- Body con clase personalizada para estilos -->
<body class="body-exito">

<!-- Contenedor centrado horizontal y verticalmente en toda la pantalla -->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!-- Tarjeta del mensaje con sombra y texto centrado -->
    <div class="card-exito shadow text-center">
        <!-- Ícono de éxito -->
        <i class="bi bi-check-circle-fill icono-exito mb-3"></i>

        <h2 class="fw-bold mb-3">Mensaje enviado</h2>

        <p class="lead">
            <!-- Muestra el nombre desde sesión, Si no existe, muestra "usuario" -->
            Hola <strong>{{ session('nombre') ?? 'usuario' }}</strong>, qué bueno recibir tu mensaje.
        </p>

        <p class="text-muted">
            Nos pondremos en contacto con vos al correo:
            <strong>{{ session('email') ?? 'tu correo' }}</strong>
        </p>

        <p class="mt-4">
            ¡Muchas gracias por confiar en Tillas!
        </p>
        <!-- Botón para volver al inicio -->
        <a href="/" class="btn btn-dark btn-exito mt-3">
            Volver al inicio
        </a>

    </div>

</div>

<!-- JS de Bootstrap -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>