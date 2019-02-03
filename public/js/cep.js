//Quando o campo cep perde o foco.
$("#cep").blur(function() {

    //Nova variável "cep" somente com dígitos.
    var cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#logr").val("Buscando...");
            $("#bairro_logr").val("Buscando...");
            $("#cidade_logr").val("Buscando...");
            $("#estado_logr").val("Buscando...");
            $("#ibge").val("Buscando...");


            //Consulta o webservice viacep.com.br/
            $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#cep").val(dados.cep);
                    $("#logr").val(dados.logradouro);
                    document.getElementById("bairro_logr").value = dados.bairro;
                    document.getElementById("cidade_logr").value = dados.localidade;
                    //$("#cidade_logr").val(dados.localidade);
                    $("#estado_logr").val(dados.uf);
                    $("#ibge").val(dados.ibge);

                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
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
});
