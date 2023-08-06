<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

          $validator = Validator::make($request->all(), [

            'name' => 'required|string|max:100',
            'email' => 'required|email|unique',
            'amount' => 'required|min:0',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }

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
