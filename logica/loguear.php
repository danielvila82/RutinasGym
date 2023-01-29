<?php
require 'conexion.php';
session_start();

$dni = $_POST['dni'];
$dia = "X";

$q = "SELECT COUNT(*) as contar from clientes where dni=$dni";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0){
    $_SESSION['dni'] = $dni;
    //$_SESSION['dia'] = $dia;
    header("location: ../index.php");
}
else
{
    echo "NO EXISTE DNI CARGADO";
}



?>