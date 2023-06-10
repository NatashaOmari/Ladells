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


//birthday
Route::get('/option/birthday/index', [App\Http\Controllers\BirthdayController::class, 'index'])->name('birthday.index');
Route::get('/option/birthday/create', [App\Http\Controllers\BirthdayController::class, 'create'])->name('birthday.create');
Route::post('/option/birthday/create', [App\Http\Controllers\BirthdayController::class, 'store'])->name('birthday.store');
Route::delete('/option/birthday/{id}', [App\Http\Controllers\BirthdayController::class, 'destroy'])->name('birthday.destroy');
Route::get('/option/birthday/{id}/edit', [App\Http\Controllers\BirthdayController::class, 'edit'])->name('birthday.edit');
Route::put('/option/birthday/{id}', [App\Http\Controllers\BirthdayController::class, 'update'])->name('birthday.update');


//wedding
Route::get('/option/wedding/index', [App\Http\Controllers\WeddingController::class, 'index'])->name('wedding.index');
Route::get('/option/wedding/create', [App\Http\Controllers\WeddingController::class, 'create'])->name('wedding.create');
Route::post('/option/wedding/create', [App\Http\Controllers\WeddingController::class, 'store'])->name('wedding.store');
Route::delete('/option/wedding/{id}', [App\Http\Controllers\WeddingController::class, 'destroy'])->name('wedding.destroy');
Route::get('/option/wedding/{id}/edit', [App\Http\Controllers\WeddingController::class, 'edit'])->name('wedding.edit');
Route::put('/option/wedding/{id}', [App\Http\Controllers\WeddingController::class, 'update'])->name('wedding.update');


//graduation
Route::get('/option/graduation/index', [App\Http\Controllers\GraduationController::class, 'index'])->name('graduation.index');
Route::get('/option/graduation/create', [App\Http\Controllers\GraduationController::class, 'create'])->name('graduation.create');
Route::post('/option/graduation/create', [App\Http\Controllers\GraduationController::class, 'store'])->name('graduation.store');
Route::delete('/option/graduation/{id}', [App\Http\Controllers\GraduationController::class, 'destroy'])->name('graduation.destroy');
Route::get('/option/graduation/{id}/edit', [App\Http\Controllers\GraduationController::class, 'edit'])->name('graduation.edit');
Route::put('/option/graduation/{id}', [App\Http\Controllers\GraduationController::class, 'update'])->name('graduation.update');


//allevents
Route::get('/option/allevents/index', [App\Http\Controllers\AlleventsController::class, 'index'])->name('allevents.index');
Route::get('/option/allevents/create', [App\Http\Controllers\AlleventsController::class, 'create'])->name('allevents.create');
Route::post('/option/allevents/create', [App\Http\Controllers\AlleventsController::class, 'store'])->name('allevents.store');
Route::delete('/option/allevents/{id}', [App\Http\Controllers\AlleventsController::class, 'destroy'])->name('allevents.destroy');
Route::get('/option/allevents/{id}/edit', [App\Http\Controllers\AlleventsController::class, 'edit'])->name('allevents.edit');
Route::put('/option/allevents/{id}', [App\Http\Controllers\AlleventsController::class, 'update'])->name('allevents.update');



//home
Route::get('/birthday', [App\Http\Controllers\HomeController::class, 'birthday'])->name('home.birthday');
Route::get('/wedding', [App\Http\Controllers\HomeController::class, 'wedding'])->name('home.wedding');
Route::get('/graduation', [App\Http\Controllers\HomeController::class, 'graduation'])->name('home.graduation');
Route::get('/allevents', [App\Http\Controllers\HomeController::class, 'allevents'])->name('home.allevents');
Route::get('/singlecake', [App\Http\Controllers\HomeController::class, 'singlecake'])->name('home.singlecake');
Route::get('/addcake', [App\Http\Controllers\HomeController::class, 'addcake'])->name('home.addcake');

//admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

//users
Route::get('users/index', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::delete('user/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');