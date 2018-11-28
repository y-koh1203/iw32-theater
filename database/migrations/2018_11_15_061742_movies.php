<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('movie_name');
            $table->date('showing_open');
            $table->date('showing_close');
            $table->integer('genre_no');
            $table->text('description');
            $table->time('screening_time');
            $table->date('registed_at');
            $table->date('updated_at');
            $table->tinyInteger('movie_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
