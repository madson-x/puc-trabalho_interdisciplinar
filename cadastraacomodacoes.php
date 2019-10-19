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

    <title>Cadastrar acomodações</title>
  </head>
  
  <body>
   <!-- Logo e menu -->
		<?php
			include ('header.php');
			
	?>

<!-- Fim Logo e menu -->

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<h2 style="color:#555; text-align:center">Cadastrar acomodações</h2>
<div class="bootstrap-iso my-3">
 <div class="container">
  <div class="row">
   <div class="col-12">
    <form method="post">
     <div class="form-group form-group-lg col-lg-6 col-12" style="float:left">
      <label class="control-label requiredField" for="name">
       Name da acomodação
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-home">
        </i>
       </div>
       <input class="form-control" id="name" name="name" type="text"/>
      </div>
     </div>
     <div class="form-group form-group-lg col-lg-6 col-12" >
      <label class="control-label requiredField" for="number">
       Valor da diária
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-usd">
        </i>
       </div>
       <input class="form-control" id="number" name="number" type="text"/>
      </div>
     </div>
	 
	 <div class="form-group form-group-lg  col-12" >
      <div class="input-group">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
		<label class="custom-file-label" for="validatedCustomFile">Selecionar fotos da acomodação</label>
		<div class="invalid-feedback">Formato não suportado, formatos aceito .jpg .jpeg .png</div>
      </div>
     </div>
	 
	 <div class="form-group form-group-lg col-lg-6 col-12">
      <label class="control-label requiredField" for="descricao">
       Descrição
       <span class="asteriskField">
        *
       </span>
      </label>
      <textarea class="form-control" cols="40" id="descricao" name="descricao" rows="5"></textarea>
     </div>
	 
	 
     <div class="form-group form-group-lg col-lg-6 col-12" style="float:left">
      <label class="control-label ">
       Conforto
      </label>
      <div class=" ">
       <div class="checkbox">
        <label class="checkbox">
         <input name="checkbox" type="checkbox" value="Frigobar"/>
         Frigobar
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="checkbox" type="checkbox" value="Wifi"/>
         Wifi
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="checkbox" type="checkbox" value="Ar-condicionado"/>
         Ar-condicionado
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="checkbox" type="checkbox" value="TV"/>
         TV
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="checkbox" type="checkbox" value="Hidromassagem"/>
         Hidromassagem
        </label>
       </div>
      </div>
     </div>
	 
	 
     
     <div class="form-group">
      <div>
       <button class="btn btn-custom btn-lg" style="float:right" name="submit" type="submit">
        Cadatrar
       </button>
      </div>
     </div>
	 
	 <div class="form-group">
      <div>
	  <a href="http://localhost/hotelgerais/">
       <button href="reservar-quarto.php" class="btn  btn-danger btn-lg" style="float:right; margin-right:10px" type="button"  type="submit">
        Voltar
       </button></a>
      </div>
     </div>
	 
	 
    </form>
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
</html>