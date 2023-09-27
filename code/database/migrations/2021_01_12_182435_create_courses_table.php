<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->String('course_Name');
            $table->unsignedBigInteger('email_id')->unsigned();
            $table->unsignedBigInteger('trainer_id')->unsigned();
           $table->text('Course_deatials');
            $table->text('Course_Image');
            $table->foreign('email_id')->references('id')->on('trainers')->onDelete('cascade');
             $table->foreign('trainer_id')->references('id')->on('trainers')->onDelete('cascade');
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
