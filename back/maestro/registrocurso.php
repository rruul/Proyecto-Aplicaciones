<?php
    if(!empty($_POST["btnregcurso"])){
        if (empty($_POST["nombre"]) || empty($_POST["descripcion"]) || empty($_POST["horas"]) ){
            echo '<div class="alert alert-danger">CAMPO/S VACIO/S</div>';
        } else {
            $id_maestro = $_SESSION["id"];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $aprende = $_POST['aprende'];
            $horas = $_POST['horas'];

            
            $query = "INSERT INTO curso (id_maestro, nombre, descripcion, aprende, horas) 
            VALUES('$id_maestro', '$nombre', '$descripcion', '$aprende', '$horas')";
            $resultado = mysqli_query($conn, $query);
            if($resultado) {
                header('location: ./redirecccion/rmiscursos.php');
            } else {
                echo '<div class="alert alert-danger">ERROR INESPERADO, INTENTE MAS TARDE</div>';
            } 
                
        }
    } 
?>