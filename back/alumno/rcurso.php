<?php
    session_start();
    include '../conexion.php';
    $alumno = $_SESSION['id'];
    $idcurso = $_POST['id'];
    echo $idcurso;
    
    $sql1 = "SELECT * FROM curso WHERE id=$idcurso";
    $resultado1 = mysqli_query($conn, $sql1); 

    $cos = mysqli_fetch_array($resultado1);
    $idmaestro = $cos['id_maestro'];

    $sql = "INSERT INTO inscripcion (id_curso, id_alumno, id_maestro) VALUES ('$idcurso', '$alumno', '$idmaestro')";
    $resultado1 = mysqli_query($conn, $sql);
    if($resultado1){
        echo 'todo joya';
        header('/');
    }
?>