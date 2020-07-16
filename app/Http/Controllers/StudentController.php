<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
  public function index(Student $student)
  {
    $allStudents = DB::table('students')
      ->join('courses', 'students.id', '=', 'courses.id')
      ->select('students.*', 'courses.id')
      ->get();
    return view('student-list', ['student' => $student, 'allStudents' => $allStudents]);
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    $course = (int)$request->course;

    if ($this->checkLimit($course)){

      $student = new Student();
      $student->name = $request->name;
      $student->email = $request->email;
      $student->cpf = $request->cpf;
      $student->phone = $request->phone;
      $student->save();

      DB::insert('insert into courses_students (course_id, student_id) values (?, ?)', [$request->course, $student->id]);

      if (!$this->checkLimit($course)) {
        $change = DB::table('courses')->where('id', $course)->update(['full' => true]);
        return redirect()->route('site');
      }
      return redirect()->route('site');
    }
  }

  public function show(Student $student)
  {
    //
  }

  public function edit(Student $student)
  {
    $allStudents = Student::all();
    return view('student-edit', ['student' => $student, 'allStudents' => $allStudents]);
  }

  public function update(Request $request, Student $student)
  {
    $student->name = $request->name;
    $student->email = $request->email;
    $student->phone = $request->phone;
    $student->save();

    return redirect()->route('student.index');
  }

  public function destroy(Student $student)
  {
    $course = DB::table('students')
    ->join('courses_students', 'courses_students.student_id', '=', 'students.id')
    ->select('courses_students.course_id')
    ->first();
    DB::table('courses')->where('id', $course->course_id)->update(['full' => false]);
    DB::table('students')->where('id', $student->id)->delete();
    return redirect()->route('course.index');
  }

  public function checkLimit($course)
  {
    $limit = (Courses::select('limit')->where('id', $course)->get())[0]->limit;
    $occupied = DB::table('courses_students')->select('id')->where('course_id', $course)->get();

    if (!isset($occupied[0])){
      $occupied = 0;
    } else{
      $occupied = sizeof($occupied);
    }

    if ($occupied >= $limit) {
      $change = DB::table('courses')->where('id', $course)->update(['full' => true]);
      return false;
    }else{
      $change = DB::table('courses')->where('id', $course)->update(['full' => false]);
      return true;
    }
  }
}
