<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user === '' || $pass === ''){
    echo json_encode('{
        "contenido": {
            "title": "invalid"
        }
    }');
}else{
    echo json_encode('{
        "contenido": {
            "title": "valid"
        }
    }');
}
?>
