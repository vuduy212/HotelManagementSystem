<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_bills', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->date('date_start');
            $table->date('date_finish');
            $table->string('client_name');
            $table->string('ID_Card');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->integer('payment');
            $table->integer('bill_status');
            $table->foreign('category_id')->references('id')->on('room_categories');
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
        Schema::dropIfExists('room_bills');
    }
}
