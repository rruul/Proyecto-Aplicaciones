<?php 
    session_start();
    if($_SESSION["tipo"] == "alumno"){
        header("location: ../miscursosalumno.php");
    } elseif($_SESSION["tipo"] == "maestro") {
        header("location: ../miscursosmaestro.php");
    } elseif($_SESSION["tipo"] == "admin") {
        header("location: ../miscursosadmin.php");
    }  else {
        header("location: ../regorlog.php");
    } 
?>