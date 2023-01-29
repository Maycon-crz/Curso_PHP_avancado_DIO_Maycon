<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario as UsuarioModel;
use App\Http\Controllers\API\Usuario;




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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function(){
    Route::get('lista', function(){
        return UsuarioModel::listar(10);
    });

    // Route::post('cadastra', 'API\Usuario@salvar'); //Está é uma forma que não funcionou provavelmente está ultrapassada abaixo está uma soolução que encontrei na internet:
    Route::post('cadastra',[Usuario::class, 'salvar']);
});