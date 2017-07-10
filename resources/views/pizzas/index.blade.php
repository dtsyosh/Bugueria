@extends('layouts.master')

@section('content')




   
   
   
   <h1>Cardápio</h1>
    <a class="btn btn-primary" href="{{ route('pizzas.create') }}">Cadastrar Pizza</a>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($pizzas as $pizza)
            <tr>
                <td><a href="/pizzas/{{$pizza->id}}"> {{ $pizza->nome }} </a></td>
                <td>{{ $pizza->preco }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('pizzas.edit', $pizza->id) }}">Editar</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['pizzas.destroy', $pizza->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @empty
            <p>Nenhuma pizza cadastrada!</p>

        @endforelse
        </tbody>
    </table>
   
   
   
   
   


     
	 
	 
	


@stop
