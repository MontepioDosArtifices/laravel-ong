<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
  {
    $allCourses = Courses::all();
    return view('courses-list', ['allCourses'=> $allCourses]);
  }

  public function create()
  {
    return view('courses-create');
  }

  public function store(Request $request)
  {
    $course = new Courses();
    $course->title = $request->title;
    $course->limit = $request->limit;
    $course->description = $request->description;
    $course->save();

    return redirect()->route('course.index');
  }

  public function show(Courses $course)
  {
    //
  }

  public function edit(Courses $course)
  {
    return view('courses-edit', ['course' => $course]);
  }

  public function update(Request $request, Courses $course)
  {
    $course->title = $request->title;
    $course->limit = $request->limit;
    $course->description = $request->description;
    $course->save();

    return redirect()->route('course.index');
  }

  public function destroy(Courses $course)
  {
    $course->delete();
    return redirect()->route('course.index');
  }
}
