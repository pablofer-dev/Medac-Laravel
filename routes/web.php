<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/signin', function () {
    return view('logearse');
});
Route::get('/signup', function () {
    return view('registrarse');
});
Route::get('/reservas', function () {
    return view('reserva');
});
Route::get('/reservas-info', function () {
    return view('reserva2');
});
Route::get('/reservas-confirmacion', function () {
    return view('reserva3');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
