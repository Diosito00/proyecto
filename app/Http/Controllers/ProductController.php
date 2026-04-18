<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // 1. SIMULAMOS LA BASE DE DATOS
        $todosLosProductos = collect([
            (object) [
                'id' => 1,
                'marca' => 'Puma',
                'nombre' => 'Puma Velocity Nitro 3',
                'precio' => 125000,
                'imagen' => 'imagenes/Puma-v-n-3.jpg',
                'categoria' => 'mujer',
                'deporte' => 'running',
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
                'precio' => 180000,
                'imagen' => 'imagenes/Topper-c-m.jpg',
                'categoria' => 'hombre',
                'deporte' => 'entrenamiento',
            ],
            (object) [
                'id' => 4,
                'marca' => 'Topper',
                'nombre' => 'Topper Fast 2.0',
                'precio' => 160000,
                'imagen' => 'imagenes/Topper-f-2.jpg',
                'categoria' => 'hombre',
                'deporte' => 'running',
            ],
            (object) [
                'id' => 5,
                'marca' => 'Topper',
                'nombre' => 'Topper Terre Kids',
                'precio' => 160000,
                'imagen' => 'imagenes/Topper-t-k.jpg',
                'categoria' => 'nino',
                'deporte' => 'urbano',
            ],
            (object) [
                'id' => 6,
                'marca' => 'Topper',
                'nombre' => 'Topper Terre Mid',
                'precio' => 160000,
                'imagen' => 'imagenes/Topper-t-m.jpg',
                'categoria' => 'nino',
                'deporte' => 'urbano',
            ],
            (object) [
                'id' => 7,
                'marca' => 'Topper',
                'nombre' => 'Topper Mamba II Kids',
                'precio' => 160000,
                'imagen' => 'imagenes/Topper-m-ii-k.jpg',
                'categoria' => 'nino',
                'deporte' => 'entrenamiento',
            ],
            (object) [
                'id' => 8,
                'marca' => 'Topper',
                'nombre' => 'Topper Zurich III',
                'precio' => 160000,
                'imagen' => 'imagenes/Topper-z-iii.jpg',
                'categoria' => 'nino',
                'deporte' => 'running',
            ],
            (object) [
                'id' => 9,
                'marca' => 'Topper',
                'nombre' => 'Topper Graft Metalic',
                'precio' => 160000,
                'imagen' => 'imagenes/Topper-g-m.jpg',
                'categoria' => 'mujer',
                'deporte' => 'urbano',
            ],
            (object) [
                'id' => 10,
                'marca' => 'Topper',
                'nombre' => 'Topper Hyde II Max',
                'precio' => 160000,
                'imagen' => 'imagenes/Topper-h-ii-m-p.jpg',
                'categoria' => 'mujer',
                'deporte' => 'urbano',
            ],
            (object) [
                'id' => 11,
                'marca' => 'Puma',
                'nombre' => 'Puma Solar',
                'precio' => 160000,
                'imagen' => 'imagenes/Puma-s.jpg',
                'categoria' => 'mujer',
                'deporte' => 'entrenamiento',
            ]
        ]);

        // 2. APLICAR FILTRO: Categorías
        if ($request->filled('categorias')) {
            // Guardamos lo que el usuario marcó en una variable temporal
            $categoriasSolicitadas = $request->categorias;

            // Verificamos si marcó 'hombre' o 'mujer'
            if (in_array('hombre', $categoriasSolicitadas) || in_array('mujer', $categoriasSolicitadas)) {
                // Si es así, inyectamos silenciosamente la categoría 'unisex' a su búsqueda
                $categoriasSolicitadas[] = 'unisex'; 
            }

            // Filtramos usando la nueva lista ampliada
            $todosLosProductos = $todosLosProductos->whereIn('categoria', $categoriasSolicitadas);
        }

        // Si el usuario marcó checkboxes de deporte, filtramos la colección
        if ($request->filled('deportes')) {
            $todosLosProductos = $todosLosProductos->whereIn('deporte', $request->deportes);
        }
        // ----------------------------------------

        // 3. APLICAR FILTRO: Marcas
        if ($request->filled('marcas')) {
            $marcasMarcadas = array_map('strtolower', $request->marcas);
            $todosLosProductos = $todosLosProductos->filter(function ($producto) use ($marcasMarcadas) {
                return in_array(strtolower($producto->marca), $marcasMarcadas);
            });
        }

        // 4. APLICAR ORDENAMIENTO
        $orden = $request->get('ordenarPor', 'recientes');
        if ($orden == 'menor_precio') {
            $todosLosProductos = $todosLosProductos->sortBy('precio');
        } elseif ($orden == 'mayor_precio') {
            $todosLosProductos = $todosLosProductos->sortByDesc('precio');
        } else {
            $todosLosProductos = $todosLosProductos->sortByDesc('id');
        }

        // 5. PAGINACIÓN MANUAL PARA ARREGLOS
        $paginaActual = LengthAwarePaginator::resolveCurrentPage();
        $porPagina = 6; 
        
        $itemsActuales = $todosLosProductos->slice(($paginaActual - 1) * $porPagina, $porPagina)->values();
        
        $productos = new LengthAwarePaginator(
            $itemsActuales, 
            $todosLosProductos->count(), 
            $porPagina, 
            $paginaActual, 
            [
                'path' => $request->url(),
                'query' => $request->query()
            ]
        );

        // 6. ENVIAR A LA VISTA
        return view('catalogo', compact('productos'));
    }
}