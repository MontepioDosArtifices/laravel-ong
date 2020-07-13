<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;

class SiteCourseController extends Controller
{
  public function index()
  {
    $courses = Courses::select('*')->orderBy('id', 'desc')->get();
    return view('course-list-site', ['courses' => $courses]);
  }

  public function show($slug)
  {
    $course = Courses::select('*')->where('slug', $slug)->first();
    return view('course-show', ['course' => $course]);
  }
}
