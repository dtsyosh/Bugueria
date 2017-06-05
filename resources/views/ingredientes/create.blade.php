@extends('layouts.app')

@section('title', 'Criar novo produto')


@section('content')
    <h1>Criar novo produto</h1>

    {!! Form::open(['route' => 'ingredientes.store', 'class' => 'form-inline']) !!}
    <div class="form-group">
        {!! Form::label('Nome') !!}
        <div class="input-group">
        {{ Form::text('nome', null, ['class' => 'form-control', 'required']) }}
        </div>

        {!! Form::label('Preço da Porção') !!}
        {!! Form::text('preco_porcao', null, ['class' => 'form-control', 'required']) !!}


        {!! Form::label('Quantidade de 1 porção') !!}
        {!! Form::text('qtde_porcao', null, ['class' => 'form-control', 'required']) !!}
        {!! Form::select('unidade', ['ml' => 'ml', 'mg' => 'mg']) !!}


        {!! Form::label('Quantidade total:') !!}
        {!! Form::text('qtde_total', null, ['class' => 'form-control', 'required']) !!}


        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}

    </div>
    {{--Mensagens de erro--}}
    @include('layouts/errors')
    {!! Form::close() !!}
