<?php
$link = 'mysql:host=localhost:3306;dbname=Minmer';
$user = 'root';
$password = 'Lasric.2018'

try{
    $pdo = new PDO($link,$user,$password);
    echo 'conectado!!';
}catch(PDOException $e){
    print "Error: " .$e->getMessage() . "<br/>";
    die();
}