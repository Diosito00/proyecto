<!DOCTYPE html>
<!-- lang="es": indica que el contenido está en español -->
<html lang="es">
<head>
    <!-- Permite mostrar correctamente acentos y caracteres especiales -->
    <meta charset="UTF-8">
    <!-- Hace que la página sea responsive (adaptable a celulares) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la pestaña del navegador -->
    <title>Privacidad | Tillas - Zapatillas Urbanas</title>
    <!-- Ícono de la pestaña -->
    <link rel="icon" href="{{ asset('imagenes/Logo-blanco.ico') }}" type="image/x-icon">
    <!-- Bootstrap: framework para estilos y diseño -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <!-- Componente Blade: barra de navegación reutilizable -->
    <x-navbar/>
    <!-- container: centra el contenido -->
    <!-- py-5: padding vertical (espacio arriba y abajo) -->
    <div class="container py-5">

        <!-- h2: título principal fw-bold: negrita  text-center: centrado mb-3: margen inferior -->
        <h2 class="fw-bold text-center mb-3">Política de Privacidad</h2>
        <!-- p: párrafo text-muted: color gris mb-5: margen inferior grande -->
        <p class="text-center text-muted mb-5">
            En Tillas respetamos y protegemos la privacidad de nuestros usuarios.
        </p>

        <!-- p-4: padding interno shadow-sm: sombra suave  border rounded: bordes redondeados text-muted: texto gris para todo el contenido -->
        <div class="p-4 shadow-sm border rounded text-muted">
            <!-- h5: subtítulo fw-bold: negrita text-dark: color oscuro para destacar -->
            <h5 class="fw-bold text-dark">Información recopilada</h5>
            <p>
                Podemos recopilar datos personales como nombre, correo electrónico y teléfono
                cuando el usuario completa formularios dentro del sitio.
            </p>
            <!-- mt-4: margen superior para separar secciones -->
            <h5 class="fw-bold text-dark mt-4">Uso de la información</h5>
            <p>
                La información se utiliza exclusivamente para responder consultas,
                mejorar la experiencia del usuario y brindar un mejor servicio.
            </p>
            <!-- Subtítulo: Protección de datos fw-bold: negrita text-dark: color oscuro para destacar mt-4: margen superior (separación entre secciones) -->
            <h5 class="fw-bold text-dark mt-4">Protección de datos</h5>
            <p>
                Implementamos medidas de seguridad para proteger la información personal
                contra accesos no autorizados.
            </p>
            <!-- Subtítulo: compartir informacion fw-bold: negrita text-dark: color oscuro para destacar mt-4: margen superior (separación entre secciones) -->
            <h5 class="fw-bold text-dark mt-4">Compartir información</h5>
            <p>
                Tillas no comparte datos personales con terceros,
                salvo en casos requeridos por la ley.
            </p>

            <h5 class="fw-bold text-dark mt-4">Uso de cookies</h5>
            <p>
                Este sitio puede utilizar cookies para mejorar la navegación del usuario.
            </p>

            <h5 class="fw-bold text-dark mt-4">Derechos del usuario</h5>
            <p>
                El usuario puede solicitar la modificación o eliminación de sus datos personales
                en cualquier momento.
            </p>

            <h5 class="fw-bold text-dark mt-4">Cambios en la política</h5>
            <p>
                Nos reservamos el derecho de actualizar esta política en cualquier momento.
            </p>

        </div>

    </div>
    <!-- Componente Blade -->
    <!-- incluye el footer reutilizable del sitio -->
    <x-footer/>
    <!-- Script JS de Bootstrap -->
    <!-- permite funcionalidades interactivas (dropdowns, modales, etc) -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>