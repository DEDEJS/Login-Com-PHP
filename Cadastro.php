<?php 
ini_set('default_charset','UTF-8');

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
  <li>Cadastrar</li>
  <li>Logar</li>
 </ul>
</nav>
<header>
 <h1>Cadastro</h1> 
</header>
<main>
 <form method="POST" action="#">
    <?php ?>
   <input type="text" name="NomeCadastro" placeholder="Seu Nome">
   <?php  ?>
   <input type="text" name="EmailCadastro" placeholder="Seu Email">
   <?php  ?>
   <input type="password" name="SenhaCadastro" placeholder="Sua Senha">
   <input type="submit" value="Cadastrar">
 </form>
</main>
</body>
</html>