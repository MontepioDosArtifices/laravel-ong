<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Expense extends Model
{

  protected $fillable = [
    'category_id', 'value', 'description','payment_date'
  ];

  public function listAll()
  {
    return $allExpenses = DB::table('expenses')
    ->join('category_expenses', 'expenses.category_id', '=', 'category_expenses.id')
    ->select('expenses.*', 'category_expenses.name')->get();
  }
}
