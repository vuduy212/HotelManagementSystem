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
            $table->string('status');
            $table->string('client_name')->nullable();
            $table->string('ID_Card')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('category_name')->nullable();
            $table->string('room_name')->nullable();
            $table->integer('number_of_adults')->unsigned()->nullable();
            $table->integer('number_of_children')->unsigned()->nullable();
            $table->datetime('checkin')->nullable();
            $table->datetime('checkout')->nullable();
            $table->float('price')->nullable();
            $table->string('payment')->nullable();
            $table->double('time')->nullable();
            $table->string('code')->nullable();
            // $table->bigInteger('room_id')->unsigned();
            $table->foreign('room_name')->references('room_name')->on('rooms')->nullable();
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
