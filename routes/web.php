<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;

Route::get('/', [PaginasController::class, 'inicio']);
Route::get('/proyectos', [PaginasController::class, 'proyectos']);
Route::get('/contacto', [PaginasController::class, 'contacto']);