<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('post_by')->unsigned();
            $table->foreign('post_by')->references('id')->on('users')->onDelete('cascade');
            $table->integer('job_type')->unsigned();
            $table->foreign('job_type')->references('id')->on('job_types')->onDelete('cascade');
            $table->date('startTime');
            $table->date('endTime');
            $table->text('description');
            $table->text('location');
            $table->integer('vacancy');
            $table->integer('salary');
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
        Schema::drop('posts');
    }
}
