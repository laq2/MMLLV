<?php
function insertar_consulta($nombre,$mail,$msj) {
    $conexion = include("conexion.php");

    $cadena = "INSERT INTO persona(nombre, correo electronico, mensaje) VALUES ('$nombre','$mail','$msj')";

    try {
        $resul = mysqli_query($Conexion, $cadena);

        if ($resul) {
            return true;
        }
    } catch (Exception $e) {
        return substr($e, 22, 41);
    }

}
?>