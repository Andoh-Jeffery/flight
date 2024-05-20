<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aircraft;
use App\Models\Flight;

class FlightContrller extends Controller
{
    //
   
    public function index(){
        $aircraft=Aircraft::all();
        return view('flight\add-flight',['aircrafts'=>$aircraft]);
    }
    public function store(){
        $flight=new Flight;
        $flight->aircraft_id=request('aircraft_id');
        $flight->flight_number=request('flight_number');
        $flight->origin=request('origin');
        $flight->destination=request('destination');
        $flight->date=request('date');
        $flight->arr_time=request('arr_time');
        $flight->dep_time=request('dep_time');
        // dd($flight);
        $flight->save();
        return redirect('view-flights');
    }

    public function show(){
        $flight=Flight::all();
        return view('flight\view-flights',['flights'=>$flight]);
    }

    public function patch($id){
        $flight=Flight::find($id);
        $flight->flight_number=request('flight_number');
        $flight->origin=request('origin');
        $flight->destination=request('destination');
        $flight->date=request('date');
        $flight->arr_time=request('arr_time');
        $flight->dep_time=request('dep_time');
        $flight->update();
        return redirect('flight\view-flights');
    }

    public function update($id){
        $flight=Flight::find($id);
        $aircraft=Aircraft::all();
        return view('flight\update-flight',['flight'=>$flight,'aircraft'=>$aircraft]);
    }
    public function destroy($id){
        Flight::destroy($id);
        return redirect('flight\view-flights');
    }
}