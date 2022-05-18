<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('CMND');
            $table->string('phone');
            $table->string('email');
            $table->string('category_name');
            $table->string('room_name');
            $table->integer('number_of_adults')->unsigned();
            $table->integer('number_of_children')->unsigned();
            $table->datetime('checkin');
            $table->datetime('checkout');
            $table->float('price');
            $table->integer('payment');
            $table->double('time');
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
        Schema::dropIfExists('reservations');
    }
}
