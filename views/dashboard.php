<?php 
 class DashboardController
 {


 public function index()
 {
    //inicia a sessao para verifica r se o usuario esta autenticado


    session_start ();
//verifica s a variavel de sessao ""usuario id esta definida 


//se não estiver,significa que o usuario não esta autenticado
 if(!isset($_SESSION['usuario_id'])){
    header('Location: index.php');
    exit; // garante que o script sera interronpido apos o redirecionamento
 }
 include 'views/dashboard.php';
 }
}
 
?>