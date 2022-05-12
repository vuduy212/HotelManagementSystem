<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->unique();
            $table->string('description');
            $table->text('images')->nullable();
            $table->float('price')->nullable();
            $table->integer('area')->nullable();
            $table->integer('number_of_adults')->nullable();
            $table->integer('number_of_children')->nullable();
            $table->integer('number_of_double_bed')->nullable();
            $table->integer('number_of_single_bed')->nullable();
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
        Schema::dropIfExists('room_categories');
    }
}
