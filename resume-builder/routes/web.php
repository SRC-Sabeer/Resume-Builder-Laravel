<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ResourceController::class,'create']);
Route::post('/',[ResourceController::class,'store']);
Route::get('/view',[ResourceController::class,'index']);
// Route::get('/view',[ResourceController::class,'index']);

// Auth::routes();

// Route::get('/template-edit', [App\Http\Controllers\HomeController::class, 'index'])->name('home');