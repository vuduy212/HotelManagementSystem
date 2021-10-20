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
            $table->string('client_name');
            $table->string('ID_card');
            $table->float('phone');
            $table->string('email');
            $table->string('address');
            $table->integer('payment_method');
            $table->float('total_money');
            $table->integer('bill_status');
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
