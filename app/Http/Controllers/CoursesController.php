<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
    $imageUpload = new ImageUploadController();
    $upload = $imageUpload->store($request->file('image'), 'courses');

    $course = new Courses();
    $course->title = $request->title;
    $course->limit = $request->limit;
    $course->slug = Str::slug($request->title);
    $course->description = $request->description;
    $course->image = $upload;
    $course->full = false;
    $course->save();

    return redirect()->route('course.index');
  }

  public function show(Courses $course)
  {
    $allStudents = DB::select('select * from courses_students inner join students on student_id = students.id where course_id = (?)', [$course->id]);
    return view('student-list', ['allStudents' => $allStudents]);
  }

  public function edit(Courses $course)
  {
    return view('courses-edit', ['course' => $course]);
  }

  public function update(Request $request, Courses $course)
  {
    $course->limit = $request->limit;
    $course->title = $request->title;
    $course->description = $request->description;
    // $course->image = $request->image;
    $course->save();
    if($this->checkLimit($course));

    return redirect()->route('course.index');
  }

  public function destroy(Courses $course)
  {
    DB::table('courses')->where('id', $course->id)->delete();
    return redirect()->route('course.index');
  }

  public function checkLimit(Courses $course)
  {
    $limit = (Courses::select('limit')->where('id', $course->id)->get())[0]->limit;
    $occupied = DB::table('courses_students')->select('id')->where('course_id', $course->id)->get();

    if (!isset($occupied[0])){
      $occupied = 0;
    } else{
      $occupied = sizeof($occupied);
    }

    if ($occupied >= $limit) {
      $change = DB::table('courses')->where('id', $course->id)->update(['full' => true]);
      return false;
    }else{
      $change = DB::table('courses')->where('id', $course->id)->update(['full' => false]);
      return true;
    }
  }
}
