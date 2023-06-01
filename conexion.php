<?php
    $hostname = "localhost:8889";
    $username = "root";
    $password = "root";
    $db = "learnug";
    // Create connection
    $conn = new mysqli($hostname, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else{
        
        $sql = 'SELECT * FROM curso';
        $result = mysqli_query($conn, $sql);
        
        if ($result->num_rows > 0) {
            // Crear un arreglo para almacenar los datos
            $cursos = array();
        
            // Recorrer los resultados de la consulta
            while ($row = $result->fetch_assoc()) {
                // Agregar cada fila al arreglo
                $cursos[] = $row;
            }
        
            // Imprimir el contenido del arreglo
            
        }

        echo json_encode($cursos);
        
    $conn->close();
    }
?>