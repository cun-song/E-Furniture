<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('checkout');
});

Route::get('/tr', function () {
    return view('transaction');
});

Route::get('/checkout/{name}',[CheckoutController::class, 'view']);
// <a href="{{ url('bookDetail')}}/{{$book->id}}" class="btn btn-primary">Detail</a>
