<?php 
    session_start();
    if(!empty($_POST["btningresar"])){
        if (!empty($_POST["correo"]) or !empty($_POST["contrasena"]) ){

            $usuario = $_POST["correo"];
            $contrasena = $_POST['contrasena'];
            $contrasena_encriptada = password_hash($contrasena, PASSWORD_BCRYPT);

            $sql = "SELECT * FROM usuario WHERE correo='$usuario'";
            $resultado = mysqli_query($conn, $sql);

            $sql1 = "SELECT * FROM maestro WHERE correo='$usuario'";
            $resultado1 = mysqli_query($conn, $sql1);

            if (mysqli_num_rows($resultado) > 0) {
                $usu=mysqli_fetch_array($resultado);
                if($usu['correo']==$usuario and (password_verify($contrasena, $usu['contrasena']))) {
                    $_SESSION["id"]=$usu['id'];
                    header("location: ../pilin.html");
                } 
            } elseif (mysqli_num_rows($resultado1) > 0) {
                $mae=mysqli_fetch_array($resultado);
                if($mae['correo']==$usuario and (password_verify($contrasena, $usu['contrasena']))) {
                    $_SESSION["id"]=$mae['id'];
                    header("location: ../pilin.html");
                } 
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
        } 
        else {
           echo '<div class="alert alert-danger">CAMPO VACIO</div>';
        }
        
    }
?>