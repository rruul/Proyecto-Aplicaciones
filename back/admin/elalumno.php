<?php
    include '../conexion.php';
    $idAlumno = $_POST['id'];

    $sql = "DELETE FROM usuario WHERE id = $idAlumno";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "El alumno ha sido eliminado exitosamente.";
    } else {
        echo "Error al eliminar el alumno: ";
    }
?>