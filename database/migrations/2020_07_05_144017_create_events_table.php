<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{

  public function up()
  {
    Schema::create('events', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('className')->default('bg-info');
      $table->timestamp('start')->nullable();
      $table->timestamp('end')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('events');
  }
}
