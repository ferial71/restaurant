<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->text('description');
            $table->boolean('status');
            $table->string('image');
            $table->string('price');
            $table->unsignedBigInteger('menu_id');
            $table->timestamps();

            $table->foreign('menu_id')->references('id')->on('menus');

        });
        Schema::create('item_meal', function (Blueprint $table) {
            $table->id();
            $table->string('discount');
            $table->unsignedBigInteger('meal_id');
            $table->unsignedBigInteger('item_id');
            $table->timestamps();

            $table->foreign('meal_id')->references('id')->on('meals');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals');
        Schema::dropIfExists('item_meal');
    }
}
