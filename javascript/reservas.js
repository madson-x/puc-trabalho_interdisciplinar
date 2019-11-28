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

function cancelar(id) {
    confirm('cancelar');
}

function alterar(id) {
    alert('alterar');
}

function cabecalhoReserva(item) {
    return [
        '<div class="col-lg-4 col-12 my-3" style="float:left">',
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
        '<div class="col-lg-8 col-12 my-3" style="float:left">',
            '<div class="card mb-3" style="max-width: 100%;">',
                '<div class="row no-gutters">',
                    '<div class="col-md-4">',
                        '<div id="carouselLuxo" class="col-12 carousel slide" data-ride="carousel" style="padding:0px; margin:0px">',
                            '<div class="carousel-inner">',
                                '<div class="carousel-item active">',
                                    '<img src="img/04.jpg" class="d-block w-100" alt="...">',
                                '</div>',
                                '<div class="carousel-item">',
                                    '<img src="img/06.jpg" class="d-block w-100" alt="...">',
                                '</div>',
                                '<div class="carousel-item">',
                                    '<img src="img/08.jpg" class="d-block w-100" alt="...">',
                                '</div>',
                            '</div>',
                            '<a class="carousel-control-prev" href="#carouselLuxo" role="button" data-slide="prev">',
                                '<span class="carousel-control-prev-icon" aria-hidden="true"></span>',
                                '<span class="sr-only">Anterior</span>',
                            '</a> ',
                            '<a class="carousel-control-next" href="#carouselLuxo" role="button" data-slide="next">',
                                '<span class="carousel-control-next-icon" aria-hidden="true"></span>',
                                '<span class="sr-only">Próximo</span>',
                            '</a>',
                        '</div>',
                    '</div>',
                    '<div class="col-md-8">',
                        '<div class="card-body">',
							'<h5 class="card-title">Confira os detalhes do Quarto Luxo</h5>',
								'<p class="card-text"><small class="text-muted">2 Pessoas - Wifi - TV 32" - Frigobar - Cama Casal King - Calefação - Ar condicionado - Hidro</small></p>',
                                
								'<button onclick="cancelar('+ item.idreserva +')" type="button" class="btn btn-secondary">Cancelar Reserva</button>',
                                '&nbsp;',
                                '<button onclick="alterar(' + item.idreserva +')" type="button" class="btn btn-primary">Alterar Reserva</button>',
								
								
								
							

							
								
				        '</div>',
				    '</div>',        
				'</div>',
			'</div>',
        '</div>'
    ].join('');
}

