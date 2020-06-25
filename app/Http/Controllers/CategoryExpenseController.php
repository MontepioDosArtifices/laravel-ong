<?php

namespace App\Http\Controllers;

use App\CategoryExpense;
use Illuminate\Http\Request;

class CategoryExpenseController extends Controller
{
  public function index()
  {
    $allCategories = CategoryExpense::all();
    return view('category-list', ['allCategories'=> $allCategories]);
  }

  public function create()
  {
    return view('category-expenses-create');
  }

  public function store(Request $request)
  {
    $category = new CategoryExpense();
    $category->name = $request->name;
    $category->save();

    return redirect()->route('category.index');
  }

  public function show(CategoryExpense $category)
  {
    //
  }

  public function edit(CategoryExpense $category)
  {
    return view('category-edit', ['category' => $category]);
  }

  public function update(Request $request, CategoryExpense $category)
  {
    $category->name = $request->name;
    $category->save();

    return redirect()->route('category.index');
  }

  public function destroy(CategoryExpense $category)
  {
    $category->delete();
    return redirect()->route('category.index');
  }

}
