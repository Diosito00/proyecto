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

<body class="body-exito">

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <div class="card-exito shadow text-center">

        <i class="bi bi-check-circle-fill icono-exito mb-3"></i>

        <h2 class="fw-bold mb-3">Mensaje enviado</h2>

        <p class="lead">
            Hola <strong>{{ session('nombre') ?? 'usuario' }}</strong>, qué bueno recibir tu mensaje.
        </p>

        <p class="text-muted">
            Nos pondremos en contacto con vos al correo:
            <strong>{{ session('email') ?? 'tu correo' }}</strong>
        </p>

        <p class="mt-4">
            ¡Muchas gracias por confiar en Tillas!
        </p>

        <a href="/" class="btn btn-dark btn-exito mt-3">
            Volver al inicio
        </a>

    </div>

</div>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>