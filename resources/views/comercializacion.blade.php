<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <meta http-equiv="X-UA-Compatible"...>: Fuerza a Internet Explorer a usar su motor de renderizado más reciente (Edge). --}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- Carga los estilos principales de Bootstrap --}}
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

        <title>Tillas-Comercializacion</title>
        <link rel="icon" href="{{ asset('imagenes/Logo-blanco.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="css/style-inicio.css">
        
    </head>

<!-- Contenido visible -->
<body>

<!-- Barra de navegación (componente Blade) -->
<x-navbar/>

<!-- Contenedor centrado con espacio vertical -->
<div class="container py-5">

    <!-- Título principal en negrita y centrado -->
    <!-- fw-bold: negrita -->
    <!-- text-center: centra el texto -->
    <!-- mb-3: margen inferior -->
    <h2 class="fw-bold text-center mb-3">Comercialización</h2>

    <!-- Subtítulo explicativo -->
    <p class="text-center text-muted mb-5">
        Conocé en detalle todas nuestras opciones de compra, envío, pago y políticas para que tengas la mejor experiencia.
    </p>
    <!-- text-muted: color gris -->
    <!-- mb-5: espacio grande abajo -->


    <!-- SECCIÓN ENVÍOS (imagen izquierda) -->
    <div class="row align-items-center mb-5">
        
        <!-- Imagen -->
        <div class="col-md-6">
            <!-- img-fluid: imagen adaptable -->
            <!-- rounded: bordes redondeados -->
            <!-- shadow: sombra -->
            <img src="{{ asset('imagenes/envios.png') }}" class="img-fluid rounded shadow" alt="Envíos">
        </div>

        <!-- Texto -->
        <div class="col-md-6">
            <i class="bi bi-truck fs-1 mb-3 text-dark"></i>
            <h4 class="fw-bold mb-3">Envíos</h4>

        <p class="text-muted small">
        Realizamos envíos a todo el país mediante servicios de logística confiables,
        asegurando que tu pedido llegue en tiempo y forma, en perfectas condiciones.

        El tiempo de entrega estimado es de 48 a 72 horas hábiles para la mayoría
        de las ciudades, pudiendo variar según la ubicación, la disponibilidad del producto
        y la demanda en fechas especiales (como promociones o eventos).

        Trabajamos con empresas líderes como 
        <strong>Correo Argentino</strong>, <strong>Andreani</strong> y <strong>OCA</strong>,
        lo que nos permite ofrecer una amplia cobertura y diferentes modalidades de envío.

        Una vez realizada la compra, recibirás un correo con toda la información de tu pedido,
        incluyendo el estado del envío y los datos para su seguimiento.
        </p>

        <!-- Lista detallada -->
        <ul class="text-muted small mt-3">
            <li>Entrega estimada entre 48 y 72 horas hábiles (puede variar según la zona)</li>
            <li>Número de seguimiento en tiempo real para controlar tu envío</li>
            <li>Envío gratis en compras superiores a $50.000</li>
            <li>Opción de retiro en sucursal o punto de entrega</li>
            <li>Embalaje seguro y reforzado para proteger el producto durante el traslado</li>
            <li>Notificaciones por email sobre el estado del pedido</li>
            <li>Posibilidad de reprogramar la entrega en caso de ausencia</li>
        </ul>

    </div>


    <!-- =========================
        SECCIÓN PAGOS (imagen derecha)
    ========================== -->
    <div class="row align-items-center mb-5 flex-md-row-reverse">
        
        <!-- Imagen -->
        <div class="col-md-6">
            <img src="{{ asset('imagenes/pagos.png') }}" class="img-fluid rounded shadow" alt="Pagos">
        </div>

        <!-- Texto -->
        <div class="col-md-6">
            <i class="bi bi-credit-card fs-1 mb-3 text-dark"></i>
            <h4 class="fw-bold mb-3">Formas de Pago</h4>

            <p class="text-muted small">
            Ofrecemos múltiples medios de pago seguros y rápidos para que puedas comprar con total confianza,
            eligiendo la opción que mejor se adapte a tus necesidades.

            Todas las transacciones se procesan a través de plataformas confiables y con sistemas de
            encriptación SSL, garantizando la protección de tus datos personales y financieros en todo momento.

            Además, contamos con confirmación automática en la mayoría de los métodos de pago,
            lo que permite agilizar el procesamiento de tu pedido y reducir los tiempos de preparación y envío.
            </p>

            <!-- Íconos -->
            <div class="d-flex gap-3 mb-3">
                <i class="bi bi-credit-card fs-4"></i>
                <i class="bi bi-bank fs-4"></i>
                <i class="bi bi-phone fs-4"></i>
            </div>

            <!-- Lista -->
            <ul class="text-muted small">
                <li>Tarjetas de crédito y débito (Visa, Mastercard, American Express)</li>
                <li>Hasta 6 cuotas sin interés en productos seleccionados</li>
                <li>Pagos a través de MercadoPago con múltiples opciones disponibles</li>
                <li>Transferencia bancaria directa con confirmación manual o automática</li>
                <li>Billeteras virtuales (Ualá, MercadoPago, entre otras)</li>
                <li>Confirmación inmediata del pago en la mayoría de los casos</li>
                <li>Posibilidad de guardar métodos de pago para compras futuras (según plataforma)</li>
            </ul>

    </div>


    <!-- =========================
    SECCIÓN CAMBIOS (imagen izquierda)
    ========================== -->
    <div class="row align-items-center mb-5">
        
        <!-- Imagen -->
        <div class="col-md-6">
            <img src="{{ asset('imagenes/devolucion.png') }}" class="img-fluid rounded shadow" alt="Cambios">
        </div>

        <!-- Texto -->
        <div class="col-md-6">
            <i class="bi bi-arrow-repeat fs-1 mb-3 text-dark"></i>
            <h4 class="fw-bold mb-3">Política de Cambios</h4>


        <div class="mt-5">

            <!-- TEXTO PRINCIPAL -->
            <p class="text-muted small">
                Queremos que estés completamente conforme con tu compra. Si el producto no cumple
                con tus expectativas, podés solicitar un cambio o devolución de manera simple,
                rápida y sin complicaciones.

                Nuestro proceso está diseñado para ser transparente y ágil, permitiéndote resolver
                cualquier inconveniente sin demoras innecesarias y con acompañamiento de nuestro equipo.
            </p>

            <!-- LISTA DE CONDICIONES -->
            <ul class="text-muted small">
                <li>Plazo de hasta 30 días corridos desde la fecha de compra</li>
                <li>El producto debe estar sin uso, en perfecto estado y con su empaque original</li>
                <li>Primer cambio sin costo adicional (sujeto a condiciones)</li>
                <li>Posibilidad de cambio por talle, modelo o producto diferente</li>
                <li>Devolución del dinero dentro de los 7 días hábiles</li>
                <li>Atención personalizada durante todo el proceso</li>
                <li>En caso de falla o defecto, el cambio es inmediato sin costo</li>
            </ul>


            </div>

        </div>
    </div> 

    <!-- =========================
        SECCIÓN EXTRA
    ========================== -->

    <div class="row g-4">

        <!-- CÓMO COMPRAR -->
        <div class="col-md-6">
            <div class="p-4 border rounded shadow-sm h-100">

                <h5 class="fw-bold mb-3">¿Cómo comprar?</h5>

                <ol class="text-muted small">
                <li>Explorá nuestro catálogo y elegí el producto que más se adapte a tu estilo y necesidad.</li>
                <li> Ingresá a la ficha del producto, seleccioná el talle correspondiente y la cantidad deseada.</li>
                <li>Hacé clic en “Agregar al carrito” para sumar el producto a tu compra.</li>
                <li>Accedé al carrito, revisá los productos seleccionados y confirmá tu pedido.</li>
                <li>Completá tus datos personales y la dirección de envío para la entrega.</li>
                <li> Elegí el método de pago que prefieras (tarjeta, transferencia o billetera virtual).</li>
                <li>Confirmá la compra y recibí un correo con el detalle de tu pedido.</li>
                <li>Realizá el seguimiento del envío hasta recibir tu producto en tu domicilio.</li>
                </ol>

            </div>
        </div>

        <!-- SEGURIDAD -->
        <div class="col-md-6">
            <div class="p-4 border rounded shadow-sm h-100">

                <h5 class="fw-bold mb-3">Compra Segura</h5>

                <p class="text-muted small">
                    Todas las transacciones están protegidas mediante protocolos de seguridad SSL,
                    garantizando la protección de tus datos personales y financieros.
                </p>

                <div class="d-flex gap-3 mt-3">
                    <i class="bi bi-shield-check fs-2 text-success"></i>
                    <i class="bi bi-lock fs-2 text-dark"></i>
                </div>

            </div>

                

            <div class="col-md-4">
                <div class="p-4 shadow-sm h-100 border rounded">
                    <!-- Ícono de cambio/devolución -->
                    <i class="bi bi-arrow-repeat fs-1 mb-3"></i>
                    <h5>Política de Cambios</h5>
                <p class="text-muted">
                    Podés realizar cambios dentro de los 30 días posteriores a la compra,
                    siempre que el producto se encuentre en buen estado.
                </p>
                </div>
            </div>

        </div>

    </div>

    <!-- Footer (componente Blade) -->
    <x-footer/>
    <!-- JS de Bootstrap -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>