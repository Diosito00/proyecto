<!-- Contenido visible -->
<body>
<!-- Barra de navegación (componente Blade) -->
<x-navbar/>

<!-- Contenedor centrado con espacio vertical -->
<div class="container py-5">

    <!-- Título principal en negrita y centrado -->
    <h2 class="fw-bold text-center mb-4">Comercialización</h2>

    <p class="text-center text-muted mb-5">
        Conocé nuestras formas de compra, envíos y medios de pago disponibles.
    </p>

    <!-- Fila con separación entre columnas -->
    <div class="row g-4 text-center mb-5">

        <!-- Columna que ocupa 4/12 (3 por fila) -->
        <div class="col-md-4">
            <!-- Caja con padding, borde, sombra y bordes redondeados -->
            <div class="p-4 shadow-sm border rounded">
                <!-- Ícono de camión (envíos) -->
                <i class="bi bi-truck fs-1 mb-3"></i>
                <h5>Envíos</h5>
                <p class="text-muted">
                Realizamos envíos a todo el país mediante servicios de logística confiables.
                El tiempo de entrega estimado es de 48 a 72 horas hábiles.
                </p>
            </div>
        </div>
        

        <div class="col-md-4">
            <!-- Tarjeta con padding, borde, sombra y bordes redondeados -->
            <div class="p-4 shadow-sm border rounded">
                <!-- Ícono de tarjeta (formas de pago) -->
                <i class="bi bi-credit-card fs-1 mb-3"></i>
                <h5>Formas de Pago</h5>
                <p class="text-muted">
                Aceptamos tarjetas de crédito, débito, transferencias bancarias
                y billeteras virtuales.
                </p>
            </div>
        </div>

            

        <div class="col-md-4">
            <div class="p-4 shadow-sm border rounded">
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