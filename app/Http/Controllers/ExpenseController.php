<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index_expense(){
        $expense=Expense::all();

        return view("backend.pages.expense.index",compact('expense'));
    }

    public function create_expense(){

        return view("backend.pages.expense.create");
    } 

    public function store_expense(Request $request){

        Expense::create([

         "amount"     => $request-> amount,
         "details"    => $request-> details

        ]);
        return redirect()->route('index.expense');
     
      

    }
}
