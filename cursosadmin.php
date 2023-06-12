elseif (mysqli_num_rows($resultado2) > 0) {
                $admin=mysqli_fetch_array($resultado2);
                if($admin['correo']==$usuario and $admin==$admin['contrasena']) {
                    $_SESSION["id"] = $admin['id'];
                    $_SESSION["tipo"] = "admin";
                    header("location: ./index.php");
                } 
            }


            $sql2 = "SELECT * FROM adminn WHERE correo='$usuario'";
            $resultado2 = mysqli_query($conn, $sql2);