<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{

  protected $fillable = [
    'category_id', 'value', 'description','payment_date'
  ];

}
