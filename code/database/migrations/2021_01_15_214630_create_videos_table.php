<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Video_Name');
            $table->text('Video_description');
            $table->unsignedBigInteger('coach_id')->unsigned();
            $table->foreign('coach_id')->references('id')->on('trainers')->onDelete('cascade');
            $table->unsignedBigInteger('Course_id')->unsigned();
            $table->foreign('Course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->binary('video');
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
        Schema::dropIfExists('videos');
    }
}
