<?php

use App\Http\Controllers\ApiAlleventsController;
use App\Http\Controllers\ApiBirthdayController;
use App\Http\Controllers\ApiGraduationController;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\ApiWeddingController;
use App\Http\Controllers\UserController;
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
//birthday
Route::get('birthdays', [ApiBirthdayController::class,'index']);
Route::get('birthday/{id}', [ApiBirthdayController::class,'show']);
Route::post('birthday', [ApiBirthdayController::class, 'store']);
Route::put('birthday/{id}', [ApiBirthdayController::class, 'update']);
Route::delete('birthday/{id}', [ApiBirthdayController::class, 'destroy']);

//allevents
Route::get('allevents', [ApiAlleventsController::class, 'index']);
Route::get('allevents/{id}', [ApiAlleventsController::class, 'show']);
Route::post('allevents', [ApiAlleventsController::class, 'store']);
Route::put('allevents/{id}', [ApiAlleventsController::class, 'update']);
Route::delete('allevents/{id}', [ApiAlleventsController::class, 'destroy']);

//graduation
Route::get('graduations', [ApiGraduationController::class, 'index']);
Route::get('graduation/{id}', [ApiGraduationController::class, 'show']);
Route::post('graduation', [ApiGraduationController::class, 'store']);
Route::put('graduation/{id}', [ApiGraduationController::class, 'update']);
Route::delete('graduation/{id}', [ApiGraduationController::class, 'destroy']);

//wedding
Route::get('weddings', [ApiWeddingController::class, 'index']);
Route::get('wedding/{id}', [ApiWeddingController::class, 'show']);
Route::post('wedding', [ApiWeddingController::class, 'store']);
Route::put('wedding/{id}', [ApiWeddingController::class, 'update']);
Route::delete('wedding/{id}', [ApiWeddingController::class, 'destroy']);

//auth routes
Route::post('register', [ApiUserController::class, 'register']);
Route::post('login', [ApiUserController::class, 'login']);
Route::put('user/{id}',[ApiUserController::class, 'update']);
Route::get('user/{id}', [ApiUserController::class, 'show']);

//protected routes
Route::group(
    ['middleware' => ['auth:sanctum']],
    function () {
        
        Route::put('birthday/{id}', [ApiBirthdayController::class, 'update']);
        Route::post('birthday/create', [ApiBirthdayController::class, 'store']);

        Route::post('allevents/create', [ApiAlleventsController::class, 'store']);
        Route::put('allevents/{id}', [ApiAlleventsController::class, 'update']);

        Route::post('graduation/create', [ApiGraduationController::class, 'store']);
        Route::put('graduation/{id}', [ApiGraduationController::class, 'update']);

        Route::post('wedding/create', [ApiWeddingController::class, 'store']);
        Route::put('wedding/{id}', [ApiWeddingController::class, 'update']);

        Route::post('logout', [ApiUserController::class, 'logout']);
    }

);
