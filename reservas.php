<!doctype html>
<html lang="pt-BR">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="estilos.css" rel="stylesheet" type="text/css">

	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<title>Minhas Reservas - Hotel</title>
</head>

<body>

	<!-- Logo e menu -->

	<?php
			include ('header.php');
			
	?>
	<!-- Fim Logo e menu -->

	<div class="container my-2">


		<h3 class="my-3" style="color:#555; "> Olá, <span class="nomeuser"></span></h3>
		<h5 style="color:#555">Veja suas reservas no Hotel Gerais</h5>

		<hr>
		<div class="row" id="reservas">
		
		
		<!-- Pop Cancela -->
		<div class="modal fade" id="cancelareserva" tabindex="-1" role="dialog" aria-labelledby="cancelareserva" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="cancelareserva">Você está cancelando a sua reserva</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						
						  <div >
						  <p>De acordo com o contrato de prestação de serviço todo cancelamento com menos de 10 dias de antecedência estará sujeito a cobrança de 50% do valor da reserva. <br>Caso o cancelamento seja realizado com menos de 24h horas a reserva será cobrada em sua totalidade. </p>
						  <p>Pagamento realizados por cartão de crédito será estornado em sua fatura, pagamentos em dinheiro será transferido para conta de sua preferência em até 10 dias úteis.</p>
						
	 </div>
						  
						  <h5><b> Tem certeza que deseja cancelar?</b></h5>
						  <button href="#" type="submit" data-dismiss="modal" class="btn btn-primary">Não</button>
						  
						  <button onclick="location.href='#confirmacancelamento'" data-toggle="modal" data-dismiss="modal" data-target="#confirmacancelamento" type="submit" class="btn btn-secondary">Sim</button>

					
					  </div>
					  
					</div>
				  </div>
				</div>


					<!-- Pop Cancela -->
		<div class="modal fade" id="confirmacancelamento" tabindex="-1" role="dialog" aria-labelledby="confirmacancelamento" aria-hidden="true">
		

				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="confirmacancelamento">Solicitação de cancelamento registrado.</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  
					  
					</div>
				  </div>
				</div>
 
 
 
		<!-- Pop Altera -->
		<div class="modal fade" id="alterareserva" tabindex="-1" role="dialog" aria-labelledby="alterareserva" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="alterareserva">Você está alterando a sua reserva</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
						
					  </div>
					  
					  <div class="modal-body">
					  
						<?php
						echo'
						<p><b>Tipo de quarto: '; echo "$tipoquarto"; 
						echo '</b><br> Data de check-in: <b>'; echo"$datacheckin"; 
						echo'</b><br> Data de check-out: <b>'; echo"$datacheckout"; 
						echo'</b><br> Valor da reserva: <b>R$'; echo"$valorreserva"; 
						echo'</b> <p>';
						?>
						
						
						<div class="bootstrap-iso my-4">
						 <div class="container-fluid">
						  <div class="row">
						   <div class=" col-12">
							<form method="post">
							 <div class="form-group col-12" >
							  <label class="control-label requiredField" style="color:#555" for="dateentrada">
							   Check-In
							   <span class="asteriskField">
								*
							   </span>
							  </label>
							  <div class="input-group">
							   <div class="input-group-addon">
								<i class="fa fa-calendar">
								</i>
							   </div>
							   <input class="form-control" id="dataentrada" name="dateentrada" type="date"/>
							  </div>
							 </div>
							 <div class="form-group col-12">
							  <label class="control-label requiredField" style="color:#555" for="datesaida">
							   Check-Out
							   <span class="asteriskField">
								*
							   </span>
							  </label>
							  <div class="input-group">
							   <div class="input-group-addon">
								<i class="fa fa-calendar">
								</i>
							   </div>
							   <input class="form-control" id="datasaida" name="datesaida" type="date"/>
							  </div>
							 </div>
							 <div class="form-group col-12">
							  <label class="control-label requiredField" style="color:#555" for="hospedes">
							   Quandidade de Hospedes
							   <span class="asteriskField">
								*
							   </span>
							  </label>
							  <div class="input-group">
							   <div class="input-group-addon">
								<i class="fa fa-user">
								</i>
							   </div>
							   <input class="form-control" id="hospedes" name="hospedes" type="tel"/>
							  </div>
							 </div>
							 
							 <div class="form-group col-12 " >
	 						 <label class="control-label requiredField" style="color:#555"  for="quarto">
							   Tipo de Quarto
							   <span class="asteriskField">
								*
							   </span>
							  </label>
							  <select class="select form-control" id="quarto" name="quarto">
							   <option value="Gerente">
								Quarto Luxo
							   </option>
							   <option value="Suporte">
								Quarto Família
							   </option>
							   <option value="Atendimento">
								Quarto Ecônomico
							   </option>
							  </select>
							  </div>
							<p class="card-text"><small class="text-muted">Pode haver cobrança de valor pela alteração na reserva</small></p>
							<h5><b>Confirma a alteração?</b></h5>
							<button onclick="location.href='#confirmaalteracao'" data-toggle="modal" data-dismiss="modal" data-target="#confirmaalteracao" type="submit" class="btn btn-primary">Sim</button>
							<button href="#" type="submit" data-dismiss="modal" class="btn btn-secondary">Não</button>
							</form>
						   </div>
						  </div>
						 </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>


				<!-- Pop Alterado -->
				<div class="modal fade" id="confirmaalteracao" tabindex="-1" role="dialog" aria-labelledby="confirmaalteracao" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="confirmaalteracao">Alteração da reserva realizada com sucesso.</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					</div>
				  </div>
				</div>
		
		
		
		
		</div>
		<hr>
	</div>

	<br>
	<!-- Footer -->
	<?php
			include ('footer.php');
			
	?>
	<script src="javascript/reservas.js"></script>

</body>