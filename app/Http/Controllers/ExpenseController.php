<?php

namespace App\Http\Controllers;

use App\CategoryExpense;
use App\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{

    public function index()
    {
      $allExpenses = DB::table('expenses')
        ->join('category_expenses', 'expenses.category_id', '=', 'category_expenses.id')
        ->select('expenses.*', 'category_expenses.name')
        ->get();

      return view('expenses-list', ['allExpenses' => $allExpenses]);
    }

    public function create()
    {
      $allCategories = CategoryExpense::all();
      return view('expenses-create', ['allCategories' => $allCategories]);
    }

    public function store(Request $request)
    {
        $expense = new Expense();
        $expense->value = $request->value;
        $expense->category_id = $request->category_id;
        $expense->payment_date = $request->payment_date;
        $expense->description = $request->description;
        $expense->save();

        return redirect()->route('expense.index');
    }

    public function show(Expense $expense)
    {
        //
    }

    public function edit(Expense $expense)
    {
      $allCategories = CategoryExpense::all();
      return view('expenses-edit', ['expense' => $expense, 'allCategories' => $allCategories]);
    }

    public function update(Request $request, Expense $expense)
    {
      $expense->category_id = $request->category_id;
      $expense->value = $request->value;
      $expense->description = $request->description;
      $expense->payment_date = $request->payment_date;
      $expense->save();

      return redirect()->route('expense.index');
    }

    public function destroy(Expense $expense)
    {
      $expense->delete();
      return redirect()->route('expense.index');
    }
}
