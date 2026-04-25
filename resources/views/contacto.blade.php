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
        <title>Tillas - Contacto</title>
        {{-- Enlaces a tus hojas de estilo (CSS) --}}
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="css/style-carrusel.css">
    </head>
    <body>
    <!-- Barra de navegación -->
    <x-navbar/>

    <!-- Contenedor centrado con espacio vertical -->
    <div class="container py-5">

        <h2 class="fw-bold text-center mb-4">Contacto</h2>

        <p class="text-center text-muted mb-5">
            Si tenés alguna consulta, podés comunicarte con nosotros a través de los siguientes medios.
        </p>

        <!-- Fila con espacio entre columnas -->
        <div class="row g-4">
            <div class="col-md-5">
                <!-- Tarjeta con padding, borde y sombra -->
                <div class="p-4 shadow-sm border rounded">
                    <h5 class="fw-bold mb-3">Información de contacto</h5>
                    <p><i class="bi bi-building me-2"></i>Tillas, 126 Calle Y, Corrientes, Argentina</p>
                    <p><i class="bi bi-envelope me-2"></i>info@tillas.com</p>
                    <p><i class="bi bi-phone me-2"></i>+54 379 4777777</p>
                    <p><i class="bi bi-geo-alt me-2"></i>Corrientes, Argentina</p>
                    
                        <p class="text-muted mt-3">
                        Nuestro equipo responderá a la brevedad todas tus consultas.
                        </p>

                </div>

            </div>

            <div class="col-md-7">
                <div class="p-4 shadow-sm border rounded">
                    <h5 class="fw-bold mb-3">Enviar mensaje</h5>

                        <!-- Si hay mensaje de éxito en sesión -->
                        @if(session('success'))
                        <!-- Alerta verde -->
                        <div class="alert alert-success text-center">
                            <p class="lead mb-0">
                                Hola <strong>{{ session('nombre') }}</strong>, qué bueno recibir tu mensaje.
                                Un miembro del equipo se pondrá en contacto con vos al correo:
                                <strong>{{ session('email') }}</strong>.
                                ¡Muchas gracias!
                            </p>
                        </div>
                        @endif

                        <!-- Formulario que envía datos al backend -->
                        <form action="{{ route('contacto.enviar') }}" method="POST">
                            <!-- Protección de seguridad -->
                            @csrf 
                            <!-- Campo nombre -->
                            <input type="text" name="nombre" class="form-control mb-3" placeholder="Nombre completo">
                            <!-- Campo email obligatorio -->
                            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                            <!-- Campo mensaje -->
                            <textarea name="mensaje" class="form-control mb-3" placeholder="Escribí tu mensaje" required></textarea>
                            <!-- Botón de envío -->
                            <button class="btn btn-dark w-100">Enviar</button>
                        </form>
                    
                </div>

            </div>

        </div>

    </div>

    <x-footer/>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    </body>
</html>