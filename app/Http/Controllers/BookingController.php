<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Passenger;
use App\Models\FlightPassengers;

class BookingController extends Controller
{
    //
    public function index(){
        $passenger=Passenger::all();
        $flight=Flight::all();

        return view('flight\book-flight',["passenger"=>$passenger,"flight"=>$flight]);
    
    }

    public function store(){
        $book=new FlightPassengers;
        $book->passenger_id=request('passenger_id');
        $book->flight_id=request('flight_id');
        $book->save();
        return redirect('flight/view-flights');
    }
}