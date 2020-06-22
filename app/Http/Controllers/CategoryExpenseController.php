<?php

namespace App\Http\Controllers;

use App\CategoryExpense;
use Illuminate\Http\Request;

class CategoryExpenseController extends Controller
{
  public function registerCategory(Request $request){
    $category = new CategoryExpense;
    $category->name = $request->name;
    $category->save();

    return redirect()->route('category.expenses.form');
  }

  public function createForm(){
    return view('category-expenses');
  }
}
