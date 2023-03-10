<?php

/**
 * "StAuth10127: I Akshpreet Singh Punj, 000820040 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else."
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingsController;


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
    return view('layouts.app');
});

Route:: get('/', [AboutController::class, 'index']);
Route:: get('/about', [AboutController::class, 'index'])->name('about');

Route::resource('rooms', 'RoomsController');
Route::resource('bookings', 'BookingsController');

Route:: get('/rooms', [RoomsController::class, 'index'])->name('rooms');
Route:: get('/bookings', [BookingsController::class, 'index'])->name('bookings');