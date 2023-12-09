<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RestaurarContrasenaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('check.session')->group(function () {
    Route::view('/', 'acceso.login')->name('login.form');
    Route::view('/recuperar-contraseña', 'acceso.recuperar-contraseña')->name('recuperar.contraseña.form');
    Route::view('/nueva-contraseña', 'acceso.nueva-contraseña')->name('restablecer.contraseña.form');
});

// Rutas de autenticación
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Rutas de recuperacion de contraseña
Route::post('/verificacion/correo', [RestaurarContrasenaController::class, 'checkCorreo']) ->name('verificar.correo');


/* Route::get('/insertar-usuarios', [UsuarioController::class, 'insertarUsuarios']);
Route::get('/insertar-roles', [RolController::class, 'insertarRoles']); */

//Rutas de Errores:
Route::view('/404', 'error.404')->name('404');
