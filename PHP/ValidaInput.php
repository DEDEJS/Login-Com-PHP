<?php
include_once "GetInput.php";
$Email = $GetInput -> GetEmail();
$Nome = $GetInput -> GetNome();
$Senha = $GetInput -> GetSenha();
$ConfirmaSenha = $GetInput -> GetConfirmaSenha();
 class ValidaInput{
    public $EmailValidado;
    public $NomeValidado;
    public $SenhaValidado;
    public $ConfirmaSenhaValidado;
        public function ValidaNome($Nome){
           if(strlen($Nome)<=0){
             echo "Preenche o Campo Nome";
           }else if(strlen($Nome)>= 21){
             echo "Somente o Primeiro Nome";
           }else if(preg_match('/^[\d\-]+$/', $Nome) > 0) {
              echo "Nome Inválido";
            }else{
               return $this-> NomeValidado = true;
            }
        }
        public function ValidaEmail($Email){
         if(strlen($Email)<=0){
            echo "Preenche o Campo Email";
         }else if(strlen($Email)>= 41){
             echo "Campo Email Inválido";
         }else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
              echo "Campo Email Inválido";
         }else{
           return $this-> EmailValidado = true;
         }
         }
        
        public function ValidaSenha($Senha){
            if(strlen($Senha)<=0){
              echo "Preenche o Campo Senha";
            }else if(strlen($Senha)>=1 && strlen($Senha) <=6){
              echo "No Mínimo 7 Caracteres";
            }else if(strlen($Senha)>=41){
              echo "Campo Senha Muito Grande";
            }else{
              return $this-> SenhaValidado = true; 
            }
        }
        public function ValidaSenhaConfirma($ConfirmaSenha, $Senha){
           if(strlen($ConfirmaSenha)<=0){
             echo "Preenche o Campo Confirma A Senha";
           }else if($ConfirmaSenha != $Senha){
             echo "A Senha Tem Que Ser Identica";
           }else{
            return $this-> ConfirmaSenhaValidado = true;
           }
        } 
        public function LoginValidado(){
          if($this-> EmailValidado == true && $this-> SenhaValidado == true){
              echo "Logar";
          }
        }
        public function CadastroValidado(){
          if($this-> EmailValidado == true && $this-> SenhaValidado == true &&
             $this-> NomeValidado == true && $this-> ConfirmaSenhaValidado == true){
            echo "Cadastrar";
        }
        }
 }

 $InputsValidadacao = new ValidaInput();
?>