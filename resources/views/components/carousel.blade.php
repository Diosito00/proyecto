<!DOCTYPE html>
{{-- <html lang="es">: Define el idioma principal de la página como español. Esencial para los motores de búsqueda y herramientas de accesibilidad. --}}
<html lang="es">
    <head>
        {{-- <meta charset="UTF-8">: Permite que el navegador lea correctamente caracteres especiales como la 'ñ' y las tildes. --}}
        <meta charset="UTF-8">
        
        {{-- <meta name="viewport"...>: La regla de oro del diseño responsivo. Obliga a la página a adaptarse al ancho de la pantalla del celular o tablet del usuario. --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        {{-- <meta http-equiv="X-UA-Compatible"...>: Le dice a navegadores antiguos de Microsoft que usen su mejor motor de renderizado. --}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        {{-- Favicon: El iconito que aparece en la pestaña del navegador. --}}
        <link rel="icon" href="{{ asset('imagenes/Logo-blanco.png') }}" type="image/x-icon">
        
        {{-- Enlaces a tus hojas de estilo (CSS) --}}
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="css/style-carrusel.css">
    </head>

    {{-- CONTENEDOR PRINCIPAL DEL CARRUSEL
         id="carruselInicio": Un identificador único. Las flechas y los puntitos de abajo usan este ID para saber a quién controlar.
         carousel: Inicializa el componente en Bootstrap.
         slide: Agrega el efecto de transición suave al cambiar de foto. --}}
    <div id="carruselInicio" class="carousel slide">
        
        {{-- INDICADORES: Los puntitos en la parte inferior para saltar entre imágenes. --}}
        <div class="carousel-indicators">
            {{-- data-bs-target apunta al ID principal. data-bs-slide-to indica el índice (empieza en 0).
                 La clase 'active' marca cuál es el puntito encendido al inicio. --}}
            <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        {{-- CAJA INTERNA: Contiene todas las diapositivas (slides). --}}
        <div class="carousel-inner">
            
            {{-- SLIDE 1: PUMA OTOÑO-INVIERNO --}}
            {{-- carousel-item: Define una diapositiva. 
                 active: Es OBLIGATORIO que el primer elemento lo tenga, o el carrusel no se verá.
                 position-relative: Permite colocar la capa oscura y el texto flotando por encima de la imagen. --}}
            <div class="carousel-item active position-relative">
                
                {{-- d-block w-100: Asegura que la imagen ocupe todo el ancho sin márgenes raros. --}}
                <img src="{{ asset('imagenes/slide1.jpg') }}" class="d-block w-100" alt="Puma Otoño Invierno">
                
                {{-- CAPA OSCURA (Overlay): Se posiciona sobre la imagen (top-0 start-0 w-100 h-100) con un fondo negro transparente (rgba) para que el texto blanco se lea perfecto. --}}
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.3);"></div>

                {{-- TEXTOS Y BOTONES (CAPTION)
                     text-start: Alinea el texto a la izquierda.
                     z-2: Asegura que el texto quede "por encima" de la capa oscura.
                     (Nota: Aquí eliminamos 'd-none d-md-block' para que este cuadro SÍ se vea en los celulares). --}}
                <div class="carousel-caption text-start mb-md-5 z-2">
                    <h6 class="text-uppercase tracking-wide mb-2 text-light">Nueva Temporada</h6>
                    <h2 class="display-4 fw-bold mb-3 text-white">PUMA OTOÑO-INVIERNO</h2>
                    <p class="fs-5 text-white mb-4">No dejes que el clima te detenga. Descubrí lo último en tecnología y confort para tu entrenamiento.</p>
                    <a href="{{ route('catalogo', ['marcas' => ['puma']]) }}" class="btn btn-light rounded-0 px-4 py-2 fw-bold text-uppercase">Ver Colección Puma</a>
                </div>
            </div>
            
            {{-- SLIDE 2: SEMANA TOPPER --}}
            <div class="carousel-item position-relative">
                <img src="{{ asset('imagenes/slide2.jpg') }}" class="d-block w-100" alt="Semana Topper">
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.3);"></div>
        
                <div class="carousel-caption text-start mb-md-5 z-2">
                    {{-- text-warning: Pinta este texto pequeño de color amarillo/naranja. --}}
                    <h6 class="text-uppercase tracking-wide mb-2 text-warning">Oportunidad Única</h6>
                    <h2 class="display-4 fw-bold mb-3 text-white">SEMANA TOPPER</h2>
                    <p class="fs-5 text-white mb-4">Renová tus Tillas hoy. Aprovechá hasta 6 cuotas sin interés en modelos seleccionados.</p>
                    
                    {{-- btn-warning: Crea un botón amarillo que llama a la acción para las cuotas. --}}
                    <a href="{{ route('catalogo', ['marcas' => ['topper']]) }}" class="btn btn-warning rounded-0 px-4 py-2 fw-bold text-uppercase text-dark">Aprovechar Cuotas</a>
                </div>
            </div>
            
            {{-- SLIDE 3: RUNNING Y VELOCIDAD --}}
            <div class="carousel-item position-relative">
                <img src="{{ asset('imagenes/slide3.jpg') }}" class="d-block w-100" alt="Colección Running Tillas">
                
                {{-- Capa ligeramente menos oscura (0.25) para no apagar tanto los azules de la foto. --}}
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.25);"></div>
                
                <div class="carousel-caption text-start mb-md-5 z-2">
                    {{-- text-info: Pinta este texto de celeste, combinando con el agua de la imagen. --}}
                    <h6 class="text-uppercase tracking-wide mb-2 text-info">Colección Running</h6>
                    <h2 class="display-4 fw-bold mb-3 text-white">ENCONTRÁ TU RITMO</h2>
                    <p class="fs-5 text-white mb-4">Diseño aerodinámico y tracción perfecta. El calzado que necesitás para superar tu mejor marca.</p>
                    
                    {{-- btn-outline-light: Un botón elegante transparente con borde blanco. --}}
                    <a href="{{ route('catalogo', ['deportes' => ['running']]) }}" class="btn btn-outline-light rounded-0 px-4 py-2 fw-bold text-uppercase">Ver Zapatillas Running</a>
                </div>
            </div>
        </div>
        
        {{-- FLECHAS DE NAVEGACIÓN (Controles laterales) --}}
        
        {{-- Flecha Izquierda (Anterior). data-bs-slide="prev" ejecuta la acción de retroceder. --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselInicio" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        
        {{-- Flecha Derecha (Siguiente). data-bs-slide="next" ejecuta la acción de avanzar. --}}
        <button class="carousel-control-next" type="button" data-bs-target="#carruselInicio" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</html>