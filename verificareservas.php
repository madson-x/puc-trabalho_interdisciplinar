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
  
  <?php
	$consulta = "select * from reservas";
	?>
	
  <body>
  
     <!-- Logo e menu -->

	 <?php
			include ('header.php');
			
	?>
	<!-- Fim Logo e menu -->

<div class="container my-2">


<h5 class="my-3" style="color:#555; "> Olá, <span id="nomeuser"></span></h5>

<h6 style="color:#555">Buscar reservas no Hotel Gerais</h6>


<div class="bootstrap-iso my-4">
 <div class="container-fluid">
  <div class="row">
   <div class=" col-12	">
	<form class="form-group" method="post">
	<div class="form-group col-12 col-lg-4 col-sm-12" style="float:left">
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-search"> 
        </i>
       </div>
       <input class="form-control" id="buscareserva" name="buscareserva" type="text" placeholder="Digite o CPF para buscar"/>
      </div>
     </div>
	 <div class="form-group" style="float:left">
       <button href="reservar-quarto.php" class="btn  btn-custom btn" style="float:right; margin-right:10px" type="button"  type="submit">
        Buscar</button>
        </div>
		<div class="form-group" style="float:left">
       <button href="reservar-quarto.php" class="btn  btn-success btn" style="float:right; margin-right:10px" type="button"  type="submit">
        Listar reservas do dia</button>
        </div>
	</form>
	
	</div>
	
  </div>
 </div>
</div>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Quarto</th>
	  <th scope="col">Check-in</th>
	  <th scope="col">Check-out</th>
      <th scope="col">Valor</th>
	  <th scope="col">Acomodação</th>
	  <th scope="col">Observações</th>
	  <th scope="col">Quantidade de hospedes</th>
	  <th scope="col">Hospede</th>
	 
	  
    </tr>
  </thead>
	<?php
	  
	  $query = mysqli_query($consulta);
	  
	  while($dados = mysqli_fetch_array($query)){
		  
	  ?>
  
  
</table>




<hr>
</div>

<br>
	   <!-- Footer -->
  <?php
			include ('footer.php');
			
	?>
  
 
</body>