<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user === '' || $pass === ''){
    json_encode('invalido');
}else{
    json_encode('valido');
}
?>