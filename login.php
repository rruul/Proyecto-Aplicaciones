<?php
    include './back/conexion.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!-- Bootstrap, fonts, and CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="./css/style.css" rel="stylesheet"/>
        <link href="./css/login.css" rel="stylesheet"/>
        <link rel="icon" href="./img/open-book.png">
        <title>Log in</title>
</head>
<body>
        <?php include 'header.php' ?>
        <main>
        <div class="contenedor">
            <div class="container">
                <div class="row mt-5 align-items-center justify-content-center">
                <div class = " col-md-6 col-lg-5 p-4 mt-5" style="background-color: #19A7CE;">
                <div class="text-center">
                    <img class = "d-inline-block align-text-center" src="./img/open-book.png" width="50" height="50"/>
                </div>
                    <h2 class="text-center text-white mb-4">Log in</h2>
                    
                    <?php 
                        include './back/login/login.php';
                    ?>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-4 text-center" >
                            <label class="form-label text-light " for="correo">Correo electrónico</label>
                            <input class="form-control" name="correo" type="email" placeholder="correo@ejemplo.com" required />
                        </div>
                        <div class="mb-4 text-center">
                            <label class="form-label text-light " for="contrasena">Contraseña</label>
                            <input class="form-control" name="contrasena" type="password" placeholder="contraseña" required />
                        </div>
                        <div class="mb-4">
                            <input class="btn w-100 mt-4 text-light bg-black btningre" name="btningresar" type="submit" value="Log In"/>
                        </div>
                    </form>
                    <p class="text-white text-center">
                        Don't have an account?
                        <a href="registro.php" class="signuplink" style="text-decoration: none; color: white;">
                            <b>Sign Up</b>
                        </a>
                    </p>
                </div>
                </div>
            </div>
                

        </div>
        <?php include './footer.html'?>
</main>
<script src="../js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>