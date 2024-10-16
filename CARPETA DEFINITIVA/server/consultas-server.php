<?php
include('../modelo/consulta.php');

$nombre = $_POST['name'];
$mail = $_POST['email'];
$msj = $_POST['message'];

$resul = insertar_consulta($nombre,$mail,$msj)

?>

<h1><?php echo $resul?></h1>