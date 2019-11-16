const API='http://tipuc6periodo.herokuapp.com/';


function get(url){
    return $.ajax({
        type: "get",
        url: API+url,
        headers:{"Authorization":"Bearer "+localStorage.getItem("token")},
        dataType: "json"
    }) .fail(erro);

}

function post(url, dados){
    return $.ajax({
        type: "post",
        headers:{"Authorization":"Bearer "+localStorage.getItem("token")},
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
