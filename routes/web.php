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
Route::redirect('/', '/events');

Route::get('/events', function () {
    return view('pages.events.index');
})->name('pages.events.index');

Route::get('/mapview', function () {
    return view('pages.mapview.index');
})->name('pages.mapview.index');

