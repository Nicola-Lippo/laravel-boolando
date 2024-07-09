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
    $data = [
        'title' => 'Home Boolando, per vedere i prodotti scrivi /product in alto',
    ];

    return view('home', $data);
});

Route::get('/product', function () {
    $data = [
        'title' => 'Prodotti Boolando',
        'products' => config('products')
    ];
    return view('product', $data);
});
