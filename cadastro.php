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

    <title>Realizar cadastro</title>
  </head>
  
  <body>
  
  
    <!-- Logo e menu -->
		<?php
			include ('header.php');
			
	?>

<!-- Fim Logo e menu -->



<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<h2 style="color:#555; text-align:center">Cadastrar</h2>
<div class="bootstrap-iso my-3">
 <div class="container">
  <div class="row">
   <div class="col-12">
    <form method="post">
     <div class="form-group col-lg-6 col-12 form-group-lg" style="float:left">
      <label class="control-label requiredField" for="name">
       Nome
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input class="form-control" id="name" name="name" type="text"/>
      </div>
     </div>
     <div class="form-group col-lg-6 col-12 form-group-lg" style="float:left">
      <label class="control-label requiredField" for="email">
       Email
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-envelope-o">
        </i>
       </div>
       <input class="form-control" id="email" name="email" type="text"/>
      </div>
     </div>
     <div class="form-group col-lg-6 col-12 form-group-lg" style="float:left" >
      <label class="control-label requiredField" for="tel">
       Telefone
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-phone">
        </i>
       </div>
       <input class="form-control" id="tel" name="tel" type="text"/>
      </div>
     </div>
	 
	 
	 <div class="form-group col-lg-6 col-12 form-group-lg" style="float:left" >
      <label class="control-label requiredField" for="InputPassword1">
       Senha
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-expeditedssl">
        </i>
       </div>
       <input class="form-control" id="exampleInputPassword1" type="password"  name="password" />
      </div>
     </div>
	 
	 
	 
	 
     <div class="form-group col-lg-8 col-12 form-group-lg" style="float:left">
      <label class="control-label " for="text">
       Endereço
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-home">
        </i>
       </div>
       <input class="form-control" id="text" name="text" type="text"/>
      </div>
     </div>
     <div class="form-group col-lg-4 col-12 form-group-lg" style="float:left">
      <label class="control-label " for="number1">
       Número
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-sort-numeric-asc">
        </i>
       </div>
       <input class="form-control" id="number1" name="number1" type="text"/>
      </div>
     </div>
     <div class="form-group col-lg-4 col-12  form-group-lg" style="float:left">
      <label class="control-label " for="text1">
       Complemento
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-home">
        </i>
       </div>
       <input class="form-control" id="text1" name="text1" type="text"/>
      </div>
     </div>
     <div class="form-group col-lg-4 col-12 form-group-lg" style="float:left">
      <label class="control-label " for="text2">
       Bairro
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-map-signs">
        </i>
       </div>
       <input class="form-control" id="text2" name="text2" type="text"/>
      </div>
     </div>
     <div class="form-group col-lg-4 col-12 form-group-lg" style="float:left">
      <label class="control-label " for="name1">
       Cidade
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-map-o">
        </i>
       </div>
       <input class="form-control" id="name1" name="name1" type="text"/>
      </div>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-custom btn-lg" style="float:right" name="submit" type="submit">
        Cadastrar
       </button>
      </div>
     </div>
    </form>
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
</html>