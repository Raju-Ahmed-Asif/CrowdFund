<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donateForm(){
        return view('frontend.pages.donate.donate');
    }

    public function donatestore(Request $request){
       // dd($request->all());

        Donate::create([
            "suggestion"=>$request->suggestion,
            "name"=>$request->name,
            "email"=>$request->email,
            "amount"=>$request->amount,

        ]);
        return back();
    }
}
