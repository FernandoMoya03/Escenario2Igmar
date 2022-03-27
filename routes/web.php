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
    return view('iniciodesesion');
});


//Route::get("/inicio", "UsuarioController@userform");
Route::post("/save", "UsuarioController@save")->name('save');
Route::post("/verificar", "UsuarioController@verificar")->name('verificar');
Route::post("/guardarusuario", "UsuarioController@guardarusuario")->name('guardarusuario');
Route::get("/regis", "UsuarioController@registrouser")->name('regis');
Route::post("/iniciodesesion", "UsuarioController@iniciodesesion")->name('iniciodesesion');

