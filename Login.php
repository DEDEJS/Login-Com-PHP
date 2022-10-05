<?php 
ini_set('default_charset','UTF-8');
include_once "php/ValidaLogin.php";
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<nav>
 <ul>
  <li><a href="Cadastrar.php" title="Cadastrar">Cadastrar</a></li>
  <li><a href="Login.php" title="Logar">Logar</a></li>
 </ul>
</nav>
<header>
 <h1>Login</h1> 
</header>
<main>
 <form method="post" action="#">
  <p>
   <?php 
    $ValidaLogin -> ValidaEmailLogin($EmailLogin);
    ?>
   </p>
   <input type="text" name="LoginEmail" placeholder="Seu Email">
   <p>
    <?php 
     $ValidaLogin -> ValidaSenhaLogin($SenhaLogin);
    ?>
   </p>
   <input type="password" name="LoginSenha" placeholder="Sua Senha">
   <input type="submit" value="Logar">
 </form>
</main>
</body>
</html>