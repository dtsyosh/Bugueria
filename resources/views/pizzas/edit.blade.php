@extends('layouts.master')

@section('content')
    {!! Form::model($pizza, ['method' => 'PUT', 'route' => ['pizzas.update', $pizza->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('preco', 'Preço:') !!}
        {!! Form::text('preco', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('ingrediente', 'Ingredientes:') !!}

        <div class="row">

            <div class="col-md-4">

                @foreach($todosIngredientes as $ingrediente)
                    <ul>
                        @if( $ingredientesPizza -> contains($ingrediente -> id) )
                            {!! Form::checkbox('arrayIngredientes[]', $ingrediente -> id, true) !!}
                        @else
                            {!! Form::checkbox('arrayIngredientes[]', $ingrediente -> id) !!}
                        @endif
                        {!! Form::label($ingrediente -> nome) !!}
                    </ul>
                @endforeach

            </div>

        </div>

    </div>

    {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pizzas.index') }}" class="btn btn-default">Voltar</a>
    {!! Form::close() !!}
@endsection