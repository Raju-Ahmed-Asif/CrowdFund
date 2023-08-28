<?php

namespace App\Http\Controllers;

use App\Models\Crisis;
use App\Models\Volunteer;
use App\Models\VolunteerUser;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class VolunteerController extends Controller
{
    public function index(){
        $volunteers =VolunteerUser::paginate(5);

        return view('backend.pages.volunteer.index',compact('volunteers'));
    }
    public function create_volunteer(){
        $crisis=Crisis::all();
        return view('backend.pages.volunteer.create',compact('crisis'));
    }




    public function store_volunteer (Request $request){
        /* $request->validate([
            'name'=>'required',
            'address'=>'required',
            'email' => 'string | email | unique:users',
            'phone'=>'required|numeric|min:11'
          ]); */

          $validator = Validator::make($request->all(), [

            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:volunteers|max:50',
            'address' => 'required',
            'phone' => 'required|numeric|min:11' ,
        ]);

        if ($validator->fails()) {
            Alert::toast()->warning('Something went wrong', 'Failed');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //dd($request->all());

        Volunteer::create([
        "name"              => $request->name,
        "address"           => $request->address,
        "email"             => $request->email,
        "volunteer_id"       =>$request->volunteer,
        "phone"             => $request->phone



        ]);


        return redirect()->route('index.volunteer');

    }


    public function volunteer_delete($id){

        VolunteerUser::destroy($id);

        Alert::toast()->error('Deleted');

        return back();
    }
}
