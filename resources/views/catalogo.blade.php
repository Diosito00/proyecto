<!DOCTYPE html>
<html>
    <head>
        {{-- <meta charset="UTF-8">: Le dice al navegador que use la codificación de caracteres UTF-8, lo cual es vital para que las tildes (á, é) y la letra 'ñ' se vean correctamente. --}}
        <meta charset="UTF-8">
        
        {{-- <meta name="viewport"...>: Esencial para el diseño responsivo. Hace que la página web adapte su ancho al tamaño de la pantalla del dispositivo (celular, tablet, etc.). --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        {{-- <meta http-equiv="X-UA-Compatible"...>: Fuerza a Internet Explorer a usar su motor de renderizado más reciente (Edge). --}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- Carga los estilos principales de Bootstrap --}}
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <title>Tillas</title>
        <link rel="icon" href="{{ asset('imagenes/Logo-blanco.ico') }}" type="image/x-icon">
        {{-- Carga tus estilos personalizados --}}
        <link rel="stylesheet" href="css/style-inicio.css">
    </head>
    <body>
        {{-- Carga los scripts de Bootstrap (necesarios para que funcionen menús desplegables y carruseles) --}}
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        {{-- Barra de Navegacion --}}
        {{-- Componente de Blade que inyecta el código de tu barra de navegación --}}
        <x-navbar/>
        

        <h1>CATALOGO EN PROCESO</h1>


        <x-footer/>


    </body>
</html>