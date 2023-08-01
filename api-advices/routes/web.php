<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiConroller;

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
    return view('api-request');
});

Route::get('/get-advices-one', [ApiConroller::class, 'show']);

Route::get('/get-advices', [ApiConroller::class, 'showHundredAdvicesWithoutC']);

