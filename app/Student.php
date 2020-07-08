<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
  protected $fillable = [
    'name', 'email', 'cpf', 'phone'
  ];

  public function listAll()
  {
    return $allStudents = DB::select('select * from students');
  }

  public function courses()
  {
    return $this->belongsToMany('App\Courses');
  }
}
