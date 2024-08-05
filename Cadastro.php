<?php 
ini_set('default_charset','UTF-8');

?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <meta name="viewport" content="initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/Menu.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">

</head>
<body>
  <!-- onload="return Validacao();" -->
<nav>
 <ul>
  <li><a href="Cadastro.php">Cadastrar</a></li>
  <li><a href="Login.php">Logar</a></li>
 </ul>
</nav>

<main>
 <form method="POST" action="#" >
 <h1>Cadastro</h1> 
<div class="Form">
   <div>
    <p id="ErrorNome">
     Campo Nome Vázio
    </p>
   <input type="text" name="Nome" id="Nome" placeholder="Seu Nome" title="Campo Nome">
</div>
   <p id="ErrorEmail">
   Campo Email Vázio
   </p>
   <input type="text" name="Email" id="Email" placeholder="Seu Email" title="Campo Email">
   <p id="ErrorSenha">
     Campo Senha Vázio
   </p>
   <input type="password" name="Senha" id="Senha" placeholder="Sua Senha" title="Campo Senha">
   <p id="ErrorConfirmaSenha">
    Campo Confirmar Senha Vázio
   </p>
   <input type="password" name="ConfirmaSenha" id="ConfirmaSenha" placeholder="Confirmar Senha" title="Confirmar Senha">
   <input type="submit" value="Cadastrar" title="Cadastrar">
 </form>


</main>

<!--<script type="text/javascript" src="JS/ValidaForm.js" deffer></script>-->

</body>
</html>