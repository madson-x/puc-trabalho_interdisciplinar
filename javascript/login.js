function modalLogin(){
    $.confirm({
        title: 'Login',
        content: '' +
        '<form action="" class="formName">' +
        '<div class="form-group">' +
        '<label>Digite seu email</label>' +
        '<input type="text" placeholder="Email" class="email form-control" required />' +
        '</div>' +
        '<div class="form-group">' +
        '<label>Digite sua senha</label>' +
        '<input type="password" placeholder="Senha" class="senha form-control" required />' +
        '</div>'+
        '</form>',
        buttons: {
            formSubmit: {
                text: 'Login',
                btnClass: 'btn-blue',
                action: function () {
                    var email = this.$content.find('.email').val();
                    var senha = this.$content.find('.senha').val();
                    if(!email||!senha){
                        $.alert('Você deve informar o email e senha.');
                        return false;
                    }
                    logar(email, senha);
                }
            },
            cancel: function () {
                //close
            },
        },
        onContentReady: function () {
            // bind to events
            var jc = this;
            this.$content.find('form').on('submit', function (e) {
                // if the user submits the form by pressing enter in the field.
                e.preventDefault();
                jc.$$formSubmit.trigger('click'); // reference the button and click it
            });
        }
    });
}

function logar(email, senha){
    $.ajax({
        type: "post",
        url: API+'login',
        data: {usuario:email,senha:senha},
        dataType: "json"  
    })  .fail(erro)
        .done(function (resposta) {
        localStorage.setItem('token',resposta.token);
        window.location.reload(true);
      });
}

function info(){
    if  (localStorage.getItem('token')){
        get('info')
        .done(function (resposta){
        $('.nomeuser').text(resposta.usuario.nome);          
        $('#clientelogado').show(); 
        if(resposta.usuario.funcionario){
            $('.menufuncionario').show();

        } else{

            $('.menucliente').show(); 
        }

        $('#externo').hide();

        });
    }
        
}

function logof(){
    localStorage.clear();
    window.location.href="index.php"

}

$(document).ready(function () {
    info();
    $('#logof').click(logof);
});