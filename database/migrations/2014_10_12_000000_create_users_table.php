<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->default('12345678');
            $table->string('img')->default('1588491774_HNUE.jpg');
            $table->integer('phone')->nullable();
            $table->string('bomon')->nullable();
            $table->text('introduction')->nullable();
            $table->boolean('isadmin')->default(0);
            $table->boolean('isdonvi')->default(0);
            $table->boolean('isuser')->default(1);
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
        Schema::dropIfExists('users');
    }
}
