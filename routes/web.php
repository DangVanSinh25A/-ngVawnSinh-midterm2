<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/master', function () {
    global $products;
    return view('Master',['products' => $products]);
});
Route::get('/Shop', function () {
    global $products;
    return view('Shop',['products' => $products]);
});
