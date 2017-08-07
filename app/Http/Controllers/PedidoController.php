<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PedidoController extends Controller
{
    public function finalizar_compra()
    {
        $carrinho = Session::get('carrinho');
        return view('finalizar-compra', compact('carrinho'));
    }

    public function store(Request $request)
    {
        $pedido = new \App\Pedido;
        $carrinho = Session::get('carrinho');

        $pedido->cep = $request->cep;
        $pedido->rua = $request->rua;
        $pedido->numero = $request->numero;
        $pedido->bairro = $request->bairro;
        $pedido->complemento = $request->complemento;
        $pedido->forma_pagamento = $request->pagamento;
        $pedido->valor = $carrinho->valor_total;
        $pedido->troco = $request->troco;
        $pedido->save();

        Session::forget('carrinho');


        return view('home');
    }

    public function limpar_sessao($key)
    {

        if (Session::has($key)) {
            Session::forget($key);
        }

        return view('/');

    }
}
