<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AircraftContrller;
use App\Http\Controllers\FlightContrller;
use App\Http\Controllers\PassengerContrller;

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
Route::get('/add-flight',[FlightContrller::class,'index']);
Route::post('/add-flight',[FlightContrller::class,'store']);
Route::get('/view-flights',[FlightContrller::class,'show']);
Route::get('/update-flight/{id}', [FlightContrller::class,'update']);
Route::post('/update-flight/{id}', [FlightContrller::class,'patch']);
Route::delete('/delete-flight', [FlightContrller::class,'destroy']);

// ====END FLIGHTS====

// ====PASSENGER====

Route::get('/add-passenger',[PassengerContrller::class,'index']);
Route::post('/add-passenger',[PassengerContrller::class,'store']);
Route::get('/view-flights',[PassengerContrller::class,'show']);
Route::get('/update-passenger/{id}', [PassengerContrller::class,'update']);
Route::post('/update-passenger/{id}', [PassengerContrller::class,'patch']);
Route::delete('/delete-passenger', [PassengerContrller::class,'destroy']);
// ====END FLIGHTS====

// ====AIRCRAFT====
Route::get('/add-aircraft',[AircraftContrller::class,'index']);
Route::post('/add-aircraft',[AircraftContrller::class,'store']);
Route::get('/view-aircrafts',[AircraftContrller::class,'show']);
Route::post('/update-aircraft/{id}',[AircraftContrller::class,'patch']);
Route::get('/update-aircraft/{id}',[AircraftContrller::class,'update']);
Route::delete('/delete-aircraft/{id}',[AircraftContrller::class,'destroy']);

// ====END AIRCRAFT====