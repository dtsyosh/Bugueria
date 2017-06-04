@extends('app')

@section('content')
    <div class="row">
        <div class="text-center col-md-4 col-md-offset-4">
            <div class="text-center">
                <h1>Editar produto</h1>
            </div>
            {!! Form::model($ingrediente, ['method' => 'PUT', 'route' => ['ingredientes.update', $ingrediente->id]]) !!}

            <div class="form-group">
                {{ Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome']) }}
            </div>

            <div class="form-group">
                {!! Form::text('preco', null, ['class' => 'form-control', 'placeholder' => 'Preço' ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Disponível? ') !!}
                {!! Form::checkbox('disponivel') !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('ingredientes.index') }}" class="btn btn-default">Voltar</a>
            </div>
        </div>
    </div>
    {!! Form::close() !!}