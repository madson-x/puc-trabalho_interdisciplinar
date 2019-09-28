<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  
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
	<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
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
<h2 style="color:#555">Suas reservas no Hotel Gerais</h2>
<hr>
<div class="row">
<div class="col-lg-4 col-12 my-3" style="float:left">

<?php
echo'
<h4 class="my-3" style="color:#555; "> Olá, '; echo "$nomeuser"; echo '</h4>
<p> Veja detalhes da sua reserva no <b>Quarto '; echo "$tipoquarto"; 
echo '</b><br><br> Data de checkin: <b>'; echo"$datacheckin"; 
echo'</b><br> Data de checkout: <b>'; echo"$datacheckout"; 
echo'</b><br> Valor da reserva: <b>R$'; echo"$valorreserva"; 


echo'</b> <p>';

?>

</div>
<div class="col-lg-8 col-12 my-3" style="float:left">

<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
			<div id="carouselLuxo" class="col-12 carousel slide"  data-ride="carousel" style="padding:0px; margin:0px">
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img src="img/04.jpg." class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
								<img src="img/06.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
								<img src="img/08.jpg" class="d-block w-100" alt="...">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselLuxo" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Anterior</span>
							</a>
							<a class="carousel-control-next" href="#carouselLuxo" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Próximo</span>
							</a>
							</div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Confira os detalhes do Quarto Luxo</h5>
         <p class="card-text"><small class="text-muted">2 Pessoas - Wifi - TV 32" - Frigobar - Cama Casal King - Calefação - Ar condicionado - Hidro</small></p>
		<button onclick="location.href='#cancelareserva'" data-toggle="modal" data-target="#cancelareserva" type="submit" class="btn btn-secondary">Cancelar Reserva</button>
		<button onclick="location.href='#alterarreserva'" data-toggle="modal" data-target="#alterarreserva" type="submit" class="btn btn-primary">Alterar Reserva</button>

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
 






      </div>
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
  
 
</body>