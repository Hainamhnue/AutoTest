<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresPersonalFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores_personal_faculty', function (Blueprint $table) {
            $table->id();
            $table->integer('i1')->nullable();
            $table->integer('i2')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('faculty_id')->nullable();
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
        Schema::dropIfExists('scores_personal_faculty');
    }
}
