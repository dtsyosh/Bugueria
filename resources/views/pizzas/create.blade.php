@extends('layouts.master')

@section('content')
    {!! Form::open(['route' => 'pizzas.store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('preco', 'Preço:') !!}
        {!! Form::text('preco', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ingrediente', 'ingredientes') !!}
        <div class="row">
            <div class="col-md-4">
                @foreach($ingredientes as $ingrediente)
                    <ul>
                            {!! Form::checkbox('arrayIngredientes[]', $ingrediente -> id ) !!}
                            {!! Form::label($ingrediente -> nome) !!}
                    </ul>
                @endforeach
            </div>
        </div>
    </div>

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection