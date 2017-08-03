@extends('layouts.master')

@section('content')

	<script type="text/javascript">
		var vetor_quantidades = Array();
		var vetor_ingredientes = <?php echo json_encode($ingredientes); ?>;

		$(function() {
			$("input[name='quantidade[]']").on('click keyup keydown',function() {
				atualizar();
			});
		});

		function atualizar() {
			vetor_quantidades = [];
			$("input[name='quantidade[]']").each(function() {
				vetor_quantidades.push($(this).val());
			});
			var x = 0;
			for(i = 0; i < vetor_quantidades.length; i++) {
				x += vetor_quantidades[i] * vetor_ingredientes[i]['preco_porcao'];
			}
			document.getElementById('preco').value = x;
		}
	</script>
	<h1>Monte sua pizza!</h1>

	{!! Form::open(['action' => 'PizzasController@getAddCarrinhoP']) !!}

		<div class="row">
			<div class="col-md-3">
				<label> Ingredientes </label>
				<br>
				@foreach($ingredientes as $ingrediente)
					<ul>
						<label name="nome_ingrediente[]">{{ $ingrediente->nome }}</label>
						<input name="quantidade[]" style="width: 50px; float: right" type="number" min="0" max="5" value="0">
					</ul>
				@endforeach
			</div>

			<div class="col-md-3">
				<label>Preço: </label>
				<input name="preco" class="form-group" id="preco" value="0">
			</div>


		</div>
		{!! Form::submit('Adicionar ao carrinho', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
@endsection
