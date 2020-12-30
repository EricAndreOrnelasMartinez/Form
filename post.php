<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user === '' || $pass === ''){
    echo json_encode('Faltan datos');
}else{
    echo json_encode('Valido usuario'.$user.'password'.$pass);
}