<?php   
//definiçãp da classe use controller responsavel por gerenciar as acoes relacionadas aos usuarios
class UseController{

    // função responsavel por registrar o usuario
    public function register(){
     if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
        $data = [
            'nome' => $_POST['nome'],
            'email'=> $_POST['email'],
            //criptografa a senha do usuario
            'senha'=> password_hash($_POST['senha'], PASSWORD_DEFAULT),
            'perfil'=> $_POST['perfi']
        ];

     User::create($data);
// se a requisição nao for posto (por exemplo get), carrega  apagina de rigistro
     }else{
        include 'views/register.php';
     }
    }
}
?>