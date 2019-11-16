$(document).ready(function () {
    
    $('#cep').mask('00000-000');
    $('#cpf').mask('000.000.000-00');
    $('#tel').mask('(00)00000.0000');

    $('#cep').blur(function (e) { 
        e.preventDefault();
        var validacep = /^[0-9]{5}-[0-9]{3}$/;
        var cep = $(this).val();
        if (validacep.test(cep)){
            consultaCep(cep);
        }

    });


    $('#cadcli').submit(function (e) { 
        e.preventDefault();


        var dados= {
            "nome": $('#name').val(),
            "email": $('#email').val(),
            "cpf":removerLetras($('#cpf').val()),
            "telefone":removerLetras($('#tel').val()),
            "senha": $('#senha').val(),
            "nascimento": $('#dnascimento').val(),     
            "endereco": $('#endereco').val(),     
            "numero": $('#numero').val(),     
            "bairro": $('#bairro').val(),     
            "cidade": $('#cidade').val(),    
            "cep":removerLetras($('#cep').val()),   
            "complemento": $('#complemento').val()
        };

        post('cliente',dados)
        .done(function (resposta) { 
            $.alert({
                title: 'Sucesso!',
                content: "Cliente cadastrado com sucesso.",
                buttons:{
                    login:{
                        text: "OK",
                        action: function(){
                            window.location.href='index.php';
                        }
                    }
                }
            });
         });       
    });

});

function consultaCep (cep){
    var url = "https://viacep.com.br/ws/"+ cep +"/json/";
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        success: function (response) {
            console.log(response);
            $('#endereco').val(response.logradouro);
            $('#bairro').val(response.bairro);
            $('#cidade').val(response.localidade);
            
        }
    });
}

function removerLetras(parameter){
    return parameter.replace(/\D/g,'');
}