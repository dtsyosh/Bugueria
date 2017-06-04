@extends('app')

@section('content')
    <h1>Lista de Ingredientes</h1>
    <a class="btn btn-primary" href="{{ route('ingredientes.create') }}">Cadastrar Ingrediente</a><hr>
    <table class="table">
        @forelse($ingredientes as $ingrediente)
            <tr>
                <td>{{ $ingrediente->nome }}</td>
                <td>{{ $ingrediente->preco }}</td>
                @if($ingrediente->disponivel)
                    <td>Disponível</td>
                @else
                    <td>Indisponível</td>
                @endif

                <td>
                    <a class="btn btn-primary" href="{{ route('ingredientes.edit', $ingrediente->id) }}" >Editar</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['ingredientes.destroy', $ingrediente->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>

        @empty
            <p>Nenhum ingrediente cadastrado!</p>
            
        @endforelse
    </table>
@stop
