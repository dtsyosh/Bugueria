<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estoque extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unidade');
            $table->integer('ingredientes_id')->unsigned();
            $table->integer('quantidade');

            $table->foreign('ingredientes_id')->references('id')->on('ingredientes');
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
        Schema::create('estoque', function (Blueprint $table) {
           $table->dropForeign('estoque_ingredientes_id_foreign');
        });
        Schema::dropIfExists('estoque');
    }
}
