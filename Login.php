<?php 
ini_set('default_charset','UTF-8');

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
<body >
<nav>
 <ul>
  <li><a href="Cadastro.php" title="Cadastrar">Cadastrar</a></li>
  <li><a href="Login.php" title="Logar">Logar</a></li>
 </ul>
</nav>

<main>
 <form method="post" action="#">
 <h1>Login</h1> 

 <p id="ErrorEmail">
   <?php 
  
    ?>
   </p>
   <input type="text" name="Email" id="Email" placeholder="Seu Email" title="Seu Email">
   <p id="ErrorSenha">
    <?php 
    
    ?>
   </p>
   <input type="password" name="Senha" id="Senha" placeholder="Sua Senha" title="Sua Senha">
   <input type="submit" value="Logar" title="Logar">
   
 </form>
</main>

</body>
</html>