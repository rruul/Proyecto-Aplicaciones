<?php
    include '../conexion.php';
    $alumno = $_POST["id"];
    $curso = $_POST["idcurso"];

    $sqlcursos = "DELETE FROM inscripcion WHERE id_curso = $curso AND id_alumno = $alumno";

    $result = $conn->query($sqlcursos);
?>