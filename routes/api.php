<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([ 'middleware' => 'api', 'prefix' => 'auth'], function ($router) {
	Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);
	Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
	Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
	Route::get('users', [App\Http\Controllers\AuthController::class, 'users']);
	Route::match(['get', 'put'], 'profile', [App\Http\Controllers\AuthController::class, 'profile']);
});
