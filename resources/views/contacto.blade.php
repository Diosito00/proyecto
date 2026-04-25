<!DOCTYPE html>
{{-- <html lang="es">: Define el idioma principal de la página como español. Esencial para SEO y accesibilidad. --}}
<html lang="es">
    <head>
        {{-- <meta charset="UTF-8">: Permite que el navegador lea correctamente la 'ñ' y las tildes. --}}
        <meta charset="UTF-8">
        
        {{-- <meta name="viewport"...>: La regla de oro del diseño responsivo. Adapta la página al ancho de celulares y tablets. --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        {{-- <meta http-equiv="X-UA-Compatible"...>: Fuerza a navegadores antiguos de Microsoft a usar su mejor motor. --}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Contacto | Tillas - Zapatillas Urbanas</title>
        
        {{-- Favicon: El iconito de la pestaña del navegador. --}}
        <link rel="icon" href="{{ asset('imagenes/Logo-blanco.ico') }}" type="image/x-icon">
        
        {{-- Enlaces a tus hojas de estilo (Bootstrap y personal) --}}
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style-quienes.css') }}">
    </head>
    
   {{-- bg-light: Le da un fondo gris muy clarito a toda la página para que las tarjetas blancas resalten más --}}
<body class="bg-light">

    <x-navbar/>

    {{-- position-relative: Permite posicionar elementos absolutos adentro (como la imagen de fondo) --}}
    {{-- bg-dark text-white text-center: Fondo oscuro, texto blanco y centrado --}}
    {{-- py-5 mb-5: Padding (relleno) vertical de nivel 5 y Margen inferior (margin-bottom) de nivel 5 --}}
    {{-- overflow-hidden: Evita que la imagen de fondo se salga del contenedor --}}
    <div class="position-relative bg-dark text-white text-center py-5 mb-5 overflow-hidden">
        
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('{{ asset('imagenes/contacto-hero.jpg') }}') center/cover; opacity: 0.2;"></div>
        
        <div class="container position-relative z-1 py-4">
            {{-- display-4: Tamaño de texto gigante de Bootstrap --}}
            {{-- text-uppercase: Convierte todo a mayúsculas --}}
            <h1 class="display-4 fw-bold mb-3 text-uppercase tracking-wide">Contacto</h1>
            <p class="lead mb-0 mx-auto" style="max-width: 600px;">
                ¿Tenés alguna duda o consulta sobre tu pedido? Estamos acá para ayudarte.
            </p>
        </div>
    </div>

    <div class="container pb-5 mb-5">
        
        {{-- row g-5: Fila de grilla con un "gap" (espacio entre columnas) grande de nivel 5 --}}
        <div class="row g-5">
            
            {{-- col-lg-7: Ocupa 7 de 12 columnas en pantallas grandes (dejando 5 para la información) --}}
            <div class="col-lg-7">
                {{-- p-4 p-md-5: Padding normal en celulares, y padding más grande en PC --}}
                {{-- border-0 shadow-sm: Sin borde pero con una sombra suave para darle elegancia --}}
                <div class="p-4 p-md-5 bg-white shadow-sm border-0 rounded h-100">
                    <h4 class="fw-bold mb-4">Envianos un mensaje</h4>

                    @if(session('success'))
                        <div class="alert alert-success d-flex align-items-center mb-4 border-0 shadow-sm" role="alert">
                            <i class="bi bi-check-circle-fill fs-4 me-3"></i>
                            <div>
                                Hola <strong>{{ session('nombre') }}</strong>, recibimos tu mensaje. 
                                Un asesor de Tillas te escribirá pronto a <strong>{{ session('email') }}</strong>. ¡Gracias!
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contacto.enviar') }}" method="POST">
                        {{-- @csrf: Token de seguridad obligatorio en Laravel para evitar hackeos (Cross-Site Request Forgery) --}}
                        @csrf 
                        
                        <div class="form-floating mb-3">
                            {{-- bg-light border-0: Input gris sin bordes duros --}}
                            <input type="text" name="nombre" class="form-control bg-light border-0" id="nombreInput" placeholder="Nombre completo" required>
                            <label for="nombreInput" class="text-muted">Nombre completo</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control bg-light border-0" id="emailInput" placeholder="Email" required>
                            <label for="emailInput" class="text-muted">Correo electrónico</label>
                        </div>
                        
                        <div class="form-floating mb-4">
                            <textarea name="mensaje" class="form-control bg-light border-0" id="mensajeInput" placeholder="Escribí tu mensaje" style="height: 150px" required></textarea>
                            <label for="mensajeInput" class="text-muted">¿En qué podemos ayudarte?</label>
                        </div>
                        
                        <button type="submit" class="btn btn-dark btn-lg w-100 rounded-0 text-uppercase fw-bold tracking-wide py-3">
                            Enviar Mensaje <i class="bi bi-send ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>

            {{-- col-lg-5: Ocupa las 5 columnas restantes en pantallas grandes --}}
            <div class="col-lg-5">
                {{-- d-flex flex-column: Convierte la tarjeta en una columna flexible para empujar el mapa al fondo --}}
                <div class="bg-dark text-white p-4 p-md-5 rounded shadow-lg h-100 d-flex flex-column">
                    <h4 class="fw-bold mb-4 text-uppercase tracking-wide">Información</h4>
                    
                    <ul class="list-unstyled mb-4 fs-5">
                        <li class="mb-4 d-flex align-items-center">
                            <i class="bi bi-geo-alt fs-3 me-3 text-secondary"></i> 
                            <span>126 Calle Y,<br>Corrientes, Argentina</span>
                        </li>
                        <li class="mb-4 d-flex align-items-center">
                            <i class="bi bi-envelope fs-3 me-3 text-secondary"></i> 
                            <a href="mailto:info@tillas.com" class="text-white text-decoration-none">info@tillas.com</a>
                        </li>
                        <li class="mb-4 d-flex align-items-center">
                            <i class="bi bi-phone fs-3 me-3 text-secondary"></i> 
                            <span>+54 379 4777777</span>
                        </li>
                        <li class="mb-4 d-flex align-items-center">
                            <i class="bi bi-clock fs-3 me-3 text-secondary"></i> 
                            <span class="fs-6 text-light">Lunes a Viernes: 9:00 a 18:00<br>Sábados: 9:00 a 13:00</span>
                        </li>
                    </ul>

                    {{-- border-top border-secondary pt-4: Línea separadora gris con padding superior --}}
                    <div class="d-flex gap-3 mb-4 border-top border-secondary pt-4">
                        <a href="#" class="text-white text-decoration-none"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-white text-decoration-none"><i class="bi bi-tiktok fs-4"></i></a>
                        <a href="#" class="text-white text-decoration-none"><i class="bi bi-whatsapp fs-4"></i></a>
                    </div>

                    <div class="mt-auto">
                        <div class="rounded overflow-hidden shadow-sm" style="height: 200px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113271.85966606346!2d-58.910363945934524!3d-27.486255740441585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b79d5bed36b%3A0xfa999f1ef3b40646!2sCorrientes%2C%20Capital%2C%20Corrientes!5e0!3m2!1ses-419!2sar!4v1714080000000!5m2!1ses-419!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <x-footer/>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>