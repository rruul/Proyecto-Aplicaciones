<?php
    $sqlalumnos = "SELECT id, nombre, apaterno, amaterno, correo FROM usuario";
    $connalumnos = mysqli_query($conn, $sqlalumnos);
    // Crea un arreglo para almacenar los resultados
    $alumnosArray = array();

    // Recorre los resultados y agrega cada fila al arreglo
    while ($fila = mysqli_fetch_assoc($connalumnos)) {
        $alumnosArray[] = $fila;
    }

    // Convierte el arreglo a formato JSON
    $resultadosJson = json_encode($alumnosArray);

    // Pasa el resultado a una variable JavaScript
    echo "<script>";
    echo "var alumnos = " . $resultadosJson . ";";
    echo "</script>";
    
?>