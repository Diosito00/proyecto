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
                'categoria' => 'hombre',
                'deporte' => 'running', // <--- NUEVO: Agregamos la propiedad deporte
            ],
            (object) [
                'id' => 2,
                'marca' => 'Puma',
                'nombre' => 'Puma x Salehe Bembury',
                'precio' => 145000,
                'imagen' => 'imagenes/Puma-Salehe-b-v-n-u.jpg',
                'categoria' => 'hombre',
                'deporte' => 'urbano', // <--- NUEVO
            ],
            (object) [
                'id' => 3,
                'marca' => 'Topper',
                'nombre' => 'Topper Core Mesh',
                'precio' => 180000,
                'imagen' => 'imagenes/Topper-c-m.jpg',
                'categoria' => 'mujer',
                'deporte' => 'entrenamiento', // <--- NUEVO
            ],
            (object) [
                'id' => 4,
                'marca' => 'Topper',
                'nombre' => 'Topper Fast 2.0',
                'precio' => 160000,
                'imagen' => 'imagenes/Topper-f-2.jpg',
                'categoria' => 'nino',
                'deporte' => 'running', // <--- NUEVO
            ]
        ]);

        // 2. APLICAR FILTRO: Categorías
        if ($request->filled('categorias')) {
            $todosLosProductos = $todosLosProductos->whereIn('categoria', $request->categorias);
        }

        // --- NUEVO BLOQUE: FILTRO POR DEPORTE ---
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
        $porPagina = 12; 
        
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