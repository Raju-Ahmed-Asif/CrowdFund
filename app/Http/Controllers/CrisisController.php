<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Crisis;
use Illuminate\Http\Request;

class CrisisController extends Controller
{
   public function index()

   {
    $crisis=Crisis::with('crido')->get();
    return view('backend.pages.crisis.index',compact('crisis'));
   }

   public function create()
   {
    $donor=Donor::all();
     return view('backend.pages.crisis.create',compact('donor'));
   }

   public function store(Request $request)
   {
    // dd($request->all());
//     $request->validate([
//       'name'=>'required',
//       'description'=>'required',
//       'image'=>'required',
//       'amount_need'=>'required'
//   ]);
     //dd($request->all());


          $imageName = null;
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = date('Ymdis').'.'.$file->extension();
            $file->storeAs('uploads', $imageName, 'public');


           // dd($imageName);


    }
    Crisis::create([
        "name"          => $request->name,
        "description"   => $request->description,
        "image"         => $imageName,
        "donor_id"       =>$request->donor,
        "from_date"     => $request->from_date,
        "to_date"       => $request->to_date,
        "amount_need"   => $request->amount_need,
        "amount_raised" => $request->amount_raised,
        "about_crisis"=>$request->about_crisis
    ]);
     return redirect()->route('index.crisis');
   }



   //report

   public function crisis_report(){

     return view('backend.pages.crisis.crisisReport');

   }


   public function crisis_search(Request $request){

    //dd($request->all());

    $request->validate([
      'from_date'=>'required|date',
      'to_date'=>'required|date|after:from_date'
  ]);

  $from=$request->from_date;
  $to=$request->to_date;

  $crisis=Crisis::whereBetween('created_at', [$from , $to])->get();

  //dd($crisis);

  return view('backend.pages.crisis.crisisReport',compact('crisis'));


  }

  public function frontend_crisis(){

    $crisis = Crisis::all();

    return view('frontend.pages.crisis',compact('crisis'));

  }

}
