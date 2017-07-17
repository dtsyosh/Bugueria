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
                        {!! Form::label($ingrediente -> nome) !!}
                        @if( $ingredientesPizza -> contains($ingrediente -> id) )
                            <input style="float: right; width: 50px" type="number" name="quantidade[]" min="0" max="5" value="{{$pizza->ingredientes -> find($ingrediente->id)->pivot->qtde_porcoes}}">
                        @else
                            <input style="float: right; width: 50px" type="number" name="quantidade[]" min="0" max="5" value="0">
                        @endif
                        
                    </ul>
                @endforeach

            </div>

        </div>

    </div>

    {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pizzas.index') }}" class="btn btn-default">Voltar</a>
    {!! Form::close() !!}
@endsection