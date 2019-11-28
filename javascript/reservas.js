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
	
	
    alert('Solicitação de cancelamento registrada.');

}
function alterar(id) {
    alert('Alteração da reserva realizada com sucesso.');
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
                                
								/*'<button onclick="cancelar('+ item.idreserva +')" type="button" class="btn btn-secondary">Cancelar Reserva</button>',
                                '&nbsp;',
                                '<button onclick="alterar('+ item.idreserva  +')" type="button" class="btn btn-primary">Alterar Reserva</button>',*/
								
								'<button data-toggle="modal" data-target="#cancelareserva" type="button" class="btn btn-secondary">Cancelar Reserva</button>',
								
								'<div class="modal fade" id="cancelareserva" tabindex="-1" role="dialog" aria-hidden="true">',
									 '<div class="modal-dialog" role="document">',
										'<div class="modal-content">',
										 '<div class="modal-header">',
											'<h5 class="modal-title" >Você está cancelando a sua reserva</h5>',
											'<button type="button" class="close" data-dismiss="modal" aria-label="Close">',
											  '<span aria-hidden="true">&times;</span>',
											'</button>',
										  '</div>',
										  '<div class="modal-body">',
											'<div >',
											'  <p>De acordo com o contrato de prestação de serviço todo cancelamento com menos de 10 dias de antecedência estará sujeito a cobrança de 50% do valor da reserva. <br>Caso o cancelamento seja realizado com menos de 24h horas a reserva será cobrada em sua totalidade. </p>',
											 ' <p>Pagamento realizados por cartão de crédito será estornado em sua fatura, pagamentos em dinheiro será transferido para conta de sua preferência em até 10 dias úteis.</p>',
											  '</div>',
											  '<h5><b> Tem certeza que deseja cancelar?</b></h5>',
											  '<button href="#" type="submit" data-dismiss="modal" class="btn btn-primary">Não</button>',
											  '&nbsp;',
											 '<button onclick="cancelar('+ item.idreserva +')" type="button" class="btn btn-secondary">Sim</button>',
										  '</div>',
										'</div>',
									  '</div>',
									'</div>',
								
								
								
                                
                                '<button data-toggle="modal" data-target="#alterareserva" type="button" class="btn btn-primary">Alterar Reserva</button>',
								
								
								/* Pop Altera */
				'<div class="modal fade" id="alterareserva" tabindex="-1" role="dialog" aria-labelledby="alterareserva" aria-hidden="true">',
				  '<div class="modal-dialog" role="document">',
					'<div class="modal-content">',
					  '<div class="modal-header">',
						'<h5 class="modal-title" id="alterareserva">Você está alterando a sua reserva</h5>',
						'<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>',
						
					  '</div>',
					  
					  '<div class="modal-body">',
					  
						'<p> Veja detalhes da sua reserva no <b>Quarto ' + item.acomodacao_descricao,
						'</b><br><br> Data de checkin: <b>' + item.data_entrada,
						'</b><br> Data de checkout: <b>' + item.data_saida,
						'</b><br> Valor da reserva: <b>R$' + item.valor_hospedagem,
						'</b><p></div>',
						
						
						'<div class="bootstrap-iso my-4">',
						 '<div class="container-fluid">',
						  '<div class="row">',
						   '<div class=" col-12">',
							'<form method="post">',
							 '<div class="form-group col-12" >',
							  '<label class="control-label requiredField" style="color:#555" for="dateentrada">',
							   'Check-In',
							   '<span class="asteriskField">',
								'*',
							   '</span>',
							  '</label>',
							  '<div class="input-group">',
							   '<div class="input-group-addon">',
								'<i class="fa fa-calendar"></i>',
							   '</div>',
							   '<input class="form-control" id="dataentrada" name="dateentrada" type="date"/>',
							  '</div>',
							 '</div>',
							 '<div class="form-group col-12">',
							  '<label class="control-label requiredField" style="color:#555" for="datesaida">',
							   'Check-Out',
							   '<span class="asteriskField">',
								'*',
							   '</span>',
							  '</label>',
							  '<div class="input-group">',
							   '<div class="input-group-addon">',
								'<i class="fa fa-calendar"></i>',
							   '</div>',
							   '<input class="form-control" id="datasaida" name="datesaida" type="date"/>',
							  '</div>',
							 '</div>',
							 '<div class="form-group col-12">',
							  '<label class="control-label requiredField" style="color:#555" for="hospedes">',
							   'Quandidade de Hospedes',
							   '<span class="asteriskField">',
								'*',
							   '</span>',
							  '</label>',
							  '<div class="input-group">',
							   '<div class="input-group-addon">',
								'<i class="fa fa-user"></i>',
							   '</div>',
							   '<input class="form-control" id="hospedes" name="hospedes" type="tel"/>',
							  '</div>',
							 '</div>',
							 
							 '<div class="form-group col-12 " >',
	 						'<label class="control-label requiredField" style="color:#555"  for="quarto">',
							   'Tipo de Quarto',
							   '<span class="asteriskField">',
								'*',
							   '</span>',
							  '</label>',
							  '<select class="select form-control" id="quarto" name="quarto">',
							   '<option value="Qluxo">',
								'Quarto Luxo',
							   '</option>',
							   '<option value="Qfamilia">',
								'Quarto Família',
							   '</option>',
							   '<option value="Qeconomico">',
								'Quarto Ecônomico',
							   '</option>',
							  '</select>',
							  '</div>',
							'<p class="card-text"><small class="text-muted">Pode haver cobrança de valor pela alteração na reserva</small></p>',
							'<h5><b>Confirma a alteração?</b></h5>',
							'<button onclick="cancelar('+ item.idreserva +')'" type="submit" class="btn btn-primary">Sim</button>',
							'<button href="#" type="submit" data-dismiss="modal" class="btn btn-secondary">Não</button>',
							'</form>',
						   '</div>',
						  '</div>',
						 '</div>',
						'</div>',
					  '</div>',
					'</div>',
				 '</div>',
				'</div>',


				
		
								
								
						'</div>',
				    '</div>',        
				'</div>',
			'</div>',
        '</div>'
    ].join('');
}

/*$("#cancelareserva").modal();*/
