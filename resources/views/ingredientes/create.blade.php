@extends('layouts.master')



@section('content')
    <h1>Criar novo ingrediente</h1>

    {!! Form::open(['route' => 'ingredientes.store']) !!}

    <div class="form-group">
        {!! Form::label('Nome') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Preço (*)') !!}
        {!! Form::text('preco_porcao', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Quantidade (*)') !!}
        {!! Form::text('qtde_porcao', null, ['class' => 'form-control', 'required']) !!}
        {!! Form::select('unidade', ['ml' => 'ml', 'grama' => 'g']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Quantidade total:') !!}
        {!! Form::text('qtde_total', null, ['class' => 'form-control']) !!}
    </div>
    <div class="row">
        <div class="col-md-4">
        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
        </div>

        <div class="col-md-offset-11">
            <small class="text-muted"><i><b>* 1 porção</b></i></small>
        </div>
    </div>



    {{--Mensagens de erro--}}
    @include('layouts/errors')
    {!! Form::close() !!}
@endsection
