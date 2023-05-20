<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

//options
Route::post('/option', [App\Http\Controllers\OptionController::class, 'chooseOption'])->name('option');


Route::get('/birthday', [App\Http\Controllers\HomeController::class, 'birthday'])->name('home.birthday');
Route::get('/wedding', [App\Http\Controllers\HomeController::class, 'wedding'])->name('home.wedding');
Route::get('/graduation', [App\Http\Controllers\HomeController::class, 'graduation'])->name('home.graduation');
Route::get('/allevents', [App\Http\Controllers\HomeController::class, 'allevents'])->name('home.allevents');
Route::get('/singlecake', [App\Http\Controllers\HomeController::class, 'singlecake'])->name('home.singlecake');
Route::get('/addcake', [App\Http\Controllers\HomeController::class, 'addcake'])->name('home.addcake');

//admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');