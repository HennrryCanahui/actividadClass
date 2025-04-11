<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CamionController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TransporteController;
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Rutas para perfil (si no usas autenticación, podrías eliminar estas también si lo deseas)
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// CRUD de Transporte (completo, sin autenticador)
Route::resource('transporte', TransporteController::class);

// Otras rutas (puedes convertirlas a recursos si deseas CRUD completo también)
Route::get('/camiones', [CamionController::class, 'index'])->name('camiones.index');
Route::get('/marca', [MarcaController::class, 'index'])->name('marca.index');

// Puedes comentar o eliminar esta línea si ya no usas autenticación en ningún lado
// require __DIR__.'/auth.php';
Route::resource('marca', MarcaController::class);

Route::resource('camiones', CamionController::class);

Route::get('/proximamente', function () {
    return view('proximamente.index');
})->name('proximamente');