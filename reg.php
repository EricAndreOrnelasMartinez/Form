<?php 

include("db.php");

if(isset($_POST['reg'])){
    if(strlen($_POST['nombre']) > 1 && strlen($_POST['mail']) > 1){
        $nombre = trim($_POST['nombre']);
        $mail = trim($_POST['mail']);
        $consulta = "INSERT INTO Info(Nombre,Email) VALUES('$nombre', '$mail')";
        $resultado = mysqli_query($con,$consulta);
        $valido = "";
        echo $valido;
        if($resultado){
            ?>
            <h3 class="ok">registrado!!!!</h3>
            <?php
            $valido = "correcto";
        }else {
            ?>
            <h3 class="bad">algo salió mal :(</h3>
            <?php
            $valido = "incorrecto";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Validado</title>
</head>
<body>
</body>
</html>