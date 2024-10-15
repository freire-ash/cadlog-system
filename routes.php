<?php 

// inclui arquivo de controlador para lidar com diferentes acoes

require 'controllers/AuthController.php';
// inclui controlador de autenticacao
require 'controllers/DashboardController.php';
// inclui controlador de usurio
require 'controllers/UseController.php';
// inclui controlador do dashboard

// cria instancias do controladores para ultilizar seus metodos 

$authController = new AuthController();

//instancia o controlador de autenticação
$userController = new userController();
//coleta a acao da url se, não ouver definida, usa login por padrao
$dashboardController = new DashboardController();
    $action = $_GET['action'] ?? 'login';//usa o operador de coalecencia nula(??) para definir o 'login' se 'acticion' não estiver presente

    switch ($action) {
        case 'login':
            $authController->login(); // chama o método login do controlador de autenticação
            break;
    
        case 'register':
            $userController->register();
            break;
    
        case 'dashboard':
            $dashboardController->index();
            break;
        case 'logout':
            $authController -> logout();
        default:
            $authController->login(); // ação padrão, chama login se nenhuma das opções acima for correspondida
            break;
    }
?>
