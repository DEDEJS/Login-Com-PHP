<?php
  ini_set('default_charset','UTF-8');
  class GetInputLogin{
    public function GetEmailLogin(){
        if(isset($_POST['Email'])){
           return htmlspecialchars($_POST['Email']);
        }else {
            return false;
        }
    }
    public function GetSenhaLogin(){
         if(isset($_POST['Senha'])){
          return htmlspecialchars($_POST['Senha']);
         }else {
            return false;
         }
    }
  }
  class GetInputCadastro{
    public function GetNomeCadastro(){
        if(isset($_POST['Nome'])){
           return htmlspecialchars($_POST['Nome']);
        }else {
            return false;
        }
    }
    public function GetEmaiCadastro(){
         if(isset($_POST['Email'])){
          return htmlspecialchars($_POST['Email']);
         }else {
            return false;
         }
    }
    public function GetSenhaCadastro(){
      if(isset($_POST['Senha'])){
       return htmlspecialchars($_POST['Senha']);
      }else {
         return false;
      }
 }
 public function GetConfirmaSenhaCadastro(){
  if(isset($_POST['ConfirmaSenha'])){
   return htmlspecialchars($_POST['ConfirmaSenha']);
  }else {
     return false;
  }
}
  }
  $GetInputLogin = new GetInputLogin();
  $GetInputCadastro = new GetInputCadastro();
?>