<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonateController extends Controller
{
    public function donateForm(){
        return view('frontend.pages.donate.donate');
    }

    public function donatestore(Request $request){

        $validator = Validator::make($request->all(), [
            'suggestion' => 'required|string|max:255',
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'amount' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            
            return redirect()->back()->withErrors($validator)->withInput();
        }




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
