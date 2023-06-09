<?php
    session_start();
    include '../conexion.php';
    $alumno = $_SESSION["id"];

    $sqlcursos = "SELECT c.id AS curso_id, c.horas ,c.nombre AS nombre_curso, m.id, m.nombre 
        FROM curso c
        INNER JOIN maestro m ON c.id_maestro = m.id
        WHERE EXISTS (
            SELECT 1
            FROM inscripcion i
            WHERE i.id_curso = c.id
            AND i.id_alumno = $alumno
        )";

    $result = $conn->query($sqlcursos);
    

    $cursosno = array();

// Verificar si se encontraron cursos inscritos
if ($result->num_rows > 0) {
    // Mostrar los cursos inscritos
    while ($row = $result->fetch_assoc()) {
        $cursosno[] = $row;
    }
    $cursosdisponibles = json_encode($cursosno);
    echo "<script>";
    echo "var cursosdisp = " . $cursosdisponibles . ";";
    echo "</script>";
} 
    $sqlname = "SELECT nombre, apaterno, amaterno FROM usuario WHERE id=$alumno";
    $resultao = $conn -> query($sqlname);
    $arreglon = mysqli_fetch_array($resultao);

?>