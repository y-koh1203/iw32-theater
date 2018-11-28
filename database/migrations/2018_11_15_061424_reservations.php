<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //task 外部参照
        Schema::create('reservations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('schedule_no');
            $table->integer('seat_no');
            $table->integer('member_no');
            $table->tinyInteger('ticket_status');
            $table->integer('type_no');
            $table->date('reservation_date');
            $table->date('ticket_date');
            $table->date('cancel_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
