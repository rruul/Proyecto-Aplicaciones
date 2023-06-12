<?php
    include '../conexion.php';
    $idprofe = $_POST['id'];

    $sql = "DELETE FROM maestro WHERE id = $idprofe";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "El maestro ha sido eliminado exitosamente.";
    } else {
        echo "Error al eliminar el alumno: ";
    }
?>