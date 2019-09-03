<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fbdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserData', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fbid');
            $table->string('Profpic');
            $table->string('Username');
            $table->string('Email');
           
            $table->string('usertag');
            $table->string('desc');
           
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
    }
}
