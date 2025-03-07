function ValidacaoNome(){
    var nome = document.getElementById('Nome');
    var ErrorNome = document.getElementById('ErrorNome');
      if(nome.value == ""){
        ErrorNome.innerHTML = "Preenche o Campo Nome";
      }else if(nome.value.length >= 21){
        ErrorNome.innerHTML = "Somente o Primeiro Nome";
      }else{
        ErrorNome.innerHTML = "";
      }
}
function ValidacaoEmail(){
    var email = document.getElementById('Email');
    var ErrorEmail = document.getElementById('ErrorEmail'); 
    if(email.value == ""){
        ErrorEmail.innerHTML = "Preenche o Campo Email";
    }else if(email.value.length >= 41){
        ErrorEmail.innerHTML = "Campo Email Inválido";
    }else{
        ErrorEmail.innerHTML = "";
    }
}
function ValidacaoSenha(){
    var senha = document.getElementById('Senha');
    var ErrorSenha = document.getElementById('ErrorSenha');
    if(senha.value == ""){
      ErrorSenha.innerHTML = "Preenche o Campo Senha";
    }else if(senha.value.length >=1 && senha.value.length <= 6){
      ErrorSenha.innerHTML = "No Mínimo 7 Caracteres";
    }else{
        ErrorSenha.innerHTML = "";
    }
}
function ValidacaoRepeteSenha(){
  var RepeteSenha = document.getElementById('ConfirmaSenha');
  var senha = document.getElementById('Senha');
  var ErrorConfirmaSenha = document.getElementById('ErrorConfirmaSenha');
  if(RepeteSenha.value == ""){
    ErrorConfirmaSenha = "Preenche o Campo Confirma A Senha";
  }else if(RepeteSenha.value != senha.value){
    ErrorConfirmaSenha.innerHTML = "A Senha Tem Que Ser Identica";
  }else{
    ErrorConfirmaSenha.innerHTML = "";
  }

}
function CadastroInputs(){

setInterval(function(){
   return ValidacaoNome(),
   ValidacaoEmail(),
   ValidacaoSenha(),
   ValidacaoRepeteSenha();
 }, 1000);

 }
 function LoginInputs(){
    setInterval(function(){
        return ValidacaoEmail(),
        ValidacaoSenha();
    }, 1000);
 }