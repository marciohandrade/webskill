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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('index');
});

Route::prefix('portfolio')->group(function () {
    Route::get('/clinica', fn() => view('portfolio.clinica.home'))->name('portfolio.clinica');
    Route::get('/estetica', fn() => view('portfolio.estetica.home'))->name('portfolio.estetica');
    Route::get('/advocacia', fn() => view('portfolio.advocacia.home'))->name('portfolio.advocacia');
    Route::get('/loja', fn() => view('portfolio.loja.home'))->name('portfolio.loja');
    Route::get('/autonomo', fn() => view('portfolio.autonomo.home'))->name('portfolio.autonomo');
});

