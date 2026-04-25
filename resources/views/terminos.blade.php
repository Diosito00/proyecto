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
        <title>Tillas - Terminos de uso</title>
        {{-- Enlaces a tus hojas de estilo (CSS) --}}
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="css/style-carrusel.css">
    </head>
    <body>

    <x-navbar/>

    <div class="container py-5">

        <h2 class="fw-bold text-center mb-3">Términos y Usos</h2>

        <p class="text-center text-muted mb-5">
        Al acceder y utilizar este sitio web, el usuario acepta los presentes términos y condiciones.
        </p>

        <div class="p-4 shadow-sm border rounded text-muted">
            <h5 class="fw-bold text-dark">Uso del sitio</h5>
            <p>
                El usuario se compromete a utilizar el sitio de manera responsable, respetando las leyes vigentes.
                Queda prohibido el uso indebido del contenido, así como cualquier acción que pueda afectar el funcionamiento del sitio.
            </p>

            <h5 class="fw-bold text-dark mt-4">Registro y datos</h5>
                <p>
                    En caso de registrarse, el usuario deberá proporcionar información veraz y actualizada.
                    Tillas no se responsabiliza por datos incorrectos ingresados por el usuario.
                </p>

            <h5 class="fw-bold text-dark mt-4">Productos</h5>
                <p>
                    Los productos publicados están sujetos a disponibilidad de stock.
                    Las imágenes son ilustrativas y pueden presentar diferencias con el producto final.
                </p>
            
            <h5 class="fw-bold text-dark mt-4">Precios</h5>
                <p>
                    Todos los precios están expresados en moneda local y pueden ser modificados sin previo aviso.
                </p>
            
            <h5 class="fw-bold text-dark mt-4">Compras y pagos</h5>
                <p>
                    Las compras se procesan una vez confirmado el pago.
                    Tillas ofrece diferentes medios de pago para facilitar la operación.
                </p>
            
            <h5 class="fw-bold text-dark mt-4">Envíos</h5>
                <p>
                    Los envíos se realizan a todo el territorio nacional.
                    Los tiempos de entrega son estimados y pueden variar según la ubicación del cliente.
                </p>
            
            <h5 class="fw-bold text-dark mt-4">Cambios y devoluciones</h5>
                <p>
                    El cliente podrá solicitar cambios dentro de los 30 días posteriores a la compra.
                    El producto deberá encontrarse en condiciones originales.
                </p>
            
            <h5 class="fw-bold text-dark mt-4">Responsabilidad</h5>
                <p>
                    Tillas no se hace responsable por daños derivados del uso incorrecto de los productos adquiridos.
                </p>

            <h5 class="fw-bold text-dark mt-4">Modificaciones</h5>
                <p>
                    Nos reservamos el derecho de modificar estos términos en cualquier momento,
                    siendo responsabilidad del usuario revisarlos periódicamente.
                </p>

        </div>
    </div>

    <x-footer/>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    </body>
</html>