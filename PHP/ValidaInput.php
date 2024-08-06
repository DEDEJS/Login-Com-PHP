<?php
include_once "GetInput.php";
$EmailLogin = $GetInputLogin -> GetEmailLogin();
$SenhaLogin = $GetInputLogin -> GetSenhaLogin();

$NomeCadastro = $GetInputCadastro -> GetNomeCadastro();
$EmailCadastro = $GetInputCadastro -> GetEmaiCadastro();
$SenhaCadastro = $GetInputCadastro -> GetSenhaCadastro();
$ConfirmaSenhaCadastro = $GetInputCadastro -> GetConfirmaSenhaCadastro();
 class ValidaLogin{
    public function ValidaEmailLogin($EmailLogin){
          if(strlen($EmailLogin)<=0){
             echo "Preenche o Campo Email";
          }else if(!filter_Var($EmailLogin, FILTER_VALIDATE_EMAIL)){
             echo "Email Inválido";
          }else{
            return true;
          }
    }
    public function ValidaSenhaLogin($SenhaLogin){
        if(strlen($SenhaLogin)<=0){
            echo "Preenche o Campo Senha";
        }else if(!preg_match('/^[A-Za-z0-9- ]+$/', $SenhaLogin)){
            echo "Campo Senha Inválido";
        }else {
            return true;
        }
    }
 }
 class ValidaCadastro{
        public function ValidaNomeCadastro($NomeCadastro){
           if(strlen($NomeCadastro)<=0){
             echo "Preenche o Campo Nome";
           }
        }
        public function ValidaEmailCadastro($EmailCadastro){
         if(strlen($EmailCadastro)<=0){
            echo "Preenche o Campo Email";
         }
        }
        public function ValidaSenhaCadastro($SenhaCadastro){
            if(strlen($SenhaCadastro)<=0){
              echo "Preenche o Campo Senha";
            }
        }
        public function ValidaSenhaConfirmaCadastro($ConfirmaSenhaCadastro){
           if(strlen($ConfirmaSenhaCadastro)<=0){
             echo "Preenche o Campo Confirma Nome";
           }
        }
 }
 $LoginValidado = new ValidaLogin();
 $CadastroValidado = new ValidaCadastro();
?>