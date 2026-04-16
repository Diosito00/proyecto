<body>

<x-navbar/>

<div class="container py-5">

    <h2 class="fw-bold text-center mb-4">Contacto</h2>

    <p class="text-center text-muted mb-5">
        Si tenés alguna consulta, podés comunicarte con nosotros a través de los siguientes medios.
    </p>

    <div class="row g-4">
        <div class="col-md-5">
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

                    @if(session('success'))
                    <div class="alert alert-success text-center">
                        <p class="lead mb-0">
                            Hola <strong>{{ session('nombre') }}</strong>, qué bueno recibir tu mensaje.
                            Un miembro del equipo se pondrá en contacto con vos al correo:
                            <strong>{{ session('email') }}</strong>.
                            ¡Muchas gracias!
                        </p>
                    </div>
                @endif

                    <form action="{{ route('contacto.enviar') }}" method="POST">
                        @csrf
                        <input type="text" name="nombre" class="form-control mb-3" placeholder="Nombre completo">
                        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                        <textarea name="mensaje" class="form-control mb-3" placeholder="Escribí tu mensaje" required></textarea>
                        <button class="btn btn-dark w-100">Enviar</button>
                    </form>
                
            </div>

        </div>

    </div>

</div>

<x-footer/>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
