$(document).ready(function () {
    


    $('#cadcli').submit(function (e) { 
        e.preventDefault();
        
        var dados= {
            "nome": $('#name').val(),
            "email": $('#email').val(),
            "cpf": 12457889561,
            "tel": $('#tel').val(),
            "senha": $('#senha').val(),
            "nascimento": '1989-04-29',
            "cartao": '1245784512587456',

        };

        post('cliente',dados)
        .done(function (resposta) { 
            $.alert({
                title: 'Sucesso!',
                content: "Cliente cadastrado com sucesso."
            });
         });       
    });

});