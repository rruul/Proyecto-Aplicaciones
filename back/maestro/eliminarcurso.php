<?php
    include '../conexion.php';
    $curso = $_POST["id"];

    $sqlcursos = "DELETE FROM curso WHERE id = $curso";
    $result = $conn->query($sqlcursos);

    $sqlcursos1 = "DELETE FROM inscripcion WHERE id_curso = $curso";
    $result1 = $conn->query($sqlcursos1);
?>