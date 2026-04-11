<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style-navbar.css">
</head>

<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-4"> <a class="navbar-brand" href="/">
            <img src="{{ asset('imagenes/Logo-blanco.png') }}" alt="Logo" height="35">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Navegación">
            <i class="bi bi-list text-white fs-2"></i>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 center-links">
                <li class="nav-item"><a class="nav-link" href="#">Calzado</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Nuevos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Mujeres</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Hombres</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Niños</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Deportes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Colecciones</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Outlet</a></li>
            </ul>

            <div class="d-flex align-items-center right-actions gap-4">
                
                <button class="btn btn-search d-flex align-items-center gap-2">
                    <i class="bi bi-search"></i>
                    <span>BUSCAR</span>
                </button>

                <div class="d-flex align-items-center gap-4 nav-icons">
                    <a href="#"><i class="bi bi-heart"></i></a>
                    <a href="#"><i class="bi bi-cart2"></i></a>
                    <a href="#"><i class="bi bi-person"></i></a>
                </div>
                
            </div>
        </div>
    </div>
</nav>