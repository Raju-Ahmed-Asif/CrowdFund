<?php

namespace App\Http\Controllers;

use App\Models\CrisisCategory;
use Illuminate\Http\Request;

class CrisisCategoryController extends Controller
{

   public function index(){
    $catData= CrisisCategory::all();
    return view('backend.pages.crisisCategories.index',compact('catData')) ;
   }

   public function create(){

    return view('backend.pages.crisisCategories.create');
   }

   public  function store(Request  $request){
// dd($request->all());
    $request->validate([
        'name'=>'required'
    ]);

    CrisisCategory::create([
        'name'=>$request->name,
    ]);
    return redirect()->back();

   }
}
