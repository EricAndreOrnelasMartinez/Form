<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user === '' || $pass === ''){
    echo json_encode("invalido");
}else{
    echo json_encode("valido");
}
?>