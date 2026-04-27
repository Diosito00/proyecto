<?php
// Importa la clase Route para definir rutas en Laravel
use Illuminate\Support\Facades\Route;
// Importa Request para manejar datos enviados en formularios (POST)
use Illuminate\Http\Request;
// Importa el controlador de productos
use App\Http\Controllers\ProductController;

// Ruta principal del sitio ("/")
// Cuando alguien entra a la raíz, devuelve la vista 'inicio'
Route::get('/', function () {
    return view('inicio');
});

// Ruta "/quienes" que muestra la vista 'quienes'
Route::get('/quienes', function(){
    return view('quienes');
});

// Ruta "/comercializacion" que muestra la vista correspondiente
Route::get('/comercializacion', function(){
    return view('comercializacion');
});

// Ruta "/contacto" que muestra el formulario de contacto
Route::get('/contacto', function(){
    return view('contacto');
});

// Ruta "/terminos" que muestra términos y condiciones
Route::get('/terminos', function(){
    return view('terminos');
});

// Ruta "/privacidad" que muestra políticas de privacidad
Route::get('/privacidad', function(){
    return view('privacidad');
});


// Segunda definición de la misma ruta "/catalogo"
// Usa el controlador ProductController y el método index
// Además le asigna un nombre a la ruta: 'catalogo'
Route::get('/catalogo', [ProductController::class, 'index'])->name('catalogo');

// Ruta "/en-proceso" que muestra una vista de proceso en curso
// Se le asigna un nombre para poder referenciarla fácilmente
Route::get('/en-proceso', function () {
    return view('en-proceso');
})->name('en-proceso');

// Ruta POST "/contacto"
// Se ejecuta cuando se envía el formulario de contacto
Route::post('/contacto', function (Request $request) {
    // Redirige a la ruta 'contacto.exito'
    // y envía datos del formulario (nombre y email)
    return redirect()->route('contacto.exito')->with([
        'nombre' => $request->nombre,
        'email' => $request->email
    ]);
})->name('contacto.enviar');

// Ruta GET "/contacto/exito"
// Muestra una vista de confirmación luego de enviar el formulario
Route::get('/contacto/exito', function () {
    return view('contacto-exito');
})->name('contacto.exito');

// Ruta GET para mostrar la página de login

Route::get('/login', function () {
    // return view('login'):
    // Le dice a Laravel que renderice la vista llamada "login.blade.php"
    return view('login');
});
