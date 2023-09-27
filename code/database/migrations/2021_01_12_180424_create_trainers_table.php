<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->String('name_Trainer');
            $table->String('email_Trainer');
            $table->String('phone_Trainer');
            $table->String('eduction_Trainer');
            $table->date('Birthday_Trainer');
            $table->string('role')->default(2);
            $table->String('password');
            $table->text('image');
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
        Schema::dropIfExists('trainers');
    }
}
