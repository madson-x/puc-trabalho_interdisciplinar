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

<?php
echo'
<h5 class="my-3" style="color:#555; "> Olá, '; echo "$nomeuser"; echo '</h5>
';?>
<h6 style="color:#555">Veja as reservas ativas no Hotel Gerais</h6>

<hr>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hospede</th>
	  <th scope="col">Quantidade de hospedes</th>
      <th scope="col">Quarto</th>
	  <th scope="col">Check-in</th>
	  <th scope="col">Check-out</th>
      <th scope="col">Valor</th>
	  <th scope="col">Situação</th>
	  <th scope="col">Observações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Eliã Faustino</td>
      <td>3</td>
      <td>Luxo</td>
	  <td>10/11/2019</td>
      <td>15/10/2019</td>
      <td>950,00</td>
	   <td>Pago</td>
      <td>Berço para bebê</td>
    </tr>
    <tr>
      <th scope="row">2</th>
     <td>Madson Oliveira</td>
      <td>2</td>
      <td>Luxo</td>
	  <td>20/11/2019</td>
      <td>24/10/2019</td>
      <td>700,00</td>
	   <td>Pago</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Alice Quadros</td>
      <td>3</td>
      <td>Economico</td>
	  <td>10/12/2019</td>
      <td>15/12/2019</td>
      <td>550,00</td>
	   <td>Pago</td>
      <td>Berço para bebê</td>
    </tr>
  </tbody>
</table>




<hr>
</div>

<br>
	   <!-- Footer -->
  <?php
			include ('footer.php');
			
	?>
  
 
</body>