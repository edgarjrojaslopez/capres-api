<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AfiliadoController;
use App\Http\Controllers\API\AutenticarController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/* Afiliados Routes */
/* Route::get('afiliados', [AfiliadoController::class, 'index']);

Route::post('afiliados', [AfiliadoController::class, 'store']);

Route::get('afiliados/{afiliado}', [AfiliadoController::class, 'show']);

Route::put('afiliados/{afiliado}', [AfiliadoController::class, 'update']);

Route::delete('afiliados/{afiliado}', [AfiliadoController::class, 'destroy']); */



/* Sanctum Routes */
Route::post('registro',[AutenticarController::class,'registro']);

Route::post('login',[AutenticarController::class,'login']);

Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::post('logout',[AutenticarController::class,'logout']);
    Route::apiResource('afiliados', AfiliadoController::class);
});
