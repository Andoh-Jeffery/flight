<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AircraftContrller;
use App\Http\Controllers\FlightContrller;
use App\Http\Controllers\PassengerContrller;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\FlightCrewController;
use App\Http\Controllers\AuthController;

use App\Models\FLight;
use App\Models\Aircraft;
use App\Models\Passenger;
use App\Models\Crew;

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

Route::get('/', [AuthController::class,'show'])->name('login');
Route::get('/logout',[AuthController::class, 'logout']);
Route::post('/login',[AuthController::class, 'login']);
Route::get('/dashboard', function () {
    $flight=Flight::count();
    $crew=Crew::count();
    $passenger=Passenger::count();
    $aircraft=Aircraft::count();
    return view('dashboard',['flight'=>$flight,'crew'=>$crew,'passenger'=>$passenger,'aircraft'=>$aircraft]);
})->middleware('auth');
// ====FLIGHTS====
Route::get('/add-flight',[FlightContrller::class,'index'])->middleware('auth');
Route::post('/add-flight',[FlightContrller::class,'store'])->middleware('auth');
Route::get('/view-flights',[FlightContrller::class,'show'])->middleware('auth');
Route::get('/update-flight/{id}', [FlightContrller::class,'update'])->middleware('auth');
Route::get('flight-details/{id}', [FlightContrller::class,'getPassengers'])->middleware('auth');
// Route::get('/details',function(){return view('flight\flight-details');});
Route::post('/update-flight/{id}', [FlightContrller::class,'patch'])->middleware('auth');
Route::delete('/delete-flight/{id}', [FlightContrller::class,'destroy'])->middleware('auth');

// ====END FLIGHTS====

// ====FLIGHT BOOKING====
Route::get('/book-flight',[BookingController::class,'index'])->middleware('auth');
Route::post('/book-flight',[BookingController::class,'store'])->middleware('auth');
// ====END FLIGHT BOOKING====

// ====FLIGHT CREW====
Route::get('/add-flight-crew',[FlightCrewController::class,'index'])->middleware('auth');
Route::post('/add-flight-crew',[FlightCrewController::class,'store'])->middleware('auth');
// ====END FLIGHT CREW====
// ====PASSENGER====

Route::get('/add-passenger',[PassengerContrller::class,'index'])->middleware('auth');
Route::post('/add-passenger',[PassengerContrller::class,'store'])->middleware('auth');
Route::get('/view-passengers',[PassengerContrller::class,'show'])->middleware('auth');
Route::get('/update-passenger/{id}', [PassengerContrller::class,'update'])->middleware('auth');
Route::post('/update-passenger/{id}', [PassengerContrller::class,'patch'])->middleware('auth');
Route::delete('/delete-passenger/{id}', [PassengerContrller::class,'destroy'])->middleware('auth');
// ====END PASSENGER====

// ====AIRCRAFT====
Route::get('/add-aircraft',[AircraftContrller::class,'index'])->middleware('auth');
Route::post('/add-aircraft',[AircraftContrller::class,'store'])->middleware('auth');
Route::get('/view-aircrafts',[AircraftContrller::class,'show'])->middleware('auth');
Route::post('/update-aircraft/{id}',[AircraftContrller::class,'patch'])->middleware('auth');
Route::get('/update-aircraft/{id}',[AircraftContrller::class,'update'])->middleware('auth');
Route::delete('/delete-aircraft/{id}',[AircraftContrller::class,'destroy'])->middleware('auth');

// ====END AIRCRAFT====

// ====CREW====
Route::get('/add-crew',[CrewController::class,'index'])->middleware('auth');
Route::post('/add-crew',[CrewController::class,'store'])->middleware('auth');
Route::get('/view-crews',[CrewController::class,'show'])->middleware('auth');
Route::post('/update-crew/{id}',[CrewController::class,'patch'])->middleware('auth');
Route::get('/update-crew/{id}',[CrewController::class,'update'])->middleware('auth');
Route::get('/delete-crew/{id}',[CrewController::class,'destroy'])->middleware('auth');
// ====END CREW====