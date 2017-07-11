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
        <tr>
            <td><a href="/pizzas/{{$pizza->id}}"> {{ $pizza->nome }} </a></td>
            <td>{{ $pizza->preco }}</td>
            <td>
                <button
                class="btn btn-primary"
                href="{{ route('pizzas.edit', $pizza->id) }}"
                data-toggle="modal"
                data-target="#verIngredientes">Ver Ingredientes</button>
            </td>
            <div class="modal fade" id="verIngredientes" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            @foreach($cardapio as $pizza)
                                <li>$pizza->nome</li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </tr>
        @empty
        <p>Nenhuma pizza cadastrada!</p>
        @endforelse
    </tbody>
</table>
@endsection