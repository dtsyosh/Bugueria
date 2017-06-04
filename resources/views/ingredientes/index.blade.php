@extends('app')

@section('content')
    <h1>Lista de Ingredientes</h1>

    <table class="table">
        @foreach($ingredientes as $ingrediente)
            <tr>
                <td>{{ $ingrediente->nome }}</td>
                <td>{{ $ingrediente->preco }}</td>
                @if($ingrediente->disponivel)
                    <td>Disponível</td>
                @else
                    <td>Indisponível</td>
                @endif

                <td><a href="/ingredientes/{{ $ingrediente->id }}/edit">Editar</a> </td>
            </tr>
        @endforeach
    </table>
@stop
