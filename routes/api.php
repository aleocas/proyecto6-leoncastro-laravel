<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ArticuloController;
use App\Http\Controllers\API\ComentarioController;

Route::apiResource('articulos', ArticuloController::class);
Route::apiResource('comentarios', ComentarioController::class);
Route::get('articulos/{id}/comentarios', [ComentarioController::class, 'porArticulo']);

