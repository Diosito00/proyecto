<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <meta http-equiv="X-UA-Compatible"...>: Fuerza a Internet Explorer a usar su motor de renderizado más reciente (Edge). --}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- Carga los estilos principales de Bootstrap --}}
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

        <title>Tillas - Zapatillas Urbanas</title>
        <link rel="icon" href="{{ asset('imagenes/Logo-blanco.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="css/style-inicio.css">
    </head>

    <body>
        {{-- Carga los scripts de Bootstrap (necesarios para que funcionen menús desplegables y carruseles) --}}
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        {{-- Barra de Navegacion --}}
        <x-navbar/>
        {{-- Carrusel --}}
        <x-carousel/>

        {{-- Sección de Beneficios --}}
        <!-- Sección centrada con espacio y línea inferior -->
        <section class="container py-5 my-3 border-bottom">
            <!-- Fila con separación entre columnas y contenido centrado -->
            <div class="row g-4 text-center">
                <!-- Columna responsive: 2 por fila en celular, 4 en pantallas grandes -->
                <div class="col-6 col-md-3 feature-box">
                    <!-- Ícono de envío -->
                    <i class="bi bi-truck fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">ENVÍOS A TODO EL PAÍS</h6>
                    <p class="text-muted small mb-0">En compras mayores a $50.000</p>
                </div>

                <div class="col-6 col-md-3 feature-box">
                    <!-- Ícono de pago -->
                    <i class="bi bi-credit-card fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">CUOTAS SIN INTERÉS</h6>
                    <p class="text-muted small mb-0">Con tarjetas seleccionadas</p>
                </div>

                <div class="col-6 col-md-3 feature-box">
                    <!-- Ícono de cambios -->
                    <i class="bi bi-arrow-repeat fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">CAMBIOS GRATIS</h6>
                    <p class="text-muted small mb-0">Dentro de los 30 días</p>
                </div>

                <div class="col-6 col-md-3 feature-box">
                    <!-- Ícono de seguridad -->
                    <i class="bi bi-shield-check fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">COMPRA SEGURA</h6>
                    <p class="text-muted small mb-0">Protegemos tus datos</p>
                </div>

            </div>
        </section>

        {{-- Sección de Categorias --}} 
        <section class="container py-5 my-2">
            <h3 class="text-center fw-bold mb-4 text-uppercase">Compra por Categoría</h3>
            
            <!-- Fila con separación -->
            <div class="row g-4">
                <!-- Columna responsive -->
                <div class="col-6 col-md-3">

                    <!-- Enlace que redirige al catálogo con filtro aplicado, route('catalogo') genera la URL automáticamente, ['categorias' => ['hombre']] envía el filtro, Resultado: /catalogo?categorias[]=hombre
                    d-block: hace que TODO el bloque sea clickeable, position-relative: base para posicionar elementos encima (overlay), rounded: bordes redondeados, overflow-hidden: evita que contenido se salga del contenedor -->
                    <a href="{{ route('catalogo', ['categorias' => ['hombre']]) }}" class="category-card d-block position-relative rounded overflow-hidden">

                        <!-- Imagen que representa la categoría src: ruta de la imagen,asset(): genera la URL correcta dentro del proyecto, w-100: hace que la imagen ocupe todo el ancho del contenedor  -->
                        <img src="{{ asset('imagenes/cat-hombre.jpg') }}" alt="Hombres" class="w-100"> 

                        <!-- Capa que se coloca encima de la imagen, category-overlay: clase personalizada (color, opacidad, efectos), position-absolute: permite posicionar el elemento se posiciona respecto al contenedor padre (que tiene position-relative), top-0 start-0: ubica la capa desde la esquina superior izquierda, w-100 h-100:cubre todo el ancho y alto -->
                        <div class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <h4 class="text-white fw-bold mb-0 text-uppercase tracking-wide">Hombres</h4>
                        </div>
                    </a>
                </div>

                <!-- Columna responsive -->
                <div class="col-6 col-md-3">
                    <!-- Enlace al catálogo filtrado por categoría "mujer" Genera: /catalogo?categorias[]=mujer, d-block: toda la tarjeta es clickeable position-relative: base para el overlay ,overflow-hidden: evita desbordes -->
                    <a href="{{ route('catalogo', ['categorias' => ['mujer']]) }}" class="category-card d-block position-relative rounded overflow-hidden">
                        <!-- Imagen de la categoría, w-100: ocupa todo el ancho -->
                        <img src="{{ asset('imagenes/cat-mujer.jpg') }}" alt="Mujeres" class="w-100">
                        <!-- Capa que se coloca encima de la imagen, category-overlay: clase personalizada (color, opacidad, efectos), position-absolute: permite posicionar el elemento se posiciona respecto al contenedor padre (que tiene position-relative), top-0 start-0: ubica la capa desde la esquina superior izquierda, w-100 h-100:cubre todo el ancho y alto -->
                        <div class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <h4 class="text-white fw-bold mb-0 text-uppercase tracking-wide">Mujeres</h4>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="{{ route('catalogo', ['categorias' => ['nino']]) }}" class="category-card d-block position-relative rounded overflow-hidden">
                        <img src="{{ asset('imagenes/cat-ninos.jpg') }}" alt="Niños" class="w-100">
                        <div class="category-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <h4 class="text-white fw-bold mb-0 text-uppercase tracking-wide">Niños</h4>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="{{ route('catalogo', ['deportes' => ['running']]) }}" class="category-card d-block position-relative rounded overflow-hidden">
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
            {{-- d-flex justify-content-between: Coloca el título "Nuevos Ingresos" a la izquierda y el enlace "Ver todos" a la extrema derecha. --}}
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h3 class="fw-bold mb-0 text-uppercase">Nuevos Ingresos</h3>
                <a href="{{ route('catalogo') }}" class="text-dark text-decoration-none fw-bold border-bottom border-dark pb-1 small text-uppercase tracking-wide">Ver todos</a>
            </div>
            
            <div class="row g-4">
                
                {{-- Responsive de Productos. --}}
                <!-- Columna responsive: 1 en celular, 2 en tablet, 4 en desktop -->
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Card de producto, border-0: sin borde, h-100: altura completa -->
                    <div class="card product-card border-0 h-100">
                        <!-- Contenedor de imagen  position-relative: base para elementos encima -->
                        <div class="position-relative bg-light rounded overflow-hidden">
                            <!--badge:etiqueta.bg-dark text-white: fondo negro, texto blanco.position-absolute:encima de la imagen. top-0 start-0: arriba izquierda. m-3: margen. z-1: se asegura que esté por encima. -->
                            <span class="badge bg-dark text-white position-absolute top-0 start-0 m-3 z-1 px-2 py-1">NUEVO</span>
                            <!-- Imagen del producto -->
                            <img src="{{ asset('imagenes/Puma-v-n-3.jpg') }}" class="card-img-top product-img" alt="Puma Velocity">
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="text-muted small mb-1 text-uppercase tracking-wide">Puma</p>
                            {{-- fs-6 y fs-5: Controlan el tamaño de fuente (font-size). --}}
                            <!-- Nombre del producto -->
                            <h5 class="card-title fw-bold mb-1 fs-6">Puma Velocity Nitro 3</h5>
                            <p class="card-text fw-bold fs-5 mb-3">$125.000</p>
                            <!-- Botón de compra -->
                            <a href="/en-proceso" class="btn btn-dark w-100 fw-bold text-uppercase rounded-0 btn-comprar">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <!-- Columna responsive: 1 en celular, 2 en tablet, 4 en desktop -->
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Card de producto, border-0: sin borde, h-100: altura completa -->
                    <div class="card product-card border-0 h-100">
                        <!-- Contenedor de imagen  position-relative: base para elementos encima -->
                        <div class="position-relative bg-light rounded overflow-hidden">
                            <!-- Imagen del producto -->
                            <img src="{{ asset('imagenes/Puma-Salehe-b-v-n-u.jpg') }}" class="card-img-top product-img" alt="Nike Air Zoom">
                        </div>
                        
                        <div class="card-body px-0 pb-0">
                            <p class="text-muted small mb-1 text-uppercase tracking-wide">Puma</p>
                            <!-- Nombre del producto -->
                            <h5 class="card-title fw-bold mb-1 fs-6">Puma x Salehe Bembury</h5>
                            <p class="card-text fw-bold fs-5 mb-3">$145.000</p>
                            <!-- Botón de compra -->
                            <a href="/en-proceso" class="btn btn-dark w-100 fw-bold text-uppercase rounded-0 btn-comprar">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card product-card border-0 h-100">
                        <div class="position-relative bg-light rounded overflow-hidden">
                            {{-- Etiqueta de descuento --}}
                            <span class="badge bg-danger text-white position-absolute top-0 start-0 m-3 z-1 px-2 py-1">-15%</span>
                            <img src="{{ asset('imagenes/Topper-c-m.jpg') }}" class="card-img-top product-img" alt="Adidas Ultraboost">
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="text-muted small mb-1 text-uppercase tracking-wide">Topper</p>
                            <h5 class="card-title fw-bold mb-1 fs-6">Topper Core Mesh</h5>
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <p class="card-text fw-bold fs-5 mb-0">$180.000</p>
                                {{-- text-decoration-line-through: Tacha el texto (ideal para precios viejos). --}}
                                <p class="text-decoration-line-through text-muted small mb-0">$211.000</p>
                            </div>
                            <a href="/en-proceso" class="btn btn-dark w-100 fw-bold text-uppercase rounded-0 btn-comprar">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card product-card border-0 h-100">
                        <div class="position-relative bg-light rounded overflow-hidden">
                            <img src="{{ asset('imagenes/Topper-f-2.jpg') }}" class="card-img-top product-img" alt="New Balance 550">
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="text-muted small mb-1 text-uppercase tracking-wide">Topper</p>
                            <h5 class="card-title fw-bold mb-1 fs-6">Topper Fast 2.0</h5>
                            <p class="card-text fw-bold fs-5 mb-3">$160.000</p>
                            <a href="/en-proceso" class="btn btn-dark w-100 fw-bold text-uppercase rounded-0 btn-comprar">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- Sección de Banner Promocional --}}
        {{-- container-fluid px-0: Ocupa el 100% de la pantalla de lado a lado sin márgenes (px-0 quita el padding lateral). --}}
        <section class="container-fluid px-0 my-5">
            <div class="promo-banner position-relative d-flex align-items-center justify-content-center text-center">
                
                {{-- Capa superpuesta con z-index 1 (z-1) para oscurecer la imagen de fondo. --}}
                <div class="promo-overlay position-absolute top-0 start-0 w-100 h-100 z-1"></div>
                
                {{-- Contenido con z-index 2 (z-2) para asegurar que quede "por encima" de la capa oscura. --}}
                <div class="promo-content position-relative z-2 text-white p-4">
                    <p class="text-uppercase tracking-wide fw-bold mb-2 text-light">Edición Limitada</p>
                    <h2 class="display-4 fw-bold text-uppercase tracking-wide mb-3">Semana de las Marcas</h2>
                    <p class="fs-5 mb-4">Descubre lo mejor de <span class="fw-bold text-uppercase">Puma</span> y <span class="fw-bold text-uppercase">Topper</span> en un solo lugar.</p>
                    
                    {{-- flex-column flex-sm-row: En celulares los botones se apilan uno sobre otro. En pantallas pequeñas (sm) o mayores se colocan uno al lado del otro. --}}
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center mt-4">
                        <a href="{{ route('catalogo', ['marcas' => ['puma']]) }}" class="btn btn-outline-light fw-bold text-uppercase px-5 py-3 rounded-0 btn-marca">
                            Ver colección Puma
                        </a>
                        <a href="{{ route('catalogo', ['marcas' => ['topper']]) }}" class="btn btn-outline-light fw-bold text-uppercase px-5 py-3 rounded-0 btn-marca">
                            Ver colección Topper
                        </a>
                    </div>
                </div>

            </div>
        </section>

        {{-- Pie de Pagina --}}
        <x-footer />
    </body>
</html>