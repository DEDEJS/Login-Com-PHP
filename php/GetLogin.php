<?php 
class GetDadosLogin{
    public function GetEmailLogin(){
        if(isset($_POST['LoginEmail'])){
            return $_POST['LoginEmail'];
        }else{
            return false;
        }
    }
    public function GetSenhaLogin(){
        if(isset($_POST['LoginSenha'])){
            return $_POST['LoginSenha'];
        }else{
            return false;
        }
    }
}
$GetLogin = new GetDadosLogin();
?>