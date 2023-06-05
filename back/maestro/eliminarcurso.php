<?php
    include '../conexion.php';
    $curso = $_POST["id"];

    $sqlcursos = "DELETE FROM curso WHERE id = $curso";

    $result = $conn->query($sqlcursos);
?>