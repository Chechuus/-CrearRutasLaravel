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
    return "hola";
});
Route::get('rama1/rama2', function () {
    return "con una rama ";
});
Route::get('rama1/{rama2}', function ($rama2) {
    return "con una rama con bariable: $rama2";
});
Route::get('cursos/{cursito}', function ($cursito) {
    return "Esta es una variable: $cursito";
});
Route::get('cursos/{cursito}/{otrocurso}', function ($cursito, $otrocurso) {
    return "Esta es una variable: $cursito , y esta es otra variable $otrocurso";
});
