<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cep')->nullable();
            $table->string('rua')->nullable();
            $table->string('bairro')->nullable();
            $table->integer('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('telefone')->nullable();
            $table->string('forma_pagamento')->nullable();
            $table->string('troco')->nullable();
            $table->decimal('valor', 5, 2);
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
        Schema::dropIfExists('pedidos');
    }
}
