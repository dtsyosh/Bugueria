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
        {!! Form::label('ingrediente', 'Ingredientes:') !!}
        <div class="row">
            <div class="col-md-3">
                @foreach($ingredientes as $ingrediente)
                    <ul>
                        {!! Form::label($ingrediente -> nome) !!}
                        <input style="float: right; width: 50px" type="number" name="quantidade[]" min="0" max="5" value="0">
                    </ul>
                @endforeach
            </div>
        </div>
    </div>

    <div class="form-group">
      <input type="checkbox" name="cardapio">
      <label>Cardapio?</label>
    </div>
    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pizzas.index') }}" class="btn btn-default">Voltar</a>
    {!! Form::close() !!}

	</div>





@endsection
