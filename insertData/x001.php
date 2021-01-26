<?php
    // iot.php
    // Importamos la configuración
    require("config.php");
    // Leemos los valores que nos llegan por GET
     $temperatura = mysqli_real_escape_string($con, $_GET['temperatura']);
     $ph = mysqli_real_escape_string($con, $_GET['ph']);
     $turbidez = mysqli_real_escape_string($con, $_GET['turbidez']);
     $oxigeno = mysqli_real_escape_string($con, $_GET['oxigeno']);
    // Esta es la instrucción para insertar los valores
    $query = "INSERT INTO x001 (temperatura,ph,turbidez,oxigeno) 
    VALUES('".$temperatura."','".$ph."','".$turbidez."','".$oxigeno."')";
    // Ejecutamos la instrucción
    mysqli_query($con, $query);
    mysqli_close($con);
    
?>