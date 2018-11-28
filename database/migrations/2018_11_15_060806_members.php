<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('members', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('member_name');
            $table->tinyInteger('gender');
            $table->date('birthday');
            $table->string('email')->unique();
            $table->string('card_name');
            $table->string('card_no')->unique();
            $table->integer('security_code');
            $table->date('limit');
            $table->date('subscribed_at');
            $table->date('unsubscribed_at');
            $table->tinyInteger('member_status');
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
        //
        Schema::dropIfExists('members');
    }
}
