<?php
//definiçãp da classe use controller responsavel por gerenciar as acoes relacionadas aos usuarios
class UserController{
    // função responsavel por registrar o usuario  
    public function register(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $data = [
        'nome'=> $_POST['nome'],
        'email'=> $_POST['email'],
 //criptografa a senha do usuario
        'senha'=>password_hash($_POST['senha'], PASSWORD_DEFAULT),
        'perfil'=>$_POST['perfil']
           ];
           User::create($data);
           header('Location: index.php');
    }else{
// se a requisição nao for posto (por exemplo get), carrega  apagina de rigistro        
        include 'views/register.php';
    }
    }
}
?>