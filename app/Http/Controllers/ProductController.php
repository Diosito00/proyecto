<?php
// Namespace: organiza el código dentro del proyecto Laravel.
// App = carpeta principal
// Http = capa web
// Controllers = controladores (lógica del sistema)
namespace App\Http\Controllers;

// Importa la clase Request.
// Sirve para acceder a los datos que envía el usuario (GET, POST, filtros, etc)
use Illuminate\Http\Request;
// Clase para crear paginación manual.
// Permite dividir resultados en páginas y generar links (1,2,3...)
use Illuminate\Pagination\LengthAwarePaginator;

// Definición del controlador.
// "extends Controller" significa que hereda funcionalidades base de Laravel
class ProductController extends Controller
{
// Método principal del catálogo.
    // Se ejecuta cuando el usuario entra a la ruta del catálogo.
    // Recibe un objeto Request con todos los datos del usuario
    public function index(Request $request)
    {
        // 1. SIMULAMOS LA BASE DE DATOS
         // collect(): crea una colección de Laravel
        // Sirve para trabajar con datos como si fuera una base de datos
        // Permite usar métodos como filter, whereIn, sortBy, etc
        $todosLosProductos = collect([
            //(object): convierte el array en objeto
            //Permite acceder con -> (ej: $producto->marca)

            (object) [
                'id' => 1, // identificador único
                'marca' => 'Puma', // marca del producto
                'nombre' => 'Puma Velocity Nitro 3', // nombre
                'precio' => 125000, // precio actual
                'imagen' => 'imagenes/Puma-v-n-3.jpg', // ruta imagen
                'categoria' => 'mujer', // categoría (hombre, mujer, niño, unisex)
                'deporte' => 'running', // tipo de uso/deporte
            ],
            (object) [
                'id' => 2,
                'marca' => 'Puma',
                'nombre' => 'Puma x Salehe Bembury',
                'precio' => 145000,
                'imagen' => 'imagenes/Puma-Salehe-b-v-n-u.jpg',
                'categoria' => 'unisex',
                'deporte' => 'urbano',
            ],
            (object) [
                'id' => 3,
                'marca' => 'Topper',
                'nombre' => 'Topper Core Mesh',
                'precio' => 120000,
                'imagen' => 'imagenes/Topper-c-m.jpg',
                'categoria' => 'hombre',
                'deporte' => 'entrenamiento',
            ],
            (object) [
                'id' => 4,
                'marca' => 'Topper',
                'nombre' => 'Topper Fast 2.0',
                'precio' => 109999,
                'imagen' => 'imagenes/Topper-f-2.jpg',
                'categoria' => 'hombre',
                'deporte' => 'running',
            ],
            (object) [
                'id' => 5,
                'marca' => 'Topper',
                'nombre' => 'Topper Terre Kids',
                'precio' => 86700,
                'imagen' => 'imagenes/Topper-t-k.jpg',
                'categoria' => 'nino',
                'deporte' => 'urbano',
            ],
            (object) [
                'id' => 6,
                'marca' => 'Topper',
                'nombre' => 'Topper Terre Mid',
                'precio' => 87500,
                'imagen' => 'imagenes/Topper-t-m.jpg',
                'categoria' => 'nino',
                'deporte' => 'urbano',
            ],
            (object) [
                'id' => 7,
                'marca' => 'Topper',
                'nombre' => 'Topper Mamba II Kids',
                'precio' => 77999,
                'imagen' => 'imagenes/Topper-m-ii-k.jpg',
                'categoria' => 'nino',
                'deporte' => 'entrenamiento',
            ],
            (object) [
                'id' => 8,
                'marca' => 'Topper',
                'nombre' => 'Topper Zurich III',
                'precio' => 85999,
                'imagen' => 'imagenes/Topper-z-iii.jpg',
                'categoria' => 'nino',
                'deporte' => 'running',
            ],
            (object) [
                'id' => 9,
                'marca' => 'Topper',
                'nombre' => 'Topper Graft Metalic',
                'precio' => 105000,
                'imagen' => 'imagenes/Topper-g-m.jpg',
                'categoria' => 'mujer',
                'deporte' => 'urbano',
            ],
            (object) [
                'id' => 10,
                'marca' => 'Topper',
                'nombre' => 'Topper Hyde II Max',
                'precio' => 79999,
                'imagen' => 'imagenes/Topper-h-ii-m-p.jpg',
                'categoria' => 'mujer',
                'deporte' => 'urbano',
            ],
            (object) [
                'id' => 11,
                'marca' => 'Puma',
                'nombre' => 'Puma Solar',
                'precio' => 149999,
                'imagen' => 'imagenes/Puma-s.jpg',
                'categoria' => 'mujer',
                'deporte' => 'entrenamiento',
            ]
        ]);

        // 2. APLICAR FILTRO: Categorías
        // filled(): verifica si el usuario envió ese dato
        // Evita errores si no hay filtros
        if ($request->filled('categorias')) {
            // Guardamos lo que el usuario marcó en una variable temporal
            $categoriasSolicitadas = $request->categorias;

            // Verificamos si marcó 'hombre' o 'mujer'
            // in_array(): verifica si un valor existe dentro de un array
            if (in_array('hombre', $categoriasSolicitadas) || in_array('mujer', $categoriasSolicitadas)) {
                // Si es así, inyectamos silenciosamente la categoría 'unisex' a su búsqueda
                $categoriasSolicitadas[] = 'unisex'; 
                 // [] agrega un elemento al array
                // Lógica de negocio:
                // si elige hombre o mujer → también incluye unisex automáticamente
            }

            // Filtramos usando la nueva lista ampliada
             // whereIn(): filtra la colección
            // Devuelve productos cuya categoría coincida con cualquiera del array
            $todosLosProductos = $todosLosProductos->whereIn('categoria', $categoriasSolicitadas);
        }

        // Si el usuario marcó checkboxes de deporte, filtramos la colección
        if ($request->filled('deportes')) {
            $todosLosProductos = $todosLosProductos->whereIn('deporte', $request->deportes);
            // Filtra productos por deporte seleccionado
        }

        // 3. APLICAR FILTRO: Marcas
        // array_map(): aplica una función a cada elemento del array
            // strtolower(): convierte texto a minúsculas
            // Sirve para evitar errores por mayúsculas/minúsculas

        if ($request->filled('marcas')) {
            $marcasMarcadas = array_map('strtolower', $request->marcas);
             // filter(): filtra usando una función personalizada

                // function(): función anónima
                // $producto: cada elemento de la colección
                // use(): permite usar variables externas dentro de la función
            $todosLosProductos = $todosLosProductos->filter(function ($producto) use ($marcasMarcadas) {
                 // Compara marca del producto con las seleccionadas
                return in_array(strtolower($producto->marca), $marcasMarcadas);
            });
        }

        // 4. APLICAR ORDENAMIENTO
        // get(): obtiene un valor del request
        // segundo parámetro = valor por defecto si no existe
        $orden = $request->get('ordenarPor', 'recientes');
        if ($orden == 'menor_precio') {
            // sortBy(): ordena de menor a mayor
            $todosLosProductos = $todosLosProductos->sortBy('precio');
        } elseif ($orden == 'mayor_precio') {
            // sortByDesc(): ordena de mayor a menor
            $todosLosProductos = $todosLosProductos->sortByDesc('precio');
        } else {
             // por defecto: productos más recientes primero
            $todosLosProductos = $todosLosProductos->sortByDesc('id');
        }

        // 5. PAGINACIÓN MANUAL PARA ARREGLOS
        // Detecta en qué página está el usuario
        $paginaActual = LengthAwarePaginator::resolveCurrentPage();
        // Cantidad de productos por página
        $porPagina = 6; 
        
        // slice(): corta la colección
        // Calcula qué productos mostrar según la página
        $itemsActuales = $todosLosProductos->slice(($paginaActual - 1) * $porPagina, $porPagina)
        // values(): reindexa la colección (0,1,2...)
            // Evita problemas en la vista
        ->values();
        
        $productos = new LengthAwarePaginator(
            $itemsActuales, // productos de la página actual
            $todosLosProductos->count(),  // total de productos
            $porPagina, // cantidad por página
            $paginaActual, // página actual
            [
                'path' => $request->url(), // url(): obtiene la URL actual

                'query' => $request->query()  // query(): mantiene los filtros en la URL
                // IMPORTANTE: evita perder filtros al cambiar de página
            ]
        );

        // 6. ENVIAR A LA VISTA
        // view(): carga la vista catalogo.blade.php

        // compact('productos'):
        // crea automáticamente:
        // ['productos' => $productos]
        // y lo envía a la vista
        return view('catalogo', compact('productos'));
    }
}