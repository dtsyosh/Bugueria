@extends('layouts.master')

@section('content')
    <script type="text/javascript">

        function ativar_finalizar_troco() {
            document.getElementById('finalizar').disabled = false;
            document.getElementById('troco').disabled = false;
        }

        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('cidade').value = ("");
            document.getElementById('numero').value = ("");
            document.getElementById('complemento').value = ("");
            document.getElementById('telefone').value = ("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value = (conteudo.logradouro);
                document.getElementById('bairro').value = (conteudo.bairro);
                document.getElementById('cidade').value = (conteudo.localidade);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };
    </script>
    <h1>Finalizar compra</h1>
    {!! Form::open(['action' => 'PedidoController@store']) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Endereco</strong></div>
                <div class="panel-body">
                    <label>Cep:
                        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                               onblur="pesquisacep(this.value);" required/></label><br/>
                    <label>Rua:
                        <input name="rua" type="text" id="rua" size="40" required/></label><br/>
                    <label>Número:
                        <input name="numero" type="text" id="numero" size="5" required/></label><br/>
                    <label>Complemento:
                        <input name="complemento" type="text" id="complemento" size="40"/></label><br/>
                    <label>Bairro:
                        <input name="bairro" type="text" id="bairro" size="40" required/></label><br/>
                    <label>Cidade:
                        <input name="cidade" type="text" id="cidade" size="40" required/></label><br/>
                    <label>Telefone:
                        <input name="telefone" type="text" id="telefone" size="40" required/></label><br/>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <strong>Pagamento</strong>
                </div>

                <div class="panel-body">
                    <input type="radio" name="pagamento" value="dinheiro" onclick="ativar_finalizar_troco()">
                    Dinheiro<br>
                    <label><i>Troco</i>?
                        <input name="troco" id="troco" value="" placeholder="para quanto?">
                    </label><br>
                    <input type="radio" name="pagamento" value="cartao" onclick="ativar_finalizar_troco()"> Cartão<br>
                </div>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        {!! Form::submit('Finalizar', ['name' => 'finalizar']) !!}

                        <label>Total:
                            <span style="size: 10px"
                                  class="label label-success">R${{ $carrinho->valor_total }}</span></label>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    {!! Form::close() !!}


@endsection