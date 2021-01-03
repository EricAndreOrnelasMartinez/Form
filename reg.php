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
    <form enctype="multipart/form-data" method="post">
        Subir registro exel: <input type="file" name="myfile">
        <input type="submit" value="Subir">
    </form>
</body>
</html>
<?php 

if(isset($_FILES) && isset($_FILES['myfile']) && !empty($_FILES['myfile']['name']) && !empty($_FILES['myfile']['tmp_name'])){
    if(!is_uploaded_file($_FILES['myfile']['tmp_name'])){
        echo "Error: el fichero no fue procesado correctamente";
    }

    $source = $_FILES['myfile']['tmp_name'];
    $destination = __DIR__.'/uploads/'.$_FILES['myfile']['name'];

    if( is_file($destination)){
        echo "Error: fichero existente";
        @unlink(ini_get('upload_tmp_dir').$_FILES['myfile']['tmp_name']);
        exit;
    }
    if( ! @move_uploaded_file($source, $destination)){
        echo "Error: el fichero no se pudo mover a la carpeta destino".$destination;
        @unlink(ini_get('upload_tmp_dir').$_FILES['myfile']['tmp_name']);
        exit;
    }
    echo "Se completo correctamente!!";


}

?>