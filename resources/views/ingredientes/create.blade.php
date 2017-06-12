@extends('layouts.master')

@section('title', 'Criar novo produto')


@section('content')
    <h1>Criar novo produto</h1>

    {!! Form::open(['route' => 'ingredientes.store']) !!}
    <div class="form-group">
        {!! Form::label('Nome') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Preço de uma porção') !!}
        {!! Form::text('preco_porcao', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Quantidade de uma porção') !!}
        {!! Form::text('qtde_porcao', null, ['class' => 'form-control', 'required']) !!}
        {!! Form::select('unidade', ['ml' => 'ml', 'mg' => 'mg']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Quantidade total:') !!}
        {!! Form::text('qtde_total', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}


    {{--Mensagens de erro--}}
    @include('layouts/errors')
    {!! Form::close() !!}
