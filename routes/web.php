<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/quienes', function(){
    return view('quienes');
});

Route::get('/comercializacion', function(){
    return view('comercializacion');
});

Route::get('/contacto', function(){
    return view('contacto');
});

Route::get('/terminos', function(){
    return view('terminos');
});

Route::get('/privacidad', function(){
    return view('privacidad');
});

Route::get('/catalogo', function(){
    return view('catalogo');
});

Route::get('/catalogo', [ProductController::class, 'index'])->name('catalogo');

Route::get('/en-proceso', function () {
    return view('en-proceso');
})->name('en-proceso');


Route::post('/contacto', function (Request $request) {
    return redirect()->route('contacto.exito')->with([
        'nombre' => $request->nombre,
        'email' => $request->email
    ]);
})->name('contacto.enviar');

Route::get('/contacto/exito', function () {
    return view('contacto-exito');
})->name('contacto.exito');