<?php 
ini_set('default_charset','UTF-8');
include_once "php/ValidaInput.php";
include_once "php/Value.php";
?>
<!DOCTYPE HTML >
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/Menu.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body onload="return LoginInputs();">
<nav>
<img width="50" height="50" src="https://img.icons8.com/ios/50/menu--v1.png" onclick="return OpenMenu();" id="ImgMenu">
 <ul id="Ul">
  <li><a href="Cadastro.php" title="Cadastrar">Cadastrar</a></li>
  <li><a href="Login.php" title="Logar">Logar</a></li>
 </ul>
</nav>
<main>
 <form method="post" action="#">
 <h1>Login</h1> 
   <p id="ErrorEmail">
   <?php $InputsValidadacao -> ValidaEmail($Email);?>
   </p>
   <input type="text" name="Email" id="Email" placeholder="Seu Email" title="Seu Email" value="<?php $Value-> valueEmail($GetEmail); ?>">
   <p id="ErrorSenha">
    <?php $InputsValidadacao -> ValidaSenha($Senha); ?>
   </p>
   <input type="password" name="Senha" id="Senha" placeholder="Sua Senha" title="Sua Senha">
   <input type="submit" value="Logar" title="Logar">
 </form>
</main>
<script type="text/javascript" src="JS/ValidaForm.js" deffer></script>

</body>
</html>