<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomCategoryServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_category_service', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->string('service_name');
            $table->foreign('category_name')->references('category_name')->on('room_categories');
            $table->foreign('service_name')->references('service_name')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_category_service');
    }
}
