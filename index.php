<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reg.php" method="POST">
        <h2>Registro</h2>
        <input type="text" name="nombre" id="1" placeholder="Nombre">
        <input type="email" name="mail" id="2" placeholder="Email">
        <input type="submit" value="Enviar">
    </form>
    <?php
    include("reg.php");
    ?>
</body>
</html>