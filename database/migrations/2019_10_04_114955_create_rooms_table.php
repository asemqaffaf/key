<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('users');
            $table->string('title');
            $table->string('location');
            $table->Integer('price');
            $table->Integer('floor');
            $table->string('gender')->nullable();
            $table->Integer('phone');
            $table->text('description');
            $table->Integer('num_bed');
            $table->smallInteger('rating')->nullable();
//            $table->string('img');
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
        Schema::dropIfExists('rooms');
    }
}
