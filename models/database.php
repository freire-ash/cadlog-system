<?php 
class Database{
    //ultiliza padrao singletom vujo o objetivo e garantir qur apenas uma nunica instancia de classse seja criada durante a execução do programa, e que essa instancia seja ultilizada sempre necessario

private static $instance = null;

//metodo publico que retorna a conexão com BD

public static function getConnection(){

if(!self::$instance){
    $host          = 'localhost';
    $db            = 'sistema_usuarios';
    $user          = 'root';
    $password      = '';
    // a conexão usa driver Mysql (mysql:) as informções de host e DB
self::$instance = new PDO("mysql:host=$host;dbname=$db",$user, $password);
//define o medo de erro para exceções, facilitando a depuração e tratamento de erro 
self::$instance->setAttribute(PDO ::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
return self::$instance;
}
}


?>