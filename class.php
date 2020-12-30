<?php

fuction conectar(){
    $server = 'localhost';
    $user = 'root';
    $password = 'Lasric.2018';
    $db = 'Minmer';

    $con = mysql_connect($server, $user, $password) or die("error");
    mysql_select_db($db, $con);

    return $con;

}