<?php 
ini_set('default_charset','UTF-8');
include_once "php/ValidaInput.php";
include_once "php/Value.php";
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
<img width="50" height="50" src="https://img.icons8.com/ios/50/menu--v1.png" onclick="return OpenMenu();" id="ImgMenu">

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
    <?php $InputsValidadacao -> ValidaNome($Nome); ?>
    </p>
   <input type="text" name="Nome" id="Nome" placeholder="Seu Nome" title="Campo Nome" value="<?php $Value-> ValueNome($GetNome); ?>">
</div>
   <p id="ErrorEmail">
   <?php $InputsValidadacao -> ValidaEmail($Email); ?>
   </p>
   <input type="text" name="Email" id="Email" placeholder="Seu Email" title="Campo Email" value="<?php $Value-> valueEmail($GetEmail); ?>">
   <p id="ErrorSenha">
   <?php $InputsValidadacao -> ValidaSenha($Senha); ?>
     </p>
   <input type="password" name="Senha" id="Senha" placeholder="Sua Senha" title="Campo Senha">
   <p id="ErrorConfirmaSenha">
   <?php $InputsValidadacao -> ValidaSenhaConfirma($ConfirmaSenha, $Senha); ?>
   </p>
   <input type="password" name="ConfirmaSenha" id="ConfirmaSenha" placeholder="Confirmar Senha" title="Confirmar Senha">
   <input type="submit" value="Cadastrar" title="Cadastrar">
   <?php  $InputsValidadacao -> CadastroValidado(); ?>
 </form>
</main>
<script type="text/javascript" src="JS/ValidaForm.js" deffer></script>
</body>
</html>