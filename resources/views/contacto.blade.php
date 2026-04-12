<body>

<x-navbar/>

<div class="container py-5">

    <h2 class="fw-bold text-center mb-4">Contacto</h2>

    <div class="row">

        <div class="col-md-6">
            <p><strong>Empresa:</strong> Tillas</p>
            <p><strong>Email:</strong> info@tillas.com</p>
            <p><strong>Teléfono:</strong> +54 379 4777777</p>
        </div>

        <div class="col-md-6">

            <form>

                <input type="text" class="form-control mb-3" placeholder="Nombre">

                <input type="email" class="form-control mb-3" placeholder="Email">

                <textarea class="form-control mb-3" placeholder="Mensaje"></textarea>

                <button class="btn btn-dark w-100">Enviar</button>

            </form>

        </div>

    </div>

</div>

<x-footer/>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>