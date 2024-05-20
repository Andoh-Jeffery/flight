<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;

class PassengerContrller extends Controller
{
    //
    public function index(){
        return view('passenger\add-passenger');
    }
    public function store(){
        $passenger=new Passenger;
        $passenger->first_name=request('first_name');
        $passenger->last_name=request('last_name');
        $passenger->address=request('address');
        $passenger->phone=request('phone');
        $passenger->save();
        return redirect('view-passengers');
    }

    public function show(){
        $passenger=Passenger::all();
        return view('passenger\view-passengers',['passengers'=>$passenger]);
    }

    public function patch($id){
        $passenger=Passenger::find($id);
        $passenger->first_name=request('first_name');
        $passenger->last_name=request('last_name');
        $passenger->address=request('address');
        $passenger->phone=request('phone');
        $passenger->update();
        return redirect('view-passengers');
    }

    public function update($id){
        $passenger=Passenger::find($id);
        return view('passenger\update-passenger',['passenger'=>$passenger]);
    }
    public function destroy($id){
        Passenger::destroy($id);
        return redirect('view-passengers');
    }
}