@extends('layouts.master')
@section('content')
<h1>Cardápio</h1>
<hr>
<table class="table">
    @if(!$cardapio->isEmpty())
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    @endif
    <tbody>
        @forelse($cardapio as $pizza)
          @if ($pizza->cardapio)
            <tr>
                <td><a href="/pizzas/{{$pizza->id}}"> {{ $pizza->nome }} </a></td>
                <td>{{ $pizza->preco }}</td>
                <td>
                    <a href="/adicionar-carrinho/{{  $pizza->id }}">Adicionar</a>
                </td>

            </tr>
          @endif
        @empty
        <p>Nenhuma pizza cadastrada!</p>
        @endforelse
    </tbody>
</table>
@endsection
