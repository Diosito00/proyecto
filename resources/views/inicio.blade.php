<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <title>Tillas</title>
        <link rel="stylesheet" href="css/style-carrusel.css">
        <link rel="stylesheet" href="css/style-inicio.css">
    </head>
    <body>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        {{-- Barra de Navegacion --}}
        <x-navbar/>
        {{-- Carrusel --}}
        <x-carousel/>

        <section class="container py-5 my-3 border-bottom">
            <div class="row g-4 text-center">
                
                <div class="col-6 col-md-3 feature-box">
                    <i class="bi bi-truck fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">ENVÍOS A TODO EL PAÍS</h6>
                    <p class="text-muted small mb-0">En compras mayores a $50.000</p>
                </div>

                <div class="col-6 col-md-3 feature-box">
                    <i class="bi bi-credit-card fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">CUOTAS SIN INTERÉS</h6>
                    <p class="text-muted small mb-0">Con tarjetas seleccionadas</p>
                </div>

                <div class="col-6 col-md-3 feature-box">
                    <i class="bi bi-arrow-repeat fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">CAMBIOS GRATIS</h6>
                    <p class="text-muted small mb-0">Dentro de los 30 días</p>
                </div>

                <div class="col-6 col-md-3 feature-box">
                    <i class="bi bi-shield-check fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">COMPRA SEGURA</h6>
                    <p class="text-muted small mb-0">Protegemos tus datos</p>
                </div>

            </div>
        </section>

        <section class="container py-5 my-2">
            <h3 class="text-center fw-bold mb-4 text-uppercase">Compra por Categoría</h3>
            
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <a href="/hombres" class="category-card d-block position-relative rounded overflow-hidden">
                        <img src="{{ asset('imagenes/cat-hombre.jpg') }}" alt="Hombres" class="w-100">
                        <div class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <h4 class="text-white fw-bold mb-0 text-uppercase tracking-wide">Hombres</h4>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="/mujeres" class="category-card d-block position-relative rounded overflow-hidden">
                        <img src="{{ asset('imagenes/cat-mujer.jpg') }}" alt="Mujeres" class="w-100">
                        <div class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <h4 class="text-white fw-bold mb-0 text-uppercase tracking-wide">Mujeres</h4>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="/ninos" class="category-card d-block position-relative rounded overflow-hidden">
                        <img src="{{ asset('imagenes/cat-ninos.jpg') }}" alt="Niños" class="w-100">
                        <div class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <h4 class="text-white fw-bold mb-0 text-uppercase tracking-wide">Niños</h4>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="/deportes" class="category-card d-block position-relative rounded overflow-hidden">
                        <img src="{{ asset('imagenes/cat-deportes.jpg') }}" alt="Deportes" class="w-100">
                        <div class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <h4 class="text-white fw-bold mb-0 text-uppercase tracking-wide">Deportes</h4>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        {{--Pie de Pagina--}}
        <x-footer />
    </body>
</html>