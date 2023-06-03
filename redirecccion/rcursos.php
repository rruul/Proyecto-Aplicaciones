<?php 
    session_start();
    if($_SESSION["tipo"] == "alumno"){
        header("location: ./");
    } elseif($_SESSION["tipo"] == "maestro") {
        header("location: ../cursosmaestro.php");
    }
    echo "inicia sesion xd";
?>