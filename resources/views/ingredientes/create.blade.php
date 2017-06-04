@extends('app')

@section('title', 'Criar novo produto')


@section('content')
    <div class="row">
        <div class="text-center col-md-4 col-md-offset-4">
            <div class="text-center">
                <h1>Criar novo produto</h1>
            </div>
            {!! Form::open(['route' => 'ingredientes.store']) !!}

            <div class="form-group">
                {{ Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome']) }}
            </div>

            <div class="form-group">
                {!! Form::text('preco', null, ['class' => 'form-control', 'placeholder' => 'Preço' ]) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}