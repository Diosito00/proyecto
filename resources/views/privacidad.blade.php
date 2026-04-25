<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacidad | Tillas - Zapatillas Urbanas</title>
    <link rel="icon" href="{{ asset('imagenes/Logo-blanco.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>

    <x-navbar/>
    <div class="container py-5">

        <h2 class="fw-bold text-center mb-3">Política de Privacidad</h2>

        <p class="text-center text-muted mb-5">
            En Tillas respetamos y protegemos la privacidad de nuestros usuarios.
        </p>

        <div class="p-4 shadow-sm border rounded text-muted">

            <h5 class="fw-bold text-dark">Información recopilada</h5>
            <p>
                Podemos recopilar datos personales como nombre, correo electrónico y teléfono
                cuando el usuario completa formularios dentro del sitio.
            </p>

            <h5 class="fw-bold text-dark mt-4">Uso de la información</h5>
            <p>
                La información se utiliza exclusivamente para responder consultas,
                mejorar la experiencia del usuario y brindar un mejor servicio.
            </p>

            <h5 class="fw-bold text-dark mt-4">Protección de datos</h5>
            <p>
                Implementamos medidas de seguridad para proteger la información personal
                contra accesos no autorizados.
            </p>

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

    <x-footer/>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>