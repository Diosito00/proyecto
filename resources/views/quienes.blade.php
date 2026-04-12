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

    <p class="text-center text-muted mb-5">
        En Tillas nos dedicamos a ofrecer zapatillas que combinan estilo urbano, comodidad y calidad,
        pensadas para acompañarte en cada momento del día.
    </p>

<div class="row g-4 text-center mb-5">

        <div class="col-md-4">
            <div class="p-4 shadow-sm border rounded">
            <i class="bi bi-bullseye fs-1 mb-3"></i>
            <h5 class="fw-bold">Misión</h5>
            <p class="text-muted">
                Brindar productos de alta calidad que se adapten a las tendencias actuales,
                garantizando confort y durabilidad en cada paso.
            </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 shadow-sm border rounded">
            <i class="bi bi-eye fs-1 mb-3"></i>
            <h5 class="fw-bold">Visión</h5>
            <p class="text-muted">
                Ser reconocidos como una de las principales tiendas de zapatillas urbanas
                a nivel nacional, destacándonos por nuestro servicio y calidad.
            </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 shadow-sm border rounded">
            <i class="bi bi-eye fs-1 mb-3"></i>
            <h5 class="fw-bold">Valores</h5>
            <p class="text-muted">
                Compromiso con el cliente, innovación constante, responsabilidad y pasión
                por la moda urbana.
            </p>
            </div>
        </div>

</div>
    <div class="p-4 shadow-sm border rounded text-center">

        <h5 class="fw-bold mb-3">Nuestra Historia</h5>

        <p class="text-muted">
            Tillas nace como un emprendimiento enfocado en brindar una experiencia de compra
            simple, segura y moderna. Desde nuestros inicios, buscamos acercar a nuestros clientes
            productos de calidad que reflejen su estilo personal.
        </p>

        <p class="text-muted">
            Con el paso del tiempo, fuimos creciendo y ampliando nuestro catálogo, incorporando
            nuevas marcas y tendencias del mundo urbano y deportivo.
        </p>

    </div>

</div>

<x-footer/>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>