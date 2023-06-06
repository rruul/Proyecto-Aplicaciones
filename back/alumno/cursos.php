<?php
    session_start();
    $alumno = $_SESSION["id"];

    $sqlcursos = "SELECT c.id AS curso_id, c.horas ,c.nombre AS nombre_curso, m.id, m.nombre 
        FROM curso c
        INNER JOIN maestro m ON c.id_maestro = m.id
        WHERE NOT EXISTS (
            SELECT 1
            FROM inscripcion i
            WHERE i.id_curso = c.id
            AND i.id_alumno = $alumno
        )";

    $result = $conn->query($sqlcursos);
    

    $cursosno = array();

// Verificar si se encontraron cursos no inscritos
if ($result->num_rows > 0) {
    // Mostrar los cursos no inscritos
    while ($row = $result->fetch_assoc()) {
        $cursosno[] = $row;
    }
    $cursosdisponibles = json_encode($cursosno);
    echo "<script>";
    echo "var cursosdisp = " . $cursosdisponibles . ";";
    echo "</script>";
} else {
    echo "No se encontraron cursos no inscritos para el alumno.";
}

?>