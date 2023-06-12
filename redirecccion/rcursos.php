<?php 
    session_start();
    if($_SESSION["tipo"] == "alumno"){
        header("location: ../cursosalumno.php");
    } elseif($_SESSION["tipo"] == "maestro") {
        header("location: ../cursosmaestro.php");
    } elseif($_SESSION["tipo"] == "admin") {
        header("location: ../cursosadmin.php");
    } else {
        header("location: ../regorlog.php");
    } 
?>