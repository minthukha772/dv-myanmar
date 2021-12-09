<?php

/*$hostname = "http://localhost/news-site";

$conn = mysqli_connect("localhost","root","","news-site") or die("Connection failed : " . mysqli_connect_error());*/


    $host = '127.0.0.1';
    $db   = 'news-site';
    $user = 'root';
    $pass = '123';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{

        $pdo = new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }

?>
