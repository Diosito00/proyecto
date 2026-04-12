<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Tillas</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="css/style-inicio.css">
</head>

<body>

<x-navbar/>

<div class="container py-5">

    <h2 class="fw-bold text-center mb-4">Quiénes Somos</h2>

    <p class="text-center">
        En Tillas somos una tienda especializada en zapatillas urbanas y deportivas,
        enfocada en brindar estilo, comodidad y calidad a nuestros clientes.
    </p>

    <div class="row mt-5 text-center">

        <div class="col-md-4">
            <h5 class="fw-bold">Misión</h5>
            <p>Ofrecer productos de calidad con diseño moderno.</p>
        </div>

        <div class="col-md-4">
            <h5 class="fw-bold">Visión</h5>
            <p>Ser referentes en moda urbana.</p>
        </div>

        <div class="col-md-4">
            <h5 class="fw-bold">Valores</h5>
            <p>Calidad, confianza y estilo.</p>
        </div>

    </div>

</div>

<x-footer/>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>