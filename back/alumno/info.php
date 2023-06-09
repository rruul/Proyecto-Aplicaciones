<?php
    include '../conexion.php';
    $alumno = $_SESSION['id'];
    $idcurso = $_POST["id"];
    
    $sql1 = "SELECT * FROM curso WHERE id = $idcurso";
    $resultado1 = mysqli_query($conn, $sql1); 

    $cos = mysqli_fetch_array($resultado1);
    
    $val = $cos['aprende'];
    $pal = explode(",", $val);
    $idmaestro = $cos['id_maestro'];

    $sql2 = "SELECT * FROM maestro WHERE id = $idmaestro";
    $resultado2 = mysqli_query($conn, $sql2); 

    $maes = mysqli_fetch_array($resultado2);

    //Asi por que si no no funca la cosa
    $sql12 = "SELECT * FROM curso WHERE id = $idcurso";
    $resultado12 = mysqli_query($conn, $sql12); 

    $info = array();
    
    while ($row = $resultado12->fetch_assoc()) {
        $info[] = $row;
    }
    $informs = json_encode($info);
    echo "<script>";
    echo "var informacion = " . $informs . ";";
    echo "</script>";
?>