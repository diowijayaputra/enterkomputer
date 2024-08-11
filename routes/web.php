<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EKController;


// VIEW
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/makanan', function () {
    return view('makanan');
});

Route::get('/minuman', function () {
    return view('minuman');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/validation', function () {
    return view('validation');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/antrian', function () {
    return view('antrian');
});

// CREATE
Route::post('/order', [EKController::class, 'order']);

// READ
Route::get('/get_data_makanan', [EKController::class, 'getDataMakanan']);
Route::get('/get_data_minuman', [EKController::class, 'getDataMinuman']);
Route::get('/get_data_promo', [EKController::class, 'getDataPromo']);
Route::get('/get_data_menu/{id}', [EKController::class, 'getDataMenu']);
Route::get('/get_variant/{name}/{category}', [EKController::class, 'getVariant']);
