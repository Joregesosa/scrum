<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SubcategoriasController;
use Illuminate\Support\Facades\Route;


/* Roles */
Route::get('/rol', [RolesController::class, 'index']);
Route::post('/rol/new', [RolesController::class, 'create']);

/* categorias */
Route::get('/categorias', [CategoriasController::class, 'index']);
Route::post('/categorias/new', [CategoriasController::class, 'create']);

/* subCategorias */
Route::get('/subcategorias', [SubcategoriasController::class, 'index']);
Route::post('/subcategorias/new', [SubcategoriasController::class, 'create']);

/* Paises */
Route::get('/paises', [PaisesController::class, 'index']);
Route::post('/paises/new', [PaisesController::class, 'create']);
