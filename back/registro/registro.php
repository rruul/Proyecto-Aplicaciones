<?php 
    if(!empty($_POST["btnregistro"])){
        if (empty($_POST["nombre"]) || empty($_POST["apaterno"]) || empty($_POST["amaterno"]) || empty($_POST["correo"]) || empty($_POST["contrasena"]) || empty($_POST["numero"]) ){
            echo '<div class="alert alert-danger">CAMPO/S VACIO/S</div>';
        } else {
            $nombre = $_POST['nombre'];
            $apaterno = $_POST['apaterno'];
            $amaterno = $_POST['amaterno'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $contrasena_encriptada = password_hash($contrasena, PASSWORD_BCRYPT);
            $numero = $_POST['numero'];
            $tipousuario = $_POST['tipousuario'];
            $confirm = $_POST['vercontrasena'];

            $query = "SELECT * FROM usuario WHERE correo='$correo'";
            $result = mysqli_query($conn, $query);

            $query1 = "SELECT * FROM maestro WHERE correo='$correo'";
            $result1 = mysqli_query($conn, $query1);

            if ($tipousuario == 'alumno' and mysqli_num_rows($result) < 1){
                $usu = mysqli_fetch_array($result);
                if(strlen($contrasena) < 8) {
                    echo '<div class="alert alert-danger">LA CONTRASEÑA DEBE CONTENER MINIMO 8 CARACTERES</div>';
                } elseif (strlen($numero)<10 || strlen($numero)>10){
                    echo '<div class="alert alert-danger">EL NUMERO TELEFONICO DEBE CONTENER 10 DIGITOS</div>';
                } elseif ($contrasena != $confirm) {
                    echo '<div class="alert alert-danger">LAS CONTRASEÑAS NO COINCIDEN</div>';
                } else {
                    $query = "SELECT * FROM usuario WHERE numero='$numero'";
                    $resultado = mysqli_query($conn, $query);
                    $usu=mysqli_fetch_array($resultado);
                    if($usu['numero']==$numero) {
                        echo '<div class="alert alert-danger">NUMERO TELEFONICO YA REGISTRADO</div>';
                    } else {
                        $query = "INSERT INTO usuario (nombre, apaterno, amaterno, correo, contrasena, numero, alias) 
                        VALUES('$nombre', '$apaterno', '$amaterno', '$correo', '$contrasena_encriptada', '$numero', '')";
                        $resultado = mysqli_query($conn, $query);
                        if($resultado) {
                            echo '<div class="alert alert-success">REGISTRO EXITOSO</div>';
                        } else {
                            echo '<div class="alert alert-danger">ERROR INESPERADO, INTENTE MAS TARDE</div>';
                        } 
                    } 
                }
            }
        }
    } 
?>