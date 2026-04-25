{{-- Definimos las variables (propiedades) que este componente va a recibir. 
    Algunas tienen un valor por defecto (como null o false) para que no sea obligatorio pasarlas siempre. --}}
@props(['marca', 'nombre', 'precio', 'imagen', 'precioViejo' => null, 'nuevo' => false, 'descuento' => null])

<div class="col">
    <div class="card product-card border-0 h-100">
        <div class="position-relative bg-light rounded overflow-hidden">
            
            {{-- Lógica condicional: Solo muestra la etiqueta "NUEVO" si la variable $nuevo es verdadera --}}
            @if($nuevo)
                <span class="badge bg-dark text-white position-absolute top-0 start-0 m-3 z-1 px-2 py-1">NUEVO</span>
            @endif
            
            {{-- Lógica condicional: Solo muestra la etiqueta roja si se le pasa un valor a $descuento --}}
            @if($descuento)
                <span class="badge bg-danger text-white position-absolute top-0 start-0 m-3 z-1 px-2 py-1">{{ $descuento }}</span>
            @endif

            
            {{-- Imprimimos la imagen y el nombre dinámicamente --}}
            <img src="{{ asset($imagen) }}" class="card-img-top product-img" alt="{{ $nombre }}">
        </div>
        
        <div class="card-body px-0 pb-0">
            <p class="text-muted small mb-1 text-uppercase tracking-wide">{{ $marca }}</p>
            <h5 class="card-title fw-bold mb-1 fs-6">{{ $nombre }}</h5>
            
            {{-- Lógica condicional para el precio: Si hay un precio viejo, mostramos ambos. Si no, solo mostramos el precio actual. --}}
            @if($precioViejo)
                <div class="d-flex align-items-center gap-2 mb-3">
                    <p class="card-text fw-bold fs-5 mb-0">${{ $precio }}</p>
                    <p class="text-decoration-line-through text-muted small mb-0">${{ $precioViejo }}</p>
                </div>
            @else
                <p class="card-text fw-bold fs-5 mb-3">${{ $precio }}</p>
            @endif
            
            <button class="btn btn-dark w-100 fw-bold text-uppercase rounded-0 btn-comprar">Agregar al carrito</button>
        </div>
    </div>
</div>