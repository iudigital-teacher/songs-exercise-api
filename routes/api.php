<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SongController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'song'], function(){
    Route::get('/all', [
        SongController::class, 'all'    
    ]);
   
    Route::post('/store', [SongController::class, 'store']);
    Route::get('{id}/edit', [SongController::class, 'edit']);
    Route::put('{id}/update', [SongController::class, 'update']);
    Route::delete('{id}/destroy', [SongController::class, 'destroy']);

});

Route::post('login/auth', [
   AuthController::class, 'authentication' 
]);
