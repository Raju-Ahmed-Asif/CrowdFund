<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Crisis;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

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


    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'donor' => 'required',
        'from_date' => 'required|date|after_or_equal:today', // Validate that from_date is today or in the future
        'to_date' => 'required|date|after_or_equal:from_date', // Validate that to_date is after or equal to from_date
        'amount_need' => 'required|numeric|min:0',
        'amount_raised' => 'required|numeric|min:0',
        'about_crisis' => 'required|string',
    ]);

    if ($validator->fails()) {
        Alert::toast()->warning('Something went wrong', 'Failed');

        return redirect()->back()->withErrors($validator)->withInput();
    }
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
    Alert::toast()->success('Crisis created', 'success');
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


    // Calculate the percentage for each crisis

    foreach ($crisis as $crisisItem) {
    $crisisItem->percentage = ($crisisItem->amount_raised / $crisisItem->amount_need) * 100;
    }

    return view('frontend.pages.crisis',compact('crisis'));

  }

  public function crisis_details($id){

    $crisisDetails = Crisis::find($id);

    return view('frontend.pages.crisis.crisisdetails',compact('crisisDetails'));
  }


  public function crisis_edit($id){
    $crisis=Crisis::find($id);
    return view('backend.pages.crisis.edit',compact('crisis'));

  }







}
