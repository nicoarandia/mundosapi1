<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/**Indicamos que vamos a utilizar de la carpeta app,la carpeta Http,la carp controllers, el archivo provincia controllers */
use App\Http\Controllers\ProvinciaController;

/*
|--------------------------------------------------------------------------
| API Routes
|-------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/provincia', [ProvinciaController::class,'getProvinciaSinParametro']);

Route::get('/provincias/{id}', [ProvinciaController::class,'getProvinciaConParametro']);

Route::get('/provinciasAlternativa/{id?}', [ProvinciaController::class,'getProvinciaAlternativa']);