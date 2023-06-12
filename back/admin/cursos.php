<?php
    $querycursos = "SELECT c.horas, c.descripcion, c.nombre AS nombre_curso, c.id AS curso_id, m.nombre AS nombre_maestro, m.id AS id_maestro, m.apaterno, m.amaterno FROM curso c
    JOIN maestro m ON c.id_maestro = m.id";
    $conncursos = mysqli_query($conn, $querycursos);
    // Crea un arreglo para almacenar los resultados
    $resultadosArray = array();

    // Recorre los resultados y agrega cada fila al arreglo
    while ($fila = mysqli_fetch_assoc($conncursos)) {
        $resultadosArray[] = $fila;
    }

    // Convierte el arreglo a formato JSON
    $resultadosJson = json_encode($resultadosArray);

    // Pasa el resultado a una variable JavaScript
    echo "<script>";
    echo "var resultados = " . $resultadosJson . ";";
    echo "</script>";
    
?>