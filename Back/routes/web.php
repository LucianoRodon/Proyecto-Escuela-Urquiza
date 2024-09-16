<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;

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

//------------------------------------------------------------------------------------------------------------------------------------------------
// Swagger

// Aulas
Route::get('/api/aulas', 'App\Http\Controllers\horarios\AulaController@index');
Route::get('/api/aulas/{id}', 'App\Http\Controllers\horarios\AulaController@show');
Route::post('/api/aulas', 'App\Http\Controllers\horarios\AulaController@store');
Route::put('/api/aulas/actualizar/{id}', 'App\Http\Controllers\horarios\AulaController@update');
Route::delete('/api/aulas/eliminar/{id}', 'App\Http\Controllers\horarios\AulaController@destroy');

