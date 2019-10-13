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

    <title>Hotel Gerais</title>
  </head>
  
  <body>
  
  
  


 <!-- Logo e menu -->

 <?php
			include ('header.php');
			
	?>


<!-- Fim Logo e menu -->

<!-- Banner -->
					<div id="carouselExampleControls" class="col-12	 d-none d-sm-block carousel slide"  data-ride="carousel" style="padding:0px; margin:0px">
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="img/banner1.jpg." class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						  <img src="img/banner2.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						  <img src="img/banner3.jpg" class="d-block w-100" alt="...">
						</div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					  </a>
					</div>


<div class="my-3 container" style="text-align:center">


  
  <h2 id="reservar" style="color:#555">Buscar quartos</h2>
  
  
<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso my-4">
 <div class="container-fluid">
  <div class="row">
   <div class=" col-12">
    <form method="post">
     <div class="form-group col-12 col-lg-4 col-sm-12" style="float:left">
      <label class="control-label requiredField" style="color:#555" for="date1">
       Data incial
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-calendar">
        </i>
       </div>
       <input class="form-control" id="date1" name="date1" placeholder="DD/MM/AAAA" type="text"/>
      </div>
     </div>
     <div class="form-group col-12 col-lg-4 col-sm-12 " style="float:left">
      <label class="control-label requiredField" style="color:#555" for="date2">
       Data Final
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-calendar">
        </i>
       </div>
       <input class="form-control" id="date2" name="date2" placeholder="DD/MM/AAAA" type="text"/>
      </div>
     </div>
     <div class="form-group col-12 col-lg-4 col-sm-12" style="float:left">
      <label class="control-label requiredField" style="color:#555" for="number1">
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
       <input class="form-control" id="number1" name="number1" type="text"/>
      </div>
     </div>
     <div class="form-group col-12">
      <a href="reservar-quarto.php">
       <button href="reservar-quarto.php" type="button" class="btn btn-primary btn-lg"  name="submit">
        Buscar</button></a>
      
     </div>
    </form>
   </div>
  </div>
 </div>
</div>


<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

  <h2 style="color:#555">Galeria</h2>
  <div class="row">
		<div class="col-lg-4 col-12 col-lg-4 col-sm-6" style="float:left;">
			<img src="img/04.jpg" data-toggle="tooltip" data-placement="top" title="Imagem 1 - Galeria"  style="width:100%" id="itemgaleria">
		  </div>
		  
		  <div class="col-lg-4 col-12 col-lg-4 col-sm-6" style="float:left;">
			<img src="img/02.jpg" data-toggle="tooltip" data-placement="top" title="Imagem 2 - Galeria"   style="width:100%" id="itemgaleria">
		  </div>
		  
		  <div class="col-lg-4 col-12 col-lg-4 col-sm-6" style="float:left;">
			<img src="img/03.jpg" data-toggle="tooltip" data-placement="top" title="Imagem 3 - Galeria"   style="width:100%" id="itemgaleria">
		  </div>
		  
	</div>
	
	 <a class="nav-link" href="galeria.php"><h5>Veja mais fotos</h5></a>
  
  </div>
  
  </div>
  <br>
<!-- Footer -->
  <?php
			include ('footer.php');
			
	?>
    
  
  </body>
  
  </html>
  