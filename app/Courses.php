<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Courses extends Model
{
  protected $fillable = [
    'title', 'limit', 'description'
  ];

  public function listAll()
  {
    return $allCourses = DB::select('select * from courses');
  }
}
