<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function admin_profile(){

        return view('frontend.Profile.adminProfile');

    }
}
