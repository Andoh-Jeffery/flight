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
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
// ====FLIGHTS====
Route::get('/add-flight', function () {
    return view('flight\add-flight');
});

Route::get('/view-flights', function () {
    return view('flight\view-flights');
});

Route::get('/update-flight', function () {
    return view('flight\update-flight');
});

// ====END FLIGHTS====

// ====PASSENGER====
Route::get('/add-passenger', function () {
    return view('passenger\add-passenger');
});
Route::get('/update-passenger', function () {
    return view('passenger\update-passenger');
});
Route::get('/view-passengers', function () {
    return view('passenger\view-passengers');
});
// ====END FLIGHTS====