<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aircraft;

class AircraftContrller extends Controller
{
    //
    public function index(){
        return view('add-aircraft');
    }
    public function store(){
        $aircraft=new Aircraft;
        $aircraft->serial_number=request('serial_number');
        $aircraft->manufacturer=request('manufacturer');
        $aircraft->model=request('model');
        $aircraft->save();
        return redirect('view-aircrafts');
    }

    public function show(){
        $aircraft=Aircraft::all();
        return view('aircraft\view-aircrafts',['aircrafts'=>$aircraft]);
    }

    public function patch($id){
        $aircraft=Aircraft::find($id);
        $aircraft->serial_number=request('serial_number');
        $aircraft->manufacturer=request('manufacturer');
        $aircraft->model=request('model');
        $aircraft->update();
        return redirect('view-aircrafts');
    }

    public function update($id){
        $aircraft=Aircraft::find($id);
        return view('aircraft\update-aircraft',['aircraft'=>$aircraft]);
    }
    public function destroy($id){
        Aircraft::destroy($id);
        return redirect('view-aircrafts');
    }
}