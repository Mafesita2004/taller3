<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProyectoController;

// Rutas para Clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

// Rutas para Proyectos
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
Route::get('proyectos/create', [ProyectoController::class, 'create'])->name('proyectos.create');
Route::post('proyectos', [ProyectoController::class, 'store'])->name('proyectos.store');
Route::get('proyectos/{id}', [ProyectoController::class, 'show'])->name('proyectos.show');
Route::get('proyectos/{proyecto}/edit', [ProyectoController::class, 'edit'])->name('proyectos.edit');
Route::put('proyectos/{proyecto}', [ProyectoController::class, 'update'])->name('proyectos.update');
Route::delete('proyectos/{proyecto}', [ProyectoController::class, 'destroy'])->name('proyectos.destroy');
