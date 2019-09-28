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

    <title>Reservar Quarto - Hotel Gerais</title>
  </head>
  
  <body>
  
     <!-- Logo e menu -->

	 <?php
			include ('header.php');
			
	?>
	<!-- Fim Logo e menu -->

<h3 class="my-3" style="color:#555; text-align:center;">Quatros disponíveis para reserva</h3>


<div class="container my-3">

<!-- Quartos -->
<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
			<div id="carouselEconomico" class="col-12 carousel slide"  data-ride="carousel" style="padding:0px; margin:0px">
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img src="img/01.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
								<img src="img/02.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
								<img src="img/03.jpg" class="d-block w-100" alt="...">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselEconomico" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Anterior</span>
							</a>
							<a class="carousel-control-next" href="#carouselEconomico" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Próximo</span>
							</a>
							</div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Quarto Ecônomico</h5>
        <p class="card-text">Nosso quarto ecônomico é ideal para casais e solteiros que procuram conforto sem abrir mão da economia</p>
        <p class="card-text"><small class="text-muted">2 Pessoas - Wifi - TV 32" - Frigobar - Cama Casal Queen - Calefação</small></p>

		<button onclick="location.href='#'" type="submit" class="btn btn-primary">Reservar</button>
      </div>
    </div>
  </div>
</div>

<!-- Quartos -->
<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
			<div id="carouselFamilia" class="col-12 carousel slide"  data-ride="carousel" style="padding:0px; margin:0px">
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img src="img/05.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
								<img src="img/07.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
								<img src="img/08.jpg" class="d-block w-100" alt="...">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselFamilia" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Anterior</span>
							</a>
							<a class="carousel-control-next" href="#carouselFamilia" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Próximo</span>
							</a>
							</div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Quarto Família</h5>
        <p class="card-text">Nosso quarto fámilia suporta até 4 pessoas, sendo um casal e dois solteiros ou quatro solteiros, ideal para famílias grandes que procuram conforto e economia.</p>
        <p class="card-text"><small class="text-muted">3 ou 4 Pessoas - Wifi - TV 32" - Frigobar - Cama Casal Queen - Beliche - Calefação</small></p>

		<button onclick="location.href='#'" type="submit" class="btn btn-primary">Reservar</button>
      </div>
    </div>
  </div>
</div>

<!-- Quartos -->
<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
			<div id="carouselLuxo" class="col-12 carousel slide"  data-ride="carousel" style="padding:0px; margin:0px">
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img src="img/04.jpg" class="d-block w-100" alt="...">
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
        <h5 class="card-title">Quarto Luxo</h5>
        <p class="card-text">Ideal para que busca luxo, nosso Quarto Luxo vem equipado com hidro, ideal para lua de mel e comemorar datas especial, é um quarto aconchegante e romântico.</p>
        <p class="card-text"><small class="text-muted">2 Pessoas - Wifi - TV 32" - Frigobar - Cama Casal King - Calefação - Ar condicionado - Hidro</small></p>
		<button onclick="location.href='#'" type="submit" class="btn btn-primary">Reservar</button>
      </div>
    </div>
  </div>
</div>

</div>





<br>
	   <!-- Footer -->
  <?php
			include ('footer.php');
			
	?>
  
 
</body>