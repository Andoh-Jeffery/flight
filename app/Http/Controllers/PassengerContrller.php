<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassengerContrller extends Controller
{
    //
    public function index(){
        return view('passenger\add-passenger');
    }
    public function store(){
        $passenger=new Passenger;
        $passenger->first_name=requrest('first_name');
        $passenger->last_name=requrest('last_name');
        $passenger->address=requrest('address');
        $passenger->phone=requrest('phone');
        $passenger->save();
        return redirect('passenger\view-passengers');
    }

    public function show(){
        $passenger=Passenger::all();
        return view('passenger\view-passengers',['passengers'=>$passenger]);
    }

    public function patch($id){
        $passenger=Passenger::find($id);
        $passenger->first_name=requrest('first_name');
        $passenger->last_name=requrest('last_name');
        $passenger->address=requrest('address');
        $passenger->phone=requrest('phone');
        $passenger->update();
        return redirect('passenger\view-passengers');
    }

    public function update($id){
        $passenger=Passenger::find($id);
        return view('passenger\update-passenger',['passenger'=>$passenger]);
    }
    public function destroy($id){
        Passenger::destroy($id);
        return redirect('passenger\view-passengers');
    }
}