<?php

namespace App;


class Carrinho
{
    public $pizzas = null;
    public $valorTotal = 0.0;
    public $qtItens = 0;
    public function __construct($oldCarrinho)
    {
        if($oldCarrinho) {
            $this -> pizzas = $oldCarrinho -> pizzas;
            $this -> valorTotal = $oldCarrinho -> valorTotal;
            $this -> qtItens = $oldCarrinho -> qtItens;
        }
    }

    public function adicionarPizza($pizza, $id) {
        $this -> pizzas[$id] = $pizza;
        $this -> valorTotal += $pizza -> preco;
        $this -> qtItens++;
    }
}