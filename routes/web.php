<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/precargar-datos', function () {
    DB::table('categorias')->insert(array(
        array('nombre' => 'Familia'),
        array('nombre' => 'DAW'),
        array('nombre' => 'Amigos')
    ));

    DB::table('personas')->insert(array(
        array('estrella' => 1, 'nombre' => 'Alvaro',    'apellido' => 'Belda',  'telefono' => '123456789', 'categoria_id' => 1),
        array('estrella' => 0, 'nombre' => 'Eduardo',   'apellido' => 'Lozano', 'telefono' => '111222333', 'categoria_id' => 3),
        array('estrella' => 1, 'nombre' => 'Sergio',    'apellido' => 'Belda',  'telefono' => '123123123', 'categoria_id' => 2)
    ));

    return '<h2>Datos insertados correctamente</h2>     <br>
            <a href="/listadoCategorias">Listado categoría</a>  <br>
            <a href="/listadoPersonas">Listado persona</a>';

});

Route::get  ('/listadoCategorias',          [CategoriaController::class, 'listadoCategorias'])->name('listadoCategorias');
Route::get  ('/categoria',                  [CategoriaController::class, 'anadir']);
Route::post ('/categoria',                  [CategoriaController::class, 'crear']);
Route::get  ('/categoria/{categoria}',      [CategoriaController::class, 'editar']);
Route::put ('/categoria/{categoria}',       [CategoriaController::class, 'modificar']);
Route::delete ('/categoria/{categoria}',    [CategoriaController::class, 'eliminar']);

Route::get  ('/listadoPersonas',            [PersonaController::class, 'listadoPersonas'])->name('listadoPersonas');
Route::get  ('/persona',                    [PersonaController::class, 'anadir']);
Route::post ('/persona',                    [PersonaController::class, 'crear']);
Route::get  ('/persona/{persona}',          [PersonaController::class, 'editar']);
Route::put ('/persona/{persona}',           [PersonaController::class, 'modificar']);
Route::delete ('/persona/{persona}',        [PersonaController::class, 'eliminar']);
