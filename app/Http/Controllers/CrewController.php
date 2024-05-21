<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew;

class CrewController extends Controller
{
    //
    public function index(){
        return view('crew\add-crew');
    }
    public function show(){
        $crew=Crew::all();
        return view('crew\view-crews',["crews"=>$crew]);
    }

    public function store(){
        $crew=new Crew;
        $crew->employee_number=request('employee_number');
        $crew->first_name=request('first_name');
        $crew->last_name=request('last_name');
        $crew->address=request('address');
        $crew->salary=request('salary');
        $crew->save();
        return redirect('\view-crews');
    }
    public function update($id){
        $crew=Crew::find($id);
        return view('crew\update-crew',["crew"=>$crew]);
    }

    public function patch($id){
        $crew=Crew::find($id);
        $crew->employee_number=request('employee_number');
        $crew->first_name=request('first_name');
        $crew->last_name=request('last_name');
        $crew->address=request('address');
        $crew->salary=request('salary');
        $crew->update();
        // dd($crew);
        return redirect('\view-crews');
    }
    public function destroy($id){
        Crew::destroy($id);
        return redirect('crew\view-crews');
    }
}