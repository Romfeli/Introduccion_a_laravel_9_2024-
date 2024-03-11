<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|* Route::get Consultar
 * Route::post Guardar
 * Route::delete Eliminar
 * Route::put Actualizar
*/




Route::get('/', function () {
    return view('home');
});


Route::get('/blog', function () {
    return 'listado de blog';
});

Route::get('/blog/{slug}', function ($slug) {

    return $slug;

});


Route::get('/buscar', function (Request $request) {

    return $request->all();

});
