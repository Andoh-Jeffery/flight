<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew;
use App\Models\Flight;
use App\Models\FlightCrew;

class FlightCrewController extends Controller
{
    //
    public function index(){
        $crew=Crew::all();
        $flight=Flight::all();

        return view('crew\add-crew-flight',["crew"=>$crew,"flight"=>$flight]);
    
    } 
    public function store(){
        $fcrew=new FlightCrew;
        $fcrew->crew_id=request('crew_id');
        $fcrew->flight_id=request('flight_id');
        $fcrew->save();
        return redirect('view-crews');
    }
}