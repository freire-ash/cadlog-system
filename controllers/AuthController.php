
<?php // faz a identicação do usuario do login

// requer o arquivo "user.php" que contem model duser com as funções para manipulação de dados de usuarios
require_once 'models/user.php';
 class AuthController{
    // cria funcao responsavel pelo proscesso de login
    public function login()
    {
      //verifica se a requisição do HTTP é do tipo POST, ou seja, se o formulario foi enviado
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
         
      }
    }
 }
?>