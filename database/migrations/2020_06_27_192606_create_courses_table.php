<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
  public function up()
  {
    Schema::create('courses', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->integer('limit');
      $table->string('slug');
      $table->text('description');
      $table->boolean('full');
      $table->string('image');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('courses');
  }
}
