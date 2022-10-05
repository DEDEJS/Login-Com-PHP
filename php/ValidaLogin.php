<?php
include_once "GetLogin.php";
$EmailLogin = $GetLogin -> GetEmailLogin();
$SenhaLogin = $GetLogin -> GetSenhaLogin();
class ValidaLogin{
    public function ValidaEmailLogin($EmailLogin){
        if(strlen($EmailLogin)<=0){
            echo "Preenche o campo email";
        }
    }
    public function ValidaSenhaLogin($SenhaLogin){
        if(strlen($SenhaLogin)<=0){
            echo "Preenche o campo senha";
        }
    }
}
$ValidaLogin = new ValidaLogin();
