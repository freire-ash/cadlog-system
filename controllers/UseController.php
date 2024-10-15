<?php
// Definição da classe UserController, responsável por gerenciar as ações relacionadas aos usuários.
class UserController {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), // Criptografa a senha
                'perfil' => $_POST['perfil']
            ];

            User::create($data); // Chama o método para criar o usuário
            header('Location: index.php'); // Corrige a sintaxe do header
            exit; // Adicionado para garantir que o script não continue após o redirecionamento
        } else {
            // Se a requisição não for do tipo POST (por exemplo, GET), carrega a página de registro
            include 'views/register.php'; // Corrige a string do include
        }
    }
}
?>
