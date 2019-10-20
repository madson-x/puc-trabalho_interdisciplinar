const API='http://tipuc6periodo.herokuapp.com/';

function post(url, dados){
    return $.ajax({
        type: "post",
        headers:{"Authorization":localStorage.getItem("token")},
        url: API+url,
        data: dados,
        dataType: "json",
        statusCode:{ 
            401:function () {  
                localStorage.clear();
                window.location.href='login.php';
            }
        }
    }) .fail(erro);
};

function erro(data) {
    var msg = data.responseJSON;
    $.alert({
        title: 'Erro!',
        content: msg.erro
    });
    
}

function login(usuario, senha) {
    $.ajax({
        type: "post",
        url: API+'login',
        data: {usuario:usuario,senha:senha},
        dataType: "json"  
    })  .fail(erro)
        .done(function (resposta) {
        localStorage.setItem('token',resposta.token);
      });
}