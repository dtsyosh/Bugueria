@extends('layouts.master')

@section('content')
    <h1> {{ $pizza->nome }} </h1>
    <hr>
    <div class="row">

        <div class="col-md-4">
            <ul>
                @foreach($pizza->ingredientes()->get() as $ingrediente)
                    <li>
                        {{ $ingrediente -> nome }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-8">
            <b>Preço: {{ $pizza -> preco }}</b>
        </div>
    </div>
    <hr>
    <a class="btn btn-default" href="{{ route('pizzas.index') }}">Voltar</a>
@endsection