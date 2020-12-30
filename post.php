<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user === '' || $pass === ''){
    echo json_encode(1);
}else{
    echo json_encode(2);
}