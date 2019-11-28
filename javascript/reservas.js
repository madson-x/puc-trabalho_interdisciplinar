$(document).ready(function () {
    getReservas();
});

function getReservas() {
    get('reservas')
    .done(popularReservas)
    .fail();
}

function popularReservas(reservas) {
    var html = '';
    $.each(reservas, function (index, item) { 
        html += htmlReserva(item);
    });
    $('#reservas').html(html);
}

function htmlReserva(item) {
    return cabecalhoReserva(item) + centroReserva(item);
}

function cabecalhoReserva(item) {
    return [
        '<div class="col-lg-4 col-12 my-3" style="float:left"></div>',
        '<p> Veja detalhes da sua reserva no <b>Quarto ' + item.acomodacao_descricao,
        '</b><br><br> Data de checkin: <b>' + item.data_entrada,
        '</b><br> Data de checkout: <b>' + item.data_saida,
        '</b><br> Valor da reserva: <b>R$' + item.valor_hospedagem,
        '</b><p></div>'

    ].join('');
}

function centroReserva(item)
{
    return [

    ].join('');
}

