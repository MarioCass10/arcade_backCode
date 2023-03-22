<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('v1/books', BookV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);
Route::post('register', [App\Http\Controllers\Api\V1\RegisterController::class, 'store']);
Route::get('security', [App\Http\Controllers\Api\V1\SecurityController::class,'index'])->middleware('auth:sanctum');
Route::get('games', [App\Http\Controllers\Api\V1\GamesController::class, 'games']);
Route::get('users', [App\Http\Controllers\Api\V1\UserController::class, 'users']);