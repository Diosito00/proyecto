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

        {{-- Sección de Beneficios --}}
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

        {{-- Sección de Categorias --}} 
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
        
        {{-- Sección de Nuevos Ingresos --}}
        <section class="container py-5">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h3 class="fw-bold mb-0 text-uppercase">Nuevos Ingresos</h3>
                <a href="/tienda" class="text-dark text-decoration-none fw-bold border-bottom border-dark pb-1 small text-uppercase tracking-wide">Ver todos</a>
            </div>
            
            <div class="row g-4">
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card product-card border-0 h-100">
                        <div class="position-relative bg-light rounded overflow-hidden">
                            <span class="badge bg-dark text-white position-absolute top-0 start-0 m-3 z-1 px-2 py-1">NUEVO</span>
                            <button class="btn btn-light btn-sm rounded-circle shadow-sm position-absolute top-0 end-0 m-3 z-1 wish-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="{{ asset('imagenes/Puma-v-n-3.jpg') }}" class="card-img-top product-img" alt="Puma Velocity">
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="text-muted small mb-1 text-uppercase tracking-wide">Puma</p>
                            <h5 class="card-title fw-bold mb-1 fs-6">Puma Velocity Nitro 3</h5>
                            <p class="card-text fw-bold fs-5 mb-3">$125.000</p>
                            <button class="btn btn-dark w-100 fw-bold text-uppercase rounded-0 btn-comprar">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card product-card border-0 h-100">
                        <div class="position-relative bg-light rounded overflow-hidden">
                            <button class="btn btn-light btn-sm rounded-circle shadow-sm position-absolute top-0 end-0 m-3 z-1 wish-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="{{ asset('imagenes/Puma-Salehe-b-v-n-u.jpg') }}" class="card-img-top product-img" alt="Nike Air Zoom">
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="text-muted small mb-1 text-uppercase tracking-wide">Puma</p>
                            <h5 class="card-title fw-bold mb-1 fs-6">Puma x Salehe Bembury</h5>
                            <p class="card-text fw-bold fs-5 mb-3">$145.000</p>
                            <button class="btn btn-dark w-100 fw-bold text-uppercase rounded-0 btn-comprar">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card product-card border-0 h-100">
                        <div class="position-relative bg-light rounded overflow-hidden">
                            <span class="badge bg-danger text-white position-absolute top-0 start-0 m-3 z-1 px-2 py-1">-15%</span>
                            <button class="btn btn-light btn-sm rounded-circle shadow-sm position-absolute top-0 end-0 m-3 z-1 wish-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="{{ asset('imagenes/Topper-c-m.jpg') }}" class="card-img-top product-img" alt="Adidas Ultraboost">
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="text-muted small mb-1 text-uppercase tracking-wide">Topper</p>
                            <h5 class="card-title fw-bold mb-1 fs-6">Topper Core Mesh</h5>
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <p class="card-text fw-bold fs-5 mb-0">$180.000</p>
                                <p class="text-decoration-line-through text-muted small mb-0">$211.000</p>
                            </div>
                            <button class="btn btn-dark w-100 fw-bold text-uppercase rounded-0 btn-comprar">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card product-card border-0 h-100">
                        <div class="position-relative bg-light rounded overflow-hidden">
                            <button class="btn btn-light btn-sm rounded-circle shadow-sm position-absolute top-0 end-0 m-3 z-1 wish-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="{{ asset('imagenes/Topper-f-2.jpg') }}" class="card-img-top product-img" alt="New Balance 550">
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="text-muted small mb-1 text-uppercase tracking-wide">Topper</p>
                            <h5 class="card-title fw-bold mb-1 fs-6">Topper Fast 2.0</h5>
                            <p class="card-text fw-bold fs-5 mb-3">$160.000</p>
                            <button class="btn btn-dark w-100 fw-bold text-uppercase rounded-0 btn-comprar">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- Sección de Banner Promocional --}}
        <section class="container-fluid px-0 my-5">
            <div class="promo-banner position-relative d-flex align-items-center justify-content-center text-center">
                
                <div class="promo-overlay position-absolute top-0 start-0 w-100 h-100 z-1"></div>
                
                <div class="promo-content position-relative z-2 text-white p-4">
                    <p class="text-uppercase tracking-wide fw-bold mb-2 text-light">Edición Limitada</p>
                    <h2 class="display-4 fw-bold text-uppercase tracking-wide mb-3">Semana de las Marcas</h2>
                    <p class="fs-5 mb-4">Descubre lo mejor de <span class="fw-bold text-uppercase">Puma</span> y <span class="fw-bold text-uppercase">Topper</span> en un solo lugar.</p>
                    
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center mt-4">
                        <a href="/puma" class="btn btn-light fw-bold text-uppercase px-5 py-3 rounded-0 btn-marca">
                            Ver colección Puma
                        </a>
                        <a href="/topper" class="btn btn-outline-light fw-bold text-uppercase px-5 py-3 rounded-0 btn-marca">
                            Ver colección Topper
                        </a>
                    </div>
                </div>

            </div>
        </section>

        {{--Pie de Pagina--}}
        <x-footer />
    </body>
</html>