<?php 

include("db.php");

if(isset($_POST['reg'])){
    if(strlen($_POST['nombre']) > 1 && strlen($_POST['mail']) > 1){
        $nombre = trim($_POST['nombre']);
        $mail = trim($_POST['mail']);
        $consulta = "INSERT INTO Info(Nombre,Email) VALUES('$nombre', '$mail')";
        $resultado = mysqli_query($con,$consulta);
        $valido = "";
        echo $resultado;
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
        }else {
            ?>
            <h3 class="bad">llenar todos los datos</h3>
            <?php
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
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Mail</td>
        </tr>
        <?php 
        $sql = "SELECT * FROM Info";
        $ack = mysqli_query($con, $sql);
        while($mostrar =mysqli_fetch_array($ack)){
        ?>
        <tr>
        <td><?php echo $mostrar['ID'] ?></td>
        <td><?php echo $mostrar['Nombre'] ?></td>
        <td><?php echo $mostrar['Email'] ?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>