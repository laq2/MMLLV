<?php
function insertar_consulta($nombre,$mail,$msj) {
    $conexion = include("conexion.php");

    $cadena = "INSERT INTO dueño(nombre,correo,mensaje) VALUES ('$nombre','$mail','$msj')";

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