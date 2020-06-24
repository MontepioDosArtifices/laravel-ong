<?php

namespace App\Http\Controllers;

use App\CategoryExpense;
use App\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ExpenseController extends Controller
{

  public function createForm()
  {
    $categoryExpenses = new CategoryExpense();
    $allCategories = $categoryExpenses->listAll();

    return view('expenses', ['allCategories' => $allCategories]);
  }

  public function listCategories()
  {
    $categoryExpenses = new CategoryExpense();
    $allCategories = $categoryExpenses->listAll();

    return view('category-list', ['allCategories' => $allCategories]);
  }

  public function listExpenses()
  {
    $expenses = new Expense();
    $allExpenses = $expenses->listAll();

    return view('expenses-list', ['allExpenses' => $allExpenses]);
  }

  public function create(Request $request)
  {
    $expense = new Expense();
    $expense->value = $request->value;
    $expense->category_id = $request->category_id;
    $expense->payment_date = $request->payment_date;
    $expense->description = $request->description;
    $expense->save();

    return redirect()->route('expenses.form');
  }

}
