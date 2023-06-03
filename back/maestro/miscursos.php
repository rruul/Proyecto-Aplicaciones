<?php
    session_start();
    $maestro = $_SESSION["id"];
    $querycursos = "SELECT nombre, descripcion, horas FROM curso WHERE id_maestro = '$maestro'";
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