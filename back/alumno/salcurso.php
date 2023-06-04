<?php
    session_start();
    include '../conexion.php';
    $alumno = $_SESSION['id'];
    $idcurso = $_POST['id'];
    echo $idcurso;


    $sql = "DELETE FROM inscripcion WHERE id_curso = '$idcurso' AND id_alumno = '$alumno' ";
    $resultado1 = mysqli_query($conn, $sql);
    if($resultado1){
        echo 'todo joya';
    }
?>