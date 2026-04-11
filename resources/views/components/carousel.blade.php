<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explorar - Tillas</title>
    <link rel="icon" href="{{ asset('imagenes/Logo-blanco.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style-footer.css">
</head>

<carousel id="carruselInicio" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>                <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="1" aria-label="Slide 2"></button>            <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{ asset('imagenes/img_slide1.jpg') }}" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('imagenes/img1.jpg') }}" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('imagenes/img2.jpg') }}" class="d-block w-100" alt="Slide 3">
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carruselInicio" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carruselInicio" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</carousel>