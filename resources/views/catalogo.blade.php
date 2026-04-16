<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Tillas</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style-catalogo.css">
</head>
<body>
    <x-navbar/>

    {{-- ENCABEZADO Y MIGAS DE PAN (BREADCRUMBS) --}}
    <div class="bg-light py-3 border-bottom">
        <div class="container">
            {{-- Migas de pan: Ayudan al usuario a saber dónde está parado --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/" class="text-dark text-decoration-none">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Catálogo</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- CONTENEDOR PRINCIPAL DEL CATÁLOGO --}}
    <section class="container py-5">
        
        {{-- AQUÍ ABRIMOS EL FORMULARIO.
             Reemplazamos el <div class="row"> por el <form> pero le dejamos la clase "row g-5" para que mantenga el diseño. --}}
        <form action="{{ route('catalogo') }}" method="GET" id="formFiltros" class="row g-5">
            
            {{-- ==========================================
                 COLUMNA IZQUIERDA: BARRA DE FILTROS 
                 ========================================== --}}
            <aside class="col-12 col-lg-3">
                <h4 class="fw-bold mb-4 text-uppercase">Filtros</h4>
                
                {{-- Bloque de Filtro: Categorías --}}
                <div class="mb-4">
                    <h6 class="fw-bold mb-3">Categorías</h6>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="categorias[]" value="hombre" id="catHombre"
                               {{ in_array('hombre', request('categorias', [])) ? 'checked' : '' }}
                               onchange="document.getElementById('formFiltros').submit();">
                        <label class="form-check-label text-muted" for="catHombre">Hombres</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="categorias[]" value="mujer" id="catMujer"
                               {{ in_array('mujer', request('categorias', [])) ? 'checked' : '' }}
                               onchange="document.getElementById('formFiltros').submit();">
                        <label class="form-check-label text-muted" for="catMujer">Mujeres</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="categorias[]" value="nino" id="catNino"
                               {{ in_array('nino', request('categorias', [])) ? 'checked' : '' }}
                               onchange="document.getElementById('formFiltros').submit();">
                        <label class="form-check-label text-muted" for="catNino">Niños</label>
                    </div>
                    <div class="mb-4 border-top pt-4">
                        <h6 class="fw-bold mb-3">Deporte / Uso</h6>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="deportes[]" value="running" id="depRunning"
                                {{ in_array('running', request('deportes', [])) ? 'checked' : '' }}
                                onchange="document.getElementById('formFiltros').submit();">
                            <label class="form-check-label text-muted" for="depRunning">Running</label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="deportes[]" value="urbano" id="depUrbano"
                                {{ in_array('urbano', request('deportes', [])) ? 'checked' : '' }}
                                onchange="document.getElementById('formFiltros').submit();">
                            <label class="form-check-label text-muted" for="depUrbano">Urbano / Casual</label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="deportes[]" value="entrenamiento" id="depEntrenamiento"
                                {{ in_array('entrenamiento', request('deportes', [])) ? 'checked' : '' }}
                                onchange="document.getElementById('formFiltros').submit();">
                            <label class="form-check-label text-muted" for="depEntrenamiento">Entrenamiento</label>
                        </div>
                    </div>
                </div>

                {{-- Bloque de Filtro: Marcas --}}
                <div class="mb-4 border-top pt-4">
                    <h6 class="fw-bold mb-3">Marcas</h6>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="marcas[]" value="puma" id="marcaPuma"
                               {{ in_array('puma', request('marcas', [])) ? 'checked' : '' }}
                               onchange="document.getElementById('formFiltros').submit();">
                        <label class="form-check-label text-muted" for="marcaPuma">Puma</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="marcas[]" value="topper" id="marcaTopper"
                               {{ in_array('topper', request('marcas', [])) ? 'checked' : '' }}
                               onchange="document.getElementById('formFiltros').submit();">
                        <label class="form-check-label text-muted" for="marcaTopper">Topper</label>
                    </div>
                </div>

                {{-- Botón para móviles (En PC los filtros se aplican solos al hacer clic gracias al onchange) --}}
                <noscript>
                    <button type="submit" class="btn btn-dark w-100 mt-3">Aplicar Filtros</button>
                </noscript>
            </aside>

            {{-- ==========================================
                 COLUMNA DERECHA: GRILLA DE PRODUCTOS 
                 ========================================== --}}
            <main class="col-12 col-lg-9">
                
                {{-- Barra superior de herramientas (Top bar) --}}
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-3 border-bottom">
                    
                    {{-- Mostramos la cantidad real de productos usando Blade --}}
                    <p class="text-muted mb-3 mb-md-0">Mostrando <span class="fw-bold text-dark">{{ $productos->total() }}</span> resultados</p>
                    
                    {{-- Select para ordenar los productos --}}
                    <div class="d-flex align-items-center gap-2">
                        <label for="ordenarPor" class="text-nowrap text-muted small">Ordenar por:</label>
                        <select class="form-select form-select-sm rounded-0 border-dark" name="ordenarPor" id="ordenarPor" onchange="document.getElementById('formFiltros').submit();">
                            <option value="recientes" {{ request('ordenarPor') == 'recientes' ? 'selected' : '' }}>Nuevos Ingresos</option>
                            <option value="menor_precio" {{ request('ordenarPor') == 'menor_precio' ? 'selected' : '' }}>Menor a Mayor Precio</option>
                            <option value="mayor_precio" {{ request('ordenarPor') == 'mayor_precio' ? 'selected' : '' }}>Mayor a Menor Precio</option>
                        </select>
                    </div>
                </div>

                {{-- Grilla de Productos --}}
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    
                    {{-- Usamos el bucle foreach para imprimir los componentes --}}
                    @forelse($productos as $producto)
                        <x-product-card 
                            :marca="$producto->marca" 
                            :nombre="$producto->nombre" 
                            :precio="number_format($producto->precio, 0, ',', '.')" 
                            :imagen="$producto->imagen" 
                        />
                    @empty
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">No se encontraron productos con esos filtros.</p>
                        </div>
                    @endforelse

                </div>

                {{-- PAGINACIÓN BÁSICA DE LARAVEL + BOOTSTRAP --}}
                <div class="mt-5 d-flex justify-content-center">
                    {{ $productos->links() }}
                </div>

            </main>

        {{-- AQUÍ CERRAMOS EL FORMULARIO --}}
        </form>
    </section>

    <x-footer />
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
>>>>>>> Stashed changes
</html>