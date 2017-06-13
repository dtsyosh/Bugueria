<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('ingredientes') -> insert([
            'nome' => 'mussarela',
            'preco_porcao' => 3.50,
            'unidade' => 'gramas',
            'qtde_porcao' => 50,
            'qtde_total' => 5000
        ]);

        DB::table('ingredientes') -> insert([
            'nome' => 'presunto',
            'preco_porcao' => 1.50,
            'unidade' => 'gramas',
            'qtde_porcao' => 50,
            'qtde_total' => 6000
        ]);

        DB::table('ingredientes') -> insert([
            'nome' => 'catupiry',
            'preco_porcao' => 3.50,
            'unidade' => 'gramas',
            'qtde_porcao' => 100,
            'qtde_total' => 3000
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
