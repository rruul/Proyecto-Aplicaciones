<?php 
    session_start();
    if($_SESSION["tipo"] == "alumno"){
        header("location: ./");
    } elseif($_SESSION["tipo"] == "maestro") {
        header("location: ../miscursosmaestro.php");
    }
    echo "inicia sesion xd";
?>