<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $database = "personas";
    $username = "david1";
    $password = "1234";

    $nombre = $_POST['nombre'];
    $color = $_POST['color'];
    $numero = $_POST['numero'];

    $conexion = mysqli_connect($servername, $username, $password, $database);
    $sql = "INSERT INTO datos (nombre, color, numero) values ('$nombre', '$color', '$numero') ";


    if (mysqli_query($conexion, $sql)) {
        echo "Registro completado";
    }

    ?>
    <br>
    <button><a href="./index.html">Regresar al inicio</a></button>
</body>

</html>