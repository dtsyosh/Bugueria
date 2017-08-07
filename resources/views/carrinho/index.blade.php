@extends('layouts.master')

@section('content')
    <h1>Carrinho</h1>

    @if(Session::has('carrinho') and Session::get('carrinho')->quantidade_itens > 0)
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($carrinho->pizzas as $i => $pizza)
                        <li class="list-group-item">
                            <a class="btn btn-default" href="/remover-carrinho/{{ $i }}">
                                X
                            </a>
                            <strong>{{ $pizza -> nome }}</strong>
                            <span class="label label-success" style="float:right">{{ $pizza -> preco }}</span>
                        </li>
                    @endforeach
                </ul>

                <div class="panel" style="float:right">
                    <div class="panel-body">
                        <h3>Total: R${{ $carrinho->valor_total }}</h3>
                        <a class="btn btn-default" href="/finalizar-compra">Finalizar Compra</a>
                    </div>
                </div>
            </div>

        </div>
        @else
        <strong>Insira algo no carrinho!</strong>
    @endif
@endsection