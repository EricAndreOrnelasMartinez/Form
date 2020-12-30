<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user === '' || $pass === ''){
    json_encode('{
        "contenido": {
            "title": "invalid"
        }
    }');
}else{
    json_encode('{
        "contenido": {
            "title": "valid"
        }
    }');
}
?>
