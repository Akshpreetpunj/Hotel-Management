<?php

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
Route:: get('/rooms', [RoomsController::class, 'index'])->name('rooms');
Route:: get('/bookings', [BookingsController::class, 'index'])->name('bookings');

Route:: get('/rooms/create', [RoomsController::class, 'create']);
Route:: get('/rooms/{id}/edit', [RoomsController::class, 'edit']);
//Route::resource('rooms', 'RoomsController');
//Route::resource('bookings', 'BookingsController');