@extends('layouts.master')

@section('content')
	<h1>Monte sua pizza!</h1>

	<div class="row">
		<div class="col-md-3">
			<label> Ingredientes </label>
			<br>
			@foreach($ingredientes as $ingrediente)
				<ul>{{ $ingrediente->nome }}
					<input style="width: 50px; float: right" align="left" type="number" name="quantidade[]" min="0" max="5" value="0">
				</ul>
			@endforeach
		</div>

		<div class="col-md-3">
			<label>Preço: </label>
			<input id="preco" type="float" disabled="True" value="0">
		</div>
	</div>
@endsection