<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender')->nullable();
            $table->integer('mobile')->nullable();
            $table->integer('comp_id')->unsigned()->nullable();
            $table->foreign('comp_id')->references('id')->on('companies')->onDelete('cascade');
            $table->integer('user_type')->unsigned()->nullable();
            $table->foreign('user_type')->references('id')->on('user_types')->onDelete('cascade');
            $table->string('user_image');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
