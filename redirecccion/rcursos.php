<?php 
    session_start();
    if($_SESSION["tipo"] == "alumno"){
        header("location: ../cursosalumno.php");
    } elseif($_SESSION["tipo"] == "maestro") {
        header("location: ../cursosmaestro.php");
    }
    echo "inicia sesion xd";
?>