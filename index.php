<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RutinasGym - Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	
</head>
<body>
    <div class="header">
            <div class="logo">
                <a href="#">Rutinas<span>Gym</span></a>
            </div>
            <label for="toggler" class="toggleBtn"><i class="fa-solid fa-bars"></i></label>
            <input type="checkbox" id="toggler">
            <ul class="navbar">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Hoy</a></li>
                <li><a href="#">Rutinas</a></li>
                <li><a href="#">Precios</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            <div class="social-icon">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-spotify"></i></a>
                <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
    </div>


<?php

require 'logica\conexion.php';
session_start();
$dni=$_SESSION['dni'];

if (!isset($dni)){
    header("location: login.php");
} else {
        
        echo "<h1> BIENVENIDO nombrecliente </h1>";

        $dia = "X"; //$_SESSION['dia']; // $_POST['dias']; //"X"; //dia seleccionado
        $sql = "SELECT * FROM rutinas WHERE (idcliente=$dni) AND (dias LIKE '%" . $dia . "%')";
        $result = mysqli_query($conexion, $sql);
        while($mostrar=mysqli_fetch_array($result))
        {
            
            echo "<h3> CLIENTE: " . $mostrar['idcliente'] . "\n </h3>";
            echo "<h3> NOMBRE: " . $mostrar['nombre'] . "\n </h3>";
            echo "\n";
            $ejercicios = array( $mostrar['idejer1'], $mostrar['idejer2'], $mostrar['idejer3'], $mostrar['idejer4'],
            $mostrar['idejer5'], $mostrar['idejer6'], $mostrar['idejer7'], $mostrar['idejer8'], $mostrar['idejer9'],
            $mostrar['idejer10']);
            foreach ($ejercicios as &$valor) {
                if ($valor>0){
                    $sql2 = "SELECT * FROM ejercicios WHERE id=$valor";
                    $result2 = mysqli_query($conexion, $sql2);
                    $mostrar2 = mysqli_fetch_array($result2);
                    echo "<center>";?>
                    <button class="ebutton 69" role="button"><?php echo $mostrar2['nombre'] ?></button>
                    <?php
                    //echo $mostrar2['id'] . "- " . $mostrar2['nombre'] . "\n";
                    //echo "<h6> " . $mostrar2['tipo'] . "\n </h6>";
                    echo "<h6> " . $mostrar2['descripcion'] . "\n </h6>";
                    echo "</center>";
                }
            }
        unset($valor);
        }

        
    }
    
?>

<a href='logica/salir.php'> SALIR </a>
</body>
</html>
