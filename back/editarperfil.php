<?php 
    if(!empty($_POST["btneditar"])){
        if (empty($_POST["nombre"]) || empty($_POST["apaterno"]) || empty($_POST["amaterno"]) || empty($_POST["contrasena"]) || empty($_POST["numero"]) ){
            echo '<div class="alert alert-danger">CAMPO/S VACIO/S</div>';
        } else {
            $user_id = $_SESSION["id"];
            $nombre = $_POST['nombre'];
            $apaterno = $_POST['apaterno'];
            $amaterno = $_POST['amaterno'];
            $contrasena = $_POST['contrasena'];
            $numero = $_POST['numero'];
            if($_SESSION["tipo"] == "alumno"){
                $querynumero = "SELECT numero FROM usuario WHERE id=$user_id";
            } else {
                $querynumero = "SELECT numero FROM maestro WHERE id=$user_id";
            }
            $resulnumero = $conn->query($querynumero);
            $numeroriginal = mysqli_fetch_array($resulnumero);
            $originalnumero = $numeroriginal['numero'];

            if (strlen($contrasena)<8) {
                echo '<div class="alert alert-danger">LA CONTRASEÑA DEBE CONTENER MINIMO 8 CARACTERES</div>';
            } elseif (strlen($numero)<10 || strlen($numero)>10){
                echo '<div class="alert alert-danger">EL NUMERO TELEFONICO DEBE CONTENER 10 DIGITOS</div>';
            } else {
                if($_SESSION["tipo"] == "alumno"){
                    $query = "UPDATE usuario SET numero='0000000000' WHERE id=$user_id";
                } else {
                    $query = "UPDATE maestro SET numero='0000000000' WHERE id=$user_id";
                }
                $resul = $conn->query($query);
                if ($resul){
                    if($_SESSION["tipo"] == "alumno"){
                        $query = "SELECT * FROM usuario WHERE numero='$numero'";
                    } else {
                        $query = "SELECT * FROM maestro WHERE numero='$numero'";
                    }
                    $resultado = $conn->query($query);
                    $usu=mysqli_fetch_array($resultado);
                    if($usu['numero']==$numero) {
                        if($_SESSION["tipo"] == "alumno"){
                            $querynum = "UPDATE usuario SET numero='$originalnumero' WHERE id=$user_id";
                        } else {
                            $querynum = "UPDATE maestro SET numero='$originalnumero' WHERE id=$user_id";
                        }
                        $resulnum = $conn->query($querynum);
                        echo '<div class="alert alert-danger">NUMERO TELEFONICO YA REGISTRADO</div>';
                    } else {
                        $contrasena_encriptada = password_hash($contrasena, PASSWORD_BCRYPT);
                        if($_SESSION["tipo"] == "alumno"){
                            $query = "UPDATE usuario SET nombre='$nombre', 
                                                    apaterno='$apaterno', 
                                                    amaterno='$amaterno', 
                                                    contrasena='$contrasena_encriptada', 
                                                    numero='$numero' 
                                                    WHERE id=$user_id";
                        } else {
                            $query = "UPDATE maestro SET nombre='$nombre', 
                                                    apaterno='$apaterno', 
                                                    amaterno='$amaterno', 
                                                    contrasena='$contrasena_encriptada', 
                                                    numero='$numero' 
                                                    WHERE id=$user_id";
                        }
                        $resultado = $conn->query($query);
                        if($resultado) {
                            header('location: perfil.php');
                        } else {
                            echo '<div class="alert alert-danger">ERROR INESPERADO, INTENTE MAS TARDE</div>';
                        } 
                    }
                } else {
                    echo '<div class="alert alert-danger">ERROR INESPERADO, INTENTE MAS TARDE</div>';
                }
            }

            
        }
    } 
?>