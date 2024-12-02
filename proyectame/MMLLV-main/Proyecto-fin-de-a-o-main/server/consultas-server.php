<?php
include('../modelo/consulta.php');

$nombre = $_POST['name'];
$mail = $_POST['mail'];
$msj = $_POST['md'];

$resul = insertar_consulta($nombre,$mail,$msj)

?>

<h1><?php echo $nom?></h1>