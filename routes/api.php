<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/curso', [CursoController::class, 'store']);
Route::delete('/delete', [CursoController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [CursoController::class, 'edit'])->name('edit');
Route::post('/update', [CursoController::class, 'update'])->name('update');


// Route::get('categorias', [CategoriaController::class, 'index'])->name('categria.index');
// Route::post('crearCategoria', [CategoriaController::class, 'store'])->name(
//     'crearCategoria.store'
// );

Route::resource('categorias', CategoriaController::class);
Route::post('crearCategoria/{id}', [CategoriaController::class, "update"]);
Route::delete('delete/{id}', [CategoriaController::class, 'delete'])->name('delete');


Route::resource('cursos', CursoController::class);
