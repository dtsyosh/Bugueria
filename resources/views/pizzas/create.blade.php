@extends('layouts.master')

@section('content')
    {{ Html::script('js/quantidade.js') }}
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
            <div class="col-md-4">
                @foreach($ingredientes as $ingrediente)
                    <ul>

                            {!! Form::label($ingrediente -> nome) !!}
                            <button name="+" type="button" class="button">+</button>
                            {!! Form::text('quantidade', '0')!!}
                            <button name="-" type="button" class="button">-</button>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>

    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pizzas.index') }}" class="btn btn-default">Voltar</a>
    {!! Form::close() !!}
	
	</div>
        

   
	
	
@endsection