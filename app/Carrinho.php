<?php

namespace App;


class Carrinho
{
    public $pizzas = Array();
    public $valor_total = 0.0;
    public $quantidade_itens = 0;

    public function __construct($oldCarrinho)
    {
        if ($oldCarrinho) {
            $this->pizzas = $oldCarrinho->pizzas;
            $this->valor_total = $oldCarrinho->valor_total;
            $this->quantidade_itens = $oldCarrinho->quantidade_itens;
        }
    }

    public function adicionar($pizza)
    {
        array_push($this->pizzas, $pizza);
        $this->valor_total += $pizza->preco;
        $this->quantidade_itens++;
    }


    public function remover($key)
    {
        //$key = array_search($pizza, $this->pizzas);
        unset($this->pizzas[$key]);
        $this->quantidade_itens--;
    }
}