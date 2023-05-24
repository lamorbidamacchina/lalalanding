<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscribeController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    // Route::post('/orders', 'store');
});

Route::controller(SubscribeController::class)->group(function () {
    Route::post('/subscribe', 'create');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/thank-you', function () {
    return view('thankyou');
});
