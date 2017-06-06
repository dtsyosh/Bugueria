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
            $table->integer('id');
            $table->integer('qtde_porcoes');
            $table->integer('ingredientes_id')->unsigned();
            $table->integer('pizza_id')->unsigned();

            $table->primary(['id', 'pizza_id']);

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
            $table->dropForeign('ingredientes_pizza_pizza_id_foreign');
            $table->dropForeign('ingredientes_pizza_ingredientes_id_foreign');
        });

        Schema::dropIfExists('ingredientes_pizza');
    }
}
