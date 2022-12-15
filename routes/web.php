<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return redirect('/');
});

Route::get('/register', [RegisterController::class,'view'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);
Route::get('/login',[LoginController::class,'view'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'login']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/products',[ProductController::class,'view']);
Route::get('/insert',[ProductController::class,'view_insert'])->middleware('auth');
Route::post('/insert',[ProductController::class,'insert']);



Route::get('/editor', function () {
    return view('editor');
})->middleware('auth');

