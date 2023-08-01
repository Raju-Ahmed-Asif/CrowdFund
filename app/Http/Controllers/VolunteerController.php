<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function index_volunteer(){
        $volunteer =Volunteer::paginate(5);

        return view('backend.pages.volunteer.index',compact('volunteer'));
    }
    public function create_volunteer(){

        return view('backend.pages.volunteer.create');
    }

    public function store_volunteer (Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required'
          ]);

        //dd($request->all());

        Volunteer::create([
        "name"              => $request->name,
        "address"           => $request->address,
        "email"             => $request->email,
        "phone"             => $request->phone
        


        ]);

        
        return redirect()->route('index.volunteer');

    }


    

}
