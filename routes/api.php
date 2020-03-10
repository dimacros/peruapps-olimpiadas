<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login_check', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::get('me', 'AuthController@me');

Route::middleware('auth:api')->group(function () {
    Route::apiResource('comisarios', 'ComisarioController');
    Route::apiResource('complejos-deportivos', 'ComplejoDeportivoController');
    Route::apiResource('eventos', 'EventoController');
});
