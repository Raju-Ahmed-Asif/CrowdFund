<?php

namespace App\Http\Controllers\Website;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Faker\Guesser\Name;
use GuzzleHttp\Psr7\Request as Psr7Request;

class HomeController extends Controller
{
    public function homepage(){


        return view('frontend.pages.home');
    }
    public function registration(){

        return view('frontend.pages.registration');
    }


    public function login(){

        return view('frontend.pages.login');

    }
    public function login_match(Request $request)
    {

        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->guard('samsu')->attempt($credentials))
        {
            return redirect()->route('homepage');
        }
        return redirect()->route('homepage');

    }


}
