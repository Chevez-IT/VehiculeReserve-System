<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    Route::view('/', 'acceso.login')->name('login');
    Route::view('/recuperar-contraseña', 'acceso.recuperar-contraseña')->name('recuperar-contraseña');
    Route::view('/nueva-contraseña', 'acceso.nueva-contraseña')->name('nueva-contraseña');
});

//Rutas de Errores:
Route::view('/404', 'error.404')->name('404');
