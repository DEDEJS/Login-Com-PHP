<?php
  ini_set('default_charset','UTF-8');
  class GetInput{
    public function GetEmail(){
        if(isset($_POST['Email'])){
           return htmlspecialchars($_POST['Email']);
        }else {
            return false;
        }
    }
    public function GetNome(){
        if(isset($_POST['Nome'])){
           return htmlspecialchars($_POST['Nome']);
        }else {
            return false;
        }
    }

    public function GetSenha(){
      if(isset($_POST['Senha'])){
       return htmlspecialchars($_POST['Senha']);
      }else {
         return false;
      }
 }
 public function GetConfirmaSenha(){
  if(isset($_POST['ConfirmaSenha'])){
   return htmlspecialchars($_POST['ConfirmaSenha']);
  }else {
     return false;
  }
}
 }
$GetInput = new GetInput();
$GetNome = $GetInput -> GetNome();
$GetEmail = $GetInput -> GetEmail();
