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

    <title>Fale Conosco - Hotel</title>
  </head>
  
<body>
  
     <!-- Logo e menu -->

	 <?php
			include ('header.php');
			
	?>
	<!-- Fim Logo e menu -->

<div class="my-3 container">
<div class="col-12 col-sm-6" style="text-align:center; float:left; padding:0px 30px 0px 30px">

<h5><p style="font-size:40px; color:#2e8b57"><i class="fa fa-comments"></i></p> Adoraríamos conhecê-lo pessoalmente ou pela Web!</h5>
<hr>
<b><p>Horário de Atendimento</p>
<p>Segunda a domingo de 07:00h às 21:00h</p></b>
<hr>

<p><b>Endereço:</b> Avenida Suiça 540 – Monte Verde/MG</p>
<p><b>Telefones:</b> (31) 3433-9396</p>
<p><b>Whatsapp:</b> (31) 99299-9396</p>
<b>Email:</b> 
<a href="mailto:contato@hotelgerais.com.br">contato@hotelgerais.com.br</a>
</div>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso" >
 <div class="container-fluid">
  <div class="row">
   <div class="col-12 ">
    <form method="post">
     <div class="form-group ">
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
       <input class="form-control" id="name" name="name" placeholder="Nome" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       E-mail
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-envelope-o">
        </i>
       </div>
       <input class="form-control" id="email" name="email" placeholder="E-mail" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="descricao">
       Mensagem
       <span class="asteriskField">
        *
       </span>
      </label>
      <textarea class="form-control" cols="40" id="descricao" name="descricao" placeholder="Digite sua mensagem" rows="5"></textarea>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-custom btn-lg" name="submit" type="submit">
        Enviar
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