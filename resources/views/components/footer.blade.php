<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explorar - Tillas</title>
    <link rel="icon" href="{{ asset('imagenes/Logo-blanco.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style-footer.css">
</head>

<footer class="cat-footer">
    <div class="container py-5">
        <div class="row g-4">

            {{-- Brand --}}
            <div class="col-12 col-md-3">
                <div class="footer-brand">
                    <img src="{{ asset('imagenes/Logo-blanco.png') }}" alt="tillas logo">
                    <span class="footer-brand-name">Tillas</span>
                </div>
                <div class="footer-tagline">zapatillas store</div>
            </div>

            {{-- About --}}
            <div class="col-12 col-md-3">
                <h6>Sobre Nosotros</h6>
                <p>
                    Tillas es una plataforma especializada en calzados deportivos.
                    Diseñada para mujeres, hombres y niños, ofrecemos compras seguras y recomendaciones expertas.
                </p>
            </div>

            {{-- Contact --}}
            <div class="col-12 col-md-3">
                <h6>Contactanos</h6>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>info@tillas.com</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span>+54 379 4777777</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>126 Calle Y, Corrientes, Argentina</span>
                </div>
            </div>

            {{-- Social --}}
            <div class="col-12 col-md-3">
                <h6>Redes Sociales</h6>
                <div class="d-flex gap-2">
                    <a href="#" class="social-link" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} Tillas. Todos los derechos reservados.</span>
            <div class="d-flex gap-3">
                <a href="/privacidad">Política de Privacidad</a>
                <a href="/terminos">Términos de Servicio</a>
            </div>
        </div>
    </div>
</footer>