<!DOCTYPE html>
<html lang="es">
<head>
    {{-- <meta charset="UTF-8">: Le dice al navegador que use la codificación de caracteres UTF-8, lo cual es vital para que las tildes (á, é) y la letra 'ñ' se vean correctamente. --}}
    <meta charset="UTF-8">
    
    {{-- <meta name="viewport"...>: Esencial para el diseño responsivo. Hace que la página web adapte su ancho al tamaño de la pantalla del dispositivo (celular, tablet, etc.). --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- <meta http-equiv="X-UA-Compatible"...>: Fuerza a Internet Explorer a usar su motor de renderizado más reciente (Edge). --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    
    {{-- Carga FontAwesome: Una de las librerías de íconos vectoriales más populares. permite usar íconos de redes sociales, teléfonos, sobres, etc., mediante clases de CSS. --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="css/style-footer.css">
</head>

{{-- <footer>: Etiqueta semántica de HTML5. Indica que esta sección es el pie de página del documento. Es excelente para la accesibilidad y el SEO. --}}
<footer class="cat-footer">
    
    {{-- container: Centra todo el bloque en la pantalla. py-5: Aplica un relleno (padding) generoso arriba y abajo. --}}
    <div class="container py-5">
        
        {{-- row: Crea una fila para la cuadrícula de Bootstrap. g-4: (Gap 4) Agrega un espacio uniforme tanto horizontal como vertical entre las columnas. --}}
        <div class="row g-4">

            {{-- Brand (Logo y Marca) --}}
            {{-- col-12: En celulares, ocupa el 100% del ancho. col-md-3: En tablets y PCs, ocupa un cuarto del ancho (3 de 12 columnas). Como son 4 bloques iguales, se alinearán perfectamente en una sola línea en PC. --}}
            <div class="col-12 col-md-3">
                <div class="footer-brand">
                    <img src="{{ asset('imagenes/Logo-blanco.png') }}" alt="tillas logo">
                    
                    {{-- <span>: Etiqueta en línea (no genera saltos de línea) ideal para aplicar estilos a fragmentos de texto pequeños, como el nombre de la marca. --}}
                    <span class="footer-brand-name">Tillas</span>
                </div>
                <div class="footer-tagline">zapatillas store</div>
            </div>

            {{-- About (Sobre Nosotros) --}}
            <div class="col-12 col-md-3">
                <h6>Sobre Nosotros</h6>
                <p>
                    Tillas es una plataforma especializada en calzados deportivos.
                    Diseñada para mujeres, hombres y niños, ofrecemos compras seguras y recomendaciones expertas.
                </p>
            </div>

            {{-- Contact (Contacto) --}}
            <div class="col-12 col-md-3">
                <h6>Contactanos</h6>
                <div class="contact-item">
                    {{-- <i> con clases de FontAwesome: 
                        fas: Significa "Font Awesome Solid" (íconos rellenados).
                        fa-envelope, fa-phone, fa-map-marker-alt: Son los nombres específicos de cada ícono. --}}
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

            {{-- Social (Redes Sociales) --}}
            <div class="col-12 col-md-3">
                <h6>Redes Sociales</h6>
                
                {{-- d-flex gap-2: Activa Flexbox. Pone todos los botones de redes sociales en una sola línea horizontal y les agrega una separación nivel 2 entre ellos. --}}
                <div class="d-flex gap-2">
                    
                    {{-- aria-label="...": Esta etiqueta no se ve en la pantalla, pero es leída por los programas para personas con discapacidad visual, indicándoles hacia dónde lleva el enlace, ya que no hay texto visible, solo un ícono. --}}
                    <a href="{{ route('en-proceso') }}" class="social-link" aria-label="Facebook">
                        {{-- fab: Significa "Font Awesome Brands" (para íconos de logotipos de empresas/marcas registradas). --}}
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ route('en-proceso') }}" class="social-link" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="{{ route('en-proceso') }}" class="social-link" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{ route('en-proceso') }}" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Bottom bar (Barra Inferior de Copyright y Legales) --}}
        <div class="footer-bottom">
            {{-- &copy;: Es el código HTML para generar el símbolo de copyright (©). 
                {{ date('Y') }}:  Esto imprimirá automáticamente el año actual en el que estamos, así no tienes que actualizar tu código cada primero de enero. --}}
            <span>&copy; {{ date('Y') }} Tillas. Todos los derechos reservados.</span>
            
            <div class="d-flex gap-3">
                <a href="/privacidad">Política de Privacidad</a>
                <a href="/terminos">Términos de Servicio</a>
            </div>
        </div>
    </div>
</footer>
</html>