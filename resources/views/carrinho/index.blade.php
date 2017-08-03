@extends('layouts.master')

@section('content')
    <h1>Carrinho</h1>

    @if(Session::has('carrinho'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($carrinho->pizzas as $pizza)
                        <li class="list-group-item">
                            <button class="btn btn-default">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                            <strong>{{ $pizza -> nome }}</strong>
                            <span class="label label-success" style="float:right">{{ $pizza -> preco }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @else
        <strong>Insira algo no carrinho!</strong>
    @endif
@endsection