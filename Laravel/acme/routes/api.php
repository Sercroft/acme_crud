<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('propietario', 'App\Http\Controllers\PropietarioController');
Route::resource('vehiculo', 'App\Http\Controllers\VehiculoController');
Route::resource('conductor', 'App\Http\Controllers\ConductorController');
