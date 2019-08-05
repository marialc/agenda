<?php
    $conexion = mysqli_connect("localhost", "root", "", "agenda") or die ("No se ha podido conectar con la base de datos " .mysqli_error($conexion));

    mysqli_query($conexion, "SET NAMES 'utf8'");

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO contactos (nombre,apellidos,telefono,email) VALUES ('$nombre','$apellidos','$telefono','$email')";
    
    if($conexion->query($sql) === TRUE) {
        echo "Has incluido nuevos datos correctamente";
    }
    else {
        echo "Error: " . $sql ."<br>" . $conexion->error;
    }

    mysqli_close($conexion);
?>