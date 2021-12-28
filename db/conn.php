<?php 
    
    /*$host = '127.0.0.1';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";*/

    $host = 'boohothfvq7zrleynm2d-mysql.services.clever-cloud.com';
    $db = 'boohothfvq7zrleynm2d';
    $user = 'ule1ljucrogbxrye';
    $pass = 'kYcex0mrjJdZNouDTZAl';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass,);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
    
   
    
?>
