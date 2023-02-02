<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\SerieDocumentalController;
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

Route::group(['prefix' => 'nodo'], function () {
    
    Route::get('/index', [UsuarioController::class, 'index']);
    
    Route::post('/create', [UsuarioController::class, 'storage']);

    Route::post('/update', [UsuarioController::class, 'update']);

    Route::post('/create/relacion', [UsuarioController::class, 'addRelacion']);
    
    Route::delete('/delete/{id}', [UsuarioController::class, 'destroy']);

    Route::delete('/delete/relacion/{id}', [UsuarioController::class, 'destroyRelacion']);

});

Route::group(['prefix' => 'serie-documental'], function(){

    Route::get('/', [SerieDocumentalController::class, 'index']);

});

Route::apiResource('areas', AreaController::class);

