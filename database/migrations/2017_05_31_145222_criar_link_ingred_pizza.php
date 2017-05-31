<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarLinkIngredPizza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes_pizza', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ingredientes_id')->unsigned();
            $table->integer('pizza_id')->insigned();
            $table->foreign('ingredientes_id')->references('id')->on('ingredientes');
            $table->foreign('pizza_id')->references('id')->on('pizza');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('ingredientes_pizza', function (Blueprint $table) {
            $table->dropForeign('');
        });
        Schema::dropIfExists('ingredientes_pizza');
    }
}
