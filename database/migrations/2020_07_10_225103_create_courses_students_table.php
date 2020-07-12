<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesStudentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('courses_students', function (Blueprint $table) {

      $table->id();
      $table->unsignedInteger('course_id');
      $table->foreign('course_id')->references('id')->on('courses');

      $table->unsignedInteger('student_id');
      $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('courses_students');
  }
}
