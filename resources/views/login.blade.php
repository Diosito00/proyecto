<!DOCTYPE html>
{{-- lang="es": Define el idioma principal como español. Importante para SEO y accesibilidad. --}}
<html lang="es">
<head>
    {{-- Permite mostrar correctamente caracteres especiales como tildes (á, é) y la ñ. --}}
    <meta charset="UTF-8">
    {{-- Hace que la página sea responsive (se adapta a celulares, tablets y PC). --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Título que aparece en la pestaña del navegador. --}}
    <title>Login | Tillas</title>
    {{-- Favicon: ícono que aparece en la pestaña del navegador. --}}
    <link rel="icon" href="{{ asset('imagenes/Logo-blanco.ico') }}" type="image/x-icon">

    {{-- BOOTSTRAP CSS --}}
    {{-- Framework de estilos que facilita el diseño (grillas, botones, formularios, etc). --}}
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    {{-- BOOTSTRAP ICONS --}}
    {{-- Librería de íconos (persona, login, etc). --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    {{-- CSS PROPIO --}}
    {{-- Hoja de estilos personalizada para el diseño del login. --}}
    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}">
</head>

{{-- body-login: clase personalizada para fondo/estilos d-flex: activa flexbox align-items-center: centra verticalmente justify-content-center: centra horizontalmente
Resultado: el login queda centrado en toda la pantalla --}}
<body class="body-login d-flex align-items-center justify-content-center">
    {{-- TARJETA DE LOGIN --}}
    {{-- login-card: estilos personalizados (padding, bordes, etc)
    shadow: agrega sombra
    text-center: centra todo el contenido --}}
    <div class="login-card shadow text-center">

        {{-- ÍCONO PRINCIPAL --}}
        {{-- Ícono de usuario (Bootstrap Icons)
        mb-3: margen inferior para separar del título --}}
        <i class="bi bi-person-circle login-icon mb-3"></i>

        {{-- TÍTULO --}}
        {{-- fw-bold: texto en negrita
        mb-4: margen inferior para separar del formulario --}}
        <h3 class="fw-bold mb-4">Iniciar sesión</h3>

        {{-- FORMULARIO --}}
        {{-- action="/": al enviar redirige al inicio --}}
        <form action="/" >
            {{-- INPUT EMAIL --}}
            {{-- form-floating: estilo moderno donde el label flota dentro del input
            mb-3: margen inferior --}}
            <div class="form-floating mb-3">
                {{-- type="email": valida formato de email
                name="email": nombre del dato enviado
                bg-light: fondo gris claro
                border-0: sin borde
                required: obligatorio completar --}}
                <input type="email" name="email" class="form-control bg-light border-0" id="emailInput" placeholder="Email" required>
                {{-- Label asociado al input (se mueve automáticamente con form-floating) --}}
                <label for="emailInput">Correo electrónico</label>
            </div>
            {{-- INPUT PASSWORD --}}
            <div class="form-floating mb-4">
                {{-- type="password": oculta el texto ingresado
                required: campo obligatorio --}}
                <input type="password" name="password"
                class="form-control bg-light border-0"
                id="passwordInput"
                placeholder="Contraseña"required>
                <label for="passwordInput">Contraseña</label>
            </div>

            {{-- BOTÓN ENVIAR --}}
            {{-- type="submit": envía el formulario
            btn btn-dark: botón negro de Bootstrap
            w-100: ocupa todo el ancho
            btn-login: clase personalizada para estilo extra
            ms-2: margen a la izquierda del ícono --}}
            <button type="submit" class="btn btn-dark w-100 btn-login">
                Ingresar <i class="bi bi-box-arrow-in-right ms-2"></i>
            </button>
        </form>

    </div>

    {{-- JS DE BOOTSTRAP --}}
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>