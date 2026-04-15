<!DOCTYPE html>
{{-- <html lang="es">: Define que el idioma principal del documento es español. Ayuda al SEO y a los traductores automáticos. --}}
<html lang="es">
    <head>
        {{-- <meta charset="UTF-8">: Le dice al navegador que use la codificación de caracteres UTF-8, lo cual es vital para que las tildes (á, é) y la letra 'ñ' se vean correctamente. --}}
        <meta charset="UTF-8">
        
        {{-- <meta name="viewport"...>: Esencial para el diseño responsivo. Hace que la página web adapte su ancho al tamaño de la pantalla del dispositivo (celular, tablet, etc.). --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        {{-- <meta http-equiv="X-UA-Compatible"...>: Fuerza a Internet Explorer a usar su motor de renderizado más reciente (Edge). --}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="icon">: Esta etiqueta define el "Favicon", que es el pequeño icono que aparece en la pestaña del navegador (junto al título de la página). --}}
        <link rel="icon" href="{{ asset('imagenes/Logo-blanco.png') }}" type="image/x-icon">
        
        {{-- Archivos CSS de Bootstrap y tu estilo personalizado para el carrusel --}}
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="css/style-carrusel.css">
    </head>

    {{-- 
        Atributo id="carruselInicio": Es fundamental que este ID sea único, ya que los botones de "siguiente" y "anterior" lo usarán para saber a qué carrusel controlar.
        Clases de Bootstrap:
        - carousel: Le dice a Bootstrap que este contenedor es un carrusel.
        - slide: Agrega la animación de deslizamiento suave (si la quitas, las imágenes cambiarán de golpe).
    --}}
    <div id="carruselInicio" class="carousel slide">
        
        {{-- carousel-indicators: Son las rayitas o puntitos de navegación que aparecen en la parte inferior del carrusel. --}}
        <div class="carousel-indicators">
            {{-- data-bs-target: Apunta al ID de nuestro carrusel (#carruselInicio).
                data-bs-slide-to: Indica a qué número de imagen debe saltar al hacer clic (empieza a contar desde 0).
                class="active": Marca este botón como el seleccionado por defecto al cargar la página. --}}
            <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        {{-- carousel-inner: Es el contenedor principal "interior" que envuelve a todas las imágenes. Se encarga de ocultar las imágenes que no están activas. --}}
        <div class="carousel-inner">
            
            {{-- carousel-item: Define una "diapositiva" individual.
                active: ¡MUY IMPORTANTE! Al menos un item debe tener esta clase, de lo contrario el carrusel entero será invisible al cargar la página. --}}
            <div class="carousel-item active position-relative">
                {{-- d-block: (display: block) Evita comportamientos raros de espaciado que tienen las imágenes por defecto en HTML.
                    w-100: (width: 100%) Fuerza a la imagen a ocupar todo el ancho disponible del contenedor. --}}
                <img src="{{ asset('imagenes/slide1.jpg') }}" class="d-block w-100" alt="Puma Otoño Invierno">
                {{-- Capa oscura opcional para que el texto blanco resalte mejor sobre la foto del parque --}}
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.3);"></div>

                <div class="carousel-caption d-none d-md-block text-start mb-5 z-2">
                    <h6 class="text-uppercase tracking-wide mb-2 text-light">Nueva Temporada</h6>
                    <h2 class="display-4 fw-bold mb-3 text-white">PUMA OTOÑO-INVIERNO</h2>
                    <p class="fs-5 text-white mb-4">No dejes que el clima te detenga. Descubrí lo último en tecnología y confort para tu entrenamiento.</p>
                    <a href="/puma" class="btn btn-light rounded-0 px-4 py-2 fw-bold text-uppercase">Ver Colección Puma</a>
                </div>
            </div>
            
            <div class="carousel-item position-relative">
                <img src="{{ asset('imagenes/slide2.jpg') }}" class="d-block w-100" alt="Semana Topper">
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.3);"></div>
        
                <div class="carousel-caption d-none d-md-block text-start mb-5 z-2">
                    <h6 class="text-uppercase tracking-wide mb-2 text-warning">Oportunidad Única</h6>
                    <h2 class="display-4 fw-bold mb-3 text-white">SEMANA TOPPER</h2>
                    <p class="fs-5 text-white mb-4">Renová tus Tillas hoy. Aprovechá hasta 6 cuotas sin interés en modelos seleccionados.</p>
                    <a href="/topper" class="btn btn-warning rounded-0 px-4 py-2 fw-bold text-uppercase text-dark">Aprovechar Cuotas</a>
                </div>
            </div>
            
            {{-- SLIDE 3: ENFOQUE EN VELOCIDAD Y MOTIVACIÓN (OPCIÓN B) --}}
            <div class="carousel-item position-relative">
                {{-- Imagen de fondo generada para el slide 3 --}}
                <img src="{{ asset('imagenes/slide3.jpg') }}" class="d-block w-100" alt="Colección Running Tillas">
                
                {{-- Capa de oscurecimiento sutil: Ayuda a que el texto blanco resalte sobre los reflejos del agua y el cielo --}}
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.25);"></div>
                
                {{-- Contenido del Slide: Alineado a la izquierda (text-start) para aprovechar el espacio vacío en la foto --}}
                <div class="carousel-caption d-none d-md-block text-start mb-5 z-2">
                    {{-- Etiqueta pequeña en color celeste (text-info) para combinar con los tonos del agua --}}
                    <h6 class="text-uppercase tracking-wide mb-2 text-info">Colección Running</h6>
                    
                    {{-- Título con tipografía de gran tamaño y negrita --}}
                    <h2 class="display-4 fw-bold mb-3 text-white">ENCONTRÁ TU RITMO</h2>
                    
                    {{-- Descripción persuasiva --}}
                    <p class="fs-5 text-white mb-4">Diseño aerodinámico y tracción perfecta. El calzado que necesitás para superar tu mejor marca.</p>
                    
                    {{-- Botón con borde blanco, elegante y minimalista --}}
                    <a href="/running" class="btn btn-outline-light rounded-0 px-4 py-2 fw-bold text-uppercase">Ver Zapatillas Running</a>
                </div>
            </div>
        </div>
        
        {{-- Controles de navegación (Las flechas de los costados) --}}
        
        {{-- Botón "Anterior" (Izquierda)
            data-bs-slide="prev": Le dice al JavaScript de Bootstrap que al hacer clic retroceda una imagen. --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselInicio" data-bs-slide="prev">
            {{-- carousel-control-prev-icon: Inserta automáticamente el ícono de la flecha izquierda. --}}
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            
            {{-- visually-hidden: Oculta la palabra "Previous" de la pantalla, pero la deja disponible para que los lectores de pantalla de las personas no videntes sepan para qué es el botón. --}}
            <span class="visually-hidden">Previous</span>
        </button>
        
        {{-- Botón "Siguiente" (Derecha)
            data-bs-slide="next": Avanza a la siguiente imagen. --}}
        <button class="carousel-control-next" type="button" data-bs-target="#carruselInicio" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</html>