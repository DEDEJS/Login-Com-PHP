<?php 
ini_set('default_charset','UTF-8');
include_once "php/ValidaDados.php";
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body onload="return Validacao();">
<header>

<nav>
 <ul>
  <li><a href="Cadastro.php">Cadastrar</a></li>
  <li><a href="Login.php">Logar</a></li>
 </ul>
</nav>
 <h1>Cadastro</h1> 
</header>
<main>
 <form method="POST" action="#" >
   <p id="ErrorNome">
   <?php 
    $ValidaInputs ->  ValidaNome($Nome);
    ?>
    </p>
   <input type="text" name="Nome" id="Nome" placeholder="Seu Nome" title="Campo Nome">
   <p id="ErrorEmail">
   <?php  
     $ValidaInputs -> ValidaEmail($Email);
   ?>
   </p>
   <input type="text" name="Email" id="Email" placeholder="Seu Email" title="Campo Email">
  <p id="ErrorSenha">
  <?php  
   $ValidaInputs -> ValidaSenha($Senha);
   ?>
   </p>
   <input type="password" name="Senha" id="Senha" placeholder="Sua Senha" title="Campo Senha">
   <input type="submit" value="Cadastrar" title="Cadastrar">
 </form>
</main>

<script type="text/javascript" src="JS/ValidaForm.js" deffer></script>

</body>
</html>