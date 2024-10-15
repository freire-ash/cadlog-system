<?php 
// faz a autenticação do usuário do login

// requer o arquivo "user.php" que contém o modelo User com as funções para manipulação de dados de usuários
require_once 'models/user.php'; 

class AuthController {
    // cria função responsável pelo processo de login
    public function login() {
        // verifica se a requisição do HTTP é do tipo POST, ou seja, se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $user = User::findByEmail($email);
            
            // verifica se o usuário foi encontrado e se a senha corresponde ao hash
            if ($user && password_verify($senha, $user['senha'])) {
                session_start();
            
              
                // armazena na sessão o id do usuário e seu perfil
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil'] = $user['perfil']; 
                header('Location: index.php?action=dashboard');
                exit; // Adicionado para evitar execução adicional
            } else {
                echo "Email ou senha incorretos";
            }
        } else {
            // se a requisição não for POST, carrega a página de registros
            include 'views/register.php';
        }
        
    }
    public function logout(){

        session_start();
        session_destroy();
        header('location: index.php');
    }  
}
?>
