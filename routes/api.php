<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SubcategoriasController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


/* Roles */

Route::get('/roles', [RolesController::class, 'index']);
Route::post('/rol', [RolesController::class, 'create']);

/* categorias */
Route::get('/categorias', [CategoriasController::class, 'index']);
Route::post('/categoria', [CategoriasController::class, 'create']);

/* subCategorias */
Route::get('/subcategorias', [SubcategoriasController::class, 'index']);
Route::post('/subcategoria', [SubcategoriasController::class, 'create']);

/* Paises */
Route::get('/paises', [PaisesController::class, 'index']);
Route::post('/pais', [PaisesController::class, 'create']);

/* Usuarios */
Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::get('/usuarios/{id}', [UsuariosController::class, 'show']);
Route::post('/usuario', [UsuariosController::class, 'create']);
Route::post('/usuario/{id}', [UsuariosController::class, 'update']);

/* cursos */
Route::get('/cursos', [CursosController::class, 'index']);
Route::post('/curso', [CursosController::class, 'create']);

/* Registro - new Year*/
Route::get('/registros', [RegistrosController::class, 'index']);
Route::post('/registro', [RegistrosController::class, 'create']);
Route::post('/registro/{id}', [RegistrosController::class, 'update']);
