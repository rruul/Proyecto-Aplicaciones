<?php
    include '../conexion.php';
    
        $curso = $_POST["id"];

        $querycursos = "SELECT u.id, u.nombre, u.apaterno, u.amaterno, u.correo
                        FROM usuario u
                        JOIN inscripcion i ON u.id = i.id_alumno
                        WHERE i.id_curso = '$curso'";

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
        echo "var alumnos = " . $resultadosJson . ";";
        echo "var id_curso = " . $curso . ";";
        echo "</script>";
   
?>