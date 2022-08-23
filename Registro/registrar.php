<?php

include ("../connection.php");


if (isset($_POST['registrar'])){
    if (strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['contraseña']) >= 1) {
        $name = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $contrasena = trim($_POST['contraseña']);
        $consulta = "INSERT INTO clientes(nombre, email, contrasena) VALUES ('$name', '$email', '$contrasena')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3>Te has registrado correctamente</h3>
            <?php
        } else {
            ?>
            <h3>Hubo un error, intentalo de nuevo</h3>
            <?php
        }
    } else {
        ?>
            <h3>Completa los campos</h3>
        <?php
    }
}


?>