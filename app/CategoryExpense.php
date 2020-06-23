<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryExpense extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name'
  ];

  public function listAll()
  {
    return $allCategories = DB::select('select * from category_expenses');
  }
}
