$(function() {
    $("ul").append('<button name="+" type="button" class="button">+</button><button name="-" type="button" class="button">-</button>');
    $(".button").on("click", function() {
        //alert("Hi")
        var $botao = $(this);
        var valorAntigo = $botao.parent().find("input").val()
                
        if ($botao.text() == '+') {
            var novoValor = parseInt(valorAntigo) + 1;
        }
        else {
            if (valorAntigo > 0)
                var novoValor = parseFloat(valorAntigo) - 1;
            else
                var novoValor = 0
        }
        $botao.parent().find("input").val(novoValor);
    });
});
