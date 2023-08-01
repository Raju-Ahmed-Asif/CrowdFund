<?php

namespace App\Http\Controllers;
use App\Models\Expense_category;

use Illuminate\Http\Request;

class Expense_categoryController extends Controller
{
    public function index(){
        $expense = Expense_category::all();
        return view('backend.pages.expense_categories.index',compact('expense'));
    }
    public function create(){
        return view('backend.pages.expense_categories.create_expense_category');
    }
          public function store(Request $request ){
            $request->validate([
                'name'=>'required',
                'status'=>'required',
                'description'=>'required'
              ]);
    Expense_category::create([
        // clm name=>$request->inpt fld
        "name" => $request->name,
        "status"      =>$request->status,
        "description" => $request->description
    ]);

    return redirect()->route('index.expense_categories');
    }
}
