<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Crisis_StoreController extends Controller
{
    public function crisis_store(){

        return view('backend,pages,crisis,crisis-store');
    }
}
