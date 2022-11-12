<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('type_name');
            $table->string('nawa_emp')->nullable();
            $table->string('disc_course');
            $table->integer('number_of_hour');
            $table->integer('hour');
            $table->date('start_course');
            $table->date('finish_course');
            $table->time('sat')->nullable();
            $table->time('sun')->nullable();
            $table->time('mon')->nullable();
            $table->time('tus')->nullable();
            $table->time('thr')->nullable();
            $table->time('wen')->nullable();
            $table->time('fri')->nullable();
            $table->foreignId('trainer_id');
            $table->foreignId('center_id');
            $table->foreignId('lab_id');
            $table->foreignId('calender_id');
            $table->foreignId('category_id');
            $table->foreignId('activity_id');
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
        Schema::dropIfExists('courses');
    }
}
