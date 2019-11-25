<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  
  	<link href="estilos.css" rel="stylesheet" type="text/css">
  	<link href="css/jquery-confirm.css" rel="stylesheet" type="text/css">

    <link href="javascript/script.js" rel="stylesheet" type="text/javascript">
			
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
  
  <div >
  


 <!-- Logo e menu -->
					<div class="my-2 logo"	 style="text-align:center; " >
					
						<img src="img/logo.png" class="img img-fluid" data-toggle="tooltip" data-placement="top" title="Logo" id="itemlogo"   >
				
					</div>
					
  <div class="menu  		">
  <ul class="nav justify-content-center" >
  <li class="nav-item" id="itemmenu">
    <a class="nav-link active" id="linkmenu"  href="index.php">Início</a>
  </li>
  <li class="nav-item" id="itemmenu">
    <a class="nav-link" id="linkmenu" href="index.php#reservar">Reservar</a>
  </li>
  <li class="nav-item" id="itemmenu">
    <a class="nav-link" id="linkmenu" href="galeria.php">Galeria</a>
  </li>
  <li class="nav-item" id="itemmenu">
    <a class="nav-link" id="linkmenu" href="quemsomos.php">Quem somos</a>
  </li>
  <li class="nav-item" id="itemmenu" >
    <a class="nav-link" id="linkmenu" href="contato.php" >Contato</a>
  </li>
  
   <!-- Button trigger modal -->
	
   <li class="nav-item dropdown" id="clientelogado" style="display:none"> 
        <a class="nav-link dropdown-toggle" href="#" id="linkmenu" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		 <i class="fa fa-user"></i>
		 <span id="nomeuser"></span>
        </a>
        <div class="dropdown-menu" id="menufuncionario" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item menufuncionario" style="display:none" href="cadastraacomodacoes.php">Cadastrar acomodação</a>
		  <a class="dropdown-item menufuncionario" style="display:none" href="cadastrofuncionario.php">Cadastrar Funcionário</a>
		  <a class="dropdown-item menufuncionario" style="display:none" href="verificareservas.php">Verificar reservas</a>
		  
		  <a class="dropdown-item menucliente" style="display:none" href="cadastro.php">Meu Cadastro</a>          
          <a class="dropdown-item menucliente" style="display:none" href="reservas.php">Minhas Reservas</a>
		  
		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item menucliente" style="display:none" href="cadastraacomodacoes.php">Cadastrar acomodação</a>
		  <a class="dropdown-item menucliente" style="display:none" href="cadastrofuncionario.php">Cadastrar Funcionário</a>
		  <a class="dropdown-item menucliente" style="display:none" href="verificareservas.php">Verificar reservas</a>
		  
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" id="logof">Sair</a>
		</div>
	 </li>	
	  
	  	  
	  <li class="nav-item dropdown" id="externo">
         <a class="nav-link dropdown-toggle" href="#" id="linkmenu" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i> Olá, visitante
         </a>
         <div class="dropdown-menu" id="visitante" aria-labelledby="navbarDropdown">

           <a class="dropdown-item" onclick="modalLogin()">Login</a>
		  
 		  <a class="dropdown-item" href="cadastro.php">Cadastrar</a>
		  <a class="dropdown-item" href="cadastrofuncionario.php">Cadastrar Funcionário</a>
		  
         </div>
	  </li>

<?php
  
//   $validalogin = 'funcionario';

//   $nomeuser = 'Eliã Faustino';
//   $nomeuser1 = 'Madson Oliveira';

   $tipoquarto = 'Luxo';
   $datacheckin = '10/08/2020';
   $datacheckout = '15/08/2020';
   $valorreserva = '859,60';

// 	if ($validalogin == 'funcionario') {
	
// 	echo '
// 	<li class="nav-item dropdown" id="itemmenu">
//         <a class="nav-link dropdown-toggle" href="#" id="linkmenu" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
//          <i class="fa fa-user-plus"></i>'; echo " Olá, $nomeuser"; echo'
//         </a>
//         <div class="dropdown-menu" id="visitante" aria-labelledby="navbarDropdown">
		
          
// 		      <a class="dropdown-item" href="cadastraacomodacoes.php">Cadastrar acomodação</a>
          
//           <a class="dropdown-item" href="verificareservas.php">Verificar reservas</a>
// 		  <div class="dropdown-divider"></div>
//           <a class="dropdown-item" href="logof.php">Sair</a>
//         </div>
//       </li>	
// ';
	 
// 	 } 
	 
// 	 elseif ($validalogin == 'cliente') 
// 	 {
// 	 echo '
// 	 <li class="nav-item dropdown" id="itemmenu">
//         <a class="nav-link dropdown-toggle" href="#" id="linkmenu" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
//          <i class="fa fa-user"></i>'; echo " Olá, $nomeuser1"; echo'
//         </a>
//         <div class="dropdown-menu" id="visitante" aria-labelledby="navbarDropdown">
		
          
// 		      <a class="dropdown-item" href="cadastro.php">Meu Cadastro</a>
          
//           <a class="dropdown-item" href="reservas.php">Minhas Reservas</a>
// 		  <div class="dropdown-divider"></div>
//           <a class="dropdown-item" href="logof.php">Sair</a>
//         </div>
//       </li>	';
// 	 }

// 	else
// 	 {
// 	 echo '
	 
// 	 <li class="nav-item dropdown" id="itemmenu">
//         <a class="nav-link dropdown-toggle" href="#" id="linkmenu" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
//          <i class="fa fa-user"></i> Olá, visitante
//         </a>
//         <div class="dropdown-menu" id="visitante" aria-labelledby="navbarDropdown">
		
//           <a class="dropdown-item"  href="#logarhome" data-toggle="modal" data-target="#logarhome">Login</a>
		  
// 		  <a class="dropdown-item" href="cadastro.php">Cadastrar</a>
		  
//         </div>
//       </li>
	 
	 
	 
	 
	 
// 	 ';
// 	 }

// 	
?>
	
  
 <!-- Pop Login -->
				<div class="modal fade" id="logarhome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Efetuar Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<form>
						  <div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
							<small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email ninguém</small>
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Senha</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
						  </div>
						  
						  <a href="cadastro.php"  class="btn btn-secondary ">Cadastrar</a>
						  <a href="login.php" type="submit" class="btn btn-primary">Entrar</a>
						  
					</form>
					  </div>
					  
					</div>
				  </div>
				</div>
  
  
  </ul>
  
</div>
<!-- Fim Logo e menu -->




<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: #000000}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .bootstrap-iso .btn-custom{background: #328892} .bootstrap-iso .btn-custom:hover{background: #1e747e;} .asteriskField{color: red;}</style>





</body>
  
</html>