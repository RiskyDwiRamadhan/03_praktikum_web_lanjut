<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

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
// Awal 
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Praktikum
Route::get('/home',[HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/{id}', [ProductController::class,'product']);
});

Route::get('/news/{param}',[NewController::class, 'index']);
 
Route::prefix('program')->group(function () {
    Route::get('/{id}', [ProgramController::class,'program']);
});

Route::get('/about',[NewController::class, 'about']);

Route::resource('contact',ContactController::class);