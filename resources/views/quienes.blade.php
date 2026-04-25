<!DOCTYPE html>
{{-- <html lang="es">: Le indica a los navegadores y motores de búsqueda (como Google) que el contenido está en español. --}}
<html lang="es">
<head>
    {{-- <meta charset="UTF-8">: Fundamental para que los acentos y la letra 'ñ' se vean correctamente en pantalla. --}}
    <meta charset="UTF-8">
    
    {{-- <meta name="viewport"...>: Etiqueta obligatoria para el diseño web responsivo. Hace que la página no se vea minúscula en los celulares. --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Quiénes Somos | Tillas - Tienda de Zapatillas Urbanas</title>
    
    {{-- Favicon: El ícono que aparece en la pestaña del navegador --}}
    <link rel="icon" href="{{ asset('imagenes/Logo-blanco.ico') }}" type="image/x-icon">
    
    {{-- Importación del framework CSS Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    
    {{-- Importación de tu CSS personalizado.
         El '?v={{ time() }}' es la técnica de "Cache Busting" que armamos para obligar 
         al navegador a descargar siempre la versión más reciente del archivo CSS. --}}
    <link rel="stylesheet" href="{{ asset('css/style-quienes.css') }}?v={{ time() }}">
</head>

<body>

    <x-navbar/>

    {{-- position-relative: Permite que elementos adentro usen 'position-absolute' sin escaparse de esta caja. --}}
    {{-- bg-dark text-white text-center: Fondo oscuro, texto blanco y alineado al centro. --}}
    {{-- py-5 mb-5: Padding (relleno) vertical grande y Margen inferior para separarlo del contenido de abajo. --}}
    {{-- overflow-hidden: Esconde cualquier cosa que sobresalga de los límites de este contenedor. --}}
    <div class="position-relative bg-dark text-white text-center py-5 mb-5 overflow-hidden">
        
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('{{ asset('imagenes/hero-quienes.jpg') }}') center/cover; opacity: 0.2;"></div>
        
        <div class="container position-relative z-1 py-5">
            {{-- display-4: Tipografía de título muy grande y moderna --}}
            {{-- tracking-wide: Clase de tu CSS personalizado para separar las letras --}}
            <h1 class="display-4 fw-bold mb-3 text-uppercase tracking-wide">Nuestra Esencia</h1>
            
            {{-- mx-auto: Centra horizontalmente este párrafo --}}
            {{-- max-width: 600px: Evita que el texto sea una línea larguísima e ilegible en monitores anchos --}}
            <p class="lead mb-0 mx-auto" style="max-width: 600px;">
                En <strong>Tillas</strong> nos dedicamos a ofrecer zapatillas que combinan estilo urbano, comodidad y calidad, pensadas para acompañarte en cada paso.
            </p>
        </div>
    </div>

    <div class="container py-5">

        {{-- row g-4: Fila con "gap" (espacio) nivel 4 entre sus columnas --}}
        {{-- border-bottom pb-5: Agrega una línea gris divisoria abajo y relleno para que no quede pegada al siguiente bloque --}}
        <div class="row g-4 text-center mb-5 pb-5 border-bottom">

            <div class="col-md-4">
                {{-- p-5: Mucho relleno interno para que respire --}}
                {{-- h-100: Obliga a que las 3 tarjetas midan exactamente lo mismo de alto, sin importar si una tiene más texto --}}
                {{-- tarjeta-valor: Clase de tu CSS que le da el efecto de saltar (hover) --}}
                <div class="p-5 bg-light border-0 rounded shadow-sm h-100 tarjeta-valor">
                    <i class="bi bi-bullseye display-4 mb-4 d-block text-dark"></i>
                    <h4 class="fw-bold text-uppercase mb-3">Misión</h4>
                    <p class="text-muted mb-0">
                        Brindar productos de alta calidad que se adapten a las tendencias actuales, garantizando confort y durabilidad en cada paso.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-5 bg-light border-0 rounded shadow-sm h-100 tarjeta-valor">
                    <i class="bi bi-eye display-4 mb-4 d-block text-dark"></i>
                    <h4 class="fw-bold text-uppercase mb-3">Visión</h4>
                    <p class="text-muted mb-0">
                        Ser reconocidos como una de las principales tiendas de zapatillas urbanas a nivel nacional, destacándonos por nuestro servicio y calidad.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-5 bg-light border-0 rounded shadow-sm h-100 tarjeta-valor">
                    <i class="bi bi-heart display-4 mb-4 d-block text-dark"></i>
                    <h4 class="fw-bold text-uppercase mb-3">Valores</h4>
                    <p class="text-muted mb-0">
                        Compromiso con el cliente, innovación constante, responsabilidad y pasión por la moda urbana.
                    </p>
                </div>
            </div>

        </div>

        {{-- align-items-center: Centra verticalmente la columna de texto con la columna de imagen --}}
        <div class="row align-items-center py-4">
            
            {{-- pe-md-5: (Padding End) Le da un margen derecho grande en PC para que el texto no toque la foto --}}
            <div class="col-md-6 mb-4 mb-md-0 pe-md-5">
                
                <img src="{{ asset('imagenes/logo-negro.png') }}" alt="Tillas Símbolo" width="50" class="mb-3 d-none d-md-block">
                
                <div class="text-center d-md-none mb-3">
                    <img src="{{ asset('imagenes/logo-negro.png') }}" alt="Tillas Símbolo" width="50">
                </div>

                <h6 class="text-uppercase tracking-wide text-muted mb-2">De donde venimos</h6>
                <h3 class="fw-bold mb-4 display-6">Nuestra Historia</h3>

                {{-- fs-5: Agranda sutilmente el primer párrafo para usarlo como introducción --}}
                <p class="text-muted fs-5">
                    Tillas nace como un emprendimiento enfocado en brindar una experiencia de compra simple, segura y moderna. 
                </p>
                <p class="text-muted">
                    Desde nuestros inicios, buscamos acercar a nuestros clientes productos de calidad que reflejen su estilo personal. No se trata solo de calzado, se trata de la actitud con la que pisás la calle.
                </p>
                <p class="text-muted">
                    Con el paso del tiempo, fuimos creciendo y ampliando nuestro catálogo, incorporando nuevas marcas y tendencias del mundo urbano y deportivo para ofrecerte siempre lo mejor.
                </p>
                
                <p class="text-muted mb-0">
                    Nacimos en Corrientes con una idea clara: acercar a nuestros clientes productos de calidad... Hoy, enviamos a todo el país manteniendo la misma atención personalizada del primer día.
                </p>    
            </div>

            <div class="col-md-6">
                <div class="position-relative">
                    <img src="{{ asset('imagenes/historia-tillas.jpg') }}" class="img-fluid rounded shadow-lg" alt="Historia de Tillas">
                    
                    {{-- position-absolute bottom-0 start-0: Lo pega en la esquina inferior izquierda de la foto --}}
                    {{-- d-none d-lg-block: Oculta la insignia en celulares para que no tape demasiado la foto, solo se ve en PC grandes --}}
                    <div class="position-absolute bottom-0 start-0 bg-dark text-white p-3 m-3 rounded shadow d-none d-lg-block">
                        <p class="mb-0 fw-bold text-uppercase small">Pisando fuerte<br>desde el día 1</p>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- mt-5 pt-5: Mucho espacio separador por arriba --}}
        {{-- border-top: Línea fina divisoria --}}
        <div class="row mt-5 pt-5 text-center border-top">
            <div class="col-12">
                <h4 class="fw-bold mb-3">¿Listo para encontrar tu estilo?</h4>
                <p class="text-muted mb-4">Ya conocés nuestra historia, ahora te invitamos a conocer nuestros productos.</p>
                
                <a href="{{ route('catalogo') }}" class="btn btn-dark btn-lg rounded-0 px-5 fw-bold text-uppercase">
                    Ver el Catálogo
                </a>
            </div>
        </div>

    </div> <x-footer/>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>