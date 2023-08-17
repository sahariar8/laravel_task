<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name('index');
Route::post('/store',[HomeController::class,'store'])->name('store');
Route::get('/manage',[HomeController::class,'manage'])->name('manage');
Route::get('/destroy/{id}',[HomeController::class,'destroy'])->name('destroy');
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('/update/{id}',[HomeController::class,'update'])->name('update');

