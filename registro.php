<?php
    include './back/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!-- Bootstrap, fonts, and CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="/css/style.css" rel="stylesheet"/>
        <link href="/css/registro.css" rel="stylesheet"/>
        <link rel="icon" href="./img/open-book.png">
        <title>Sign up</title>
    </head>
<body>
    <?php include './header.html'?>

    <main>
        <div class="contenedor">
        <div class="container">
                <div class=" aleacion row align-items-center justify-content-center">
                <div class = " col-md-6 p-4 mt-5" style="background-color: #19A7CE;">
                    <div class="text-center">
                        <img class = "d-inline-block align-text-center" src="./img/open-book.png" width="50" height="50"/>
                    </div>
                    <h2 class="text-center text-white mb-4">Sign Up</h2>
                    
                    <?php 
                        include './back/registro/registro.php';
                    ?>

                    <form action="" method="post" enctype="multipart/form-data" class="row g-3">
                        <div class="col-12 text-center text-light">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="col-md-6 text-center text-light">
                            <label for="apaterno" class="form-label">Apellido paterno</label>
                            <input type="text" class="form-control" name="apaterno">
                        </div>
                        <div class="col-md-6 text-center text-light">
                            <label for="amaterno" class="form-label">Apellido materno</label>
                            <input type="text" class="form-control" name="amaterno">
                        </div>
                        <div class="col-md-6 text-center text-light">
                            <label for="correo" class="form-label" >Correo</label>
                            <input type="email" class="form-control" name="correo" placeholder="correo@ejemplo.com">
                        </div>
                        <div class="col-md-6 text-center text-light">
                            <label for="numero" class="form-label">Numero</label>
                            <input type="text" class="form-control" name="numero" placeholder="10 digitos">
                        </div>
                        <div class="col-md-6 text-center text-light">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" >
                        </div>
                        <div class="col-md-6 text-center text-light">
                            <label for="vercontrasena" class="form-label">Repite tu contraseña</label>
                            <input type="password" class="form-control" name="vercontrasena">
                        </div>
                        
                        <div class="col-12 text-center text-light">
                            <label class="form-label" for="tipousuario">¿Que funcion cumples?</label>
                            <select id="cars" name="tipousuario" class="form-control">
                                <option value="none">Elige tu funcion</option>
                                <option value="maestro">Maestro</option>
                                <option value="alumno">Alumno</option>
                              </select>
                        </div>

                        <div class="col-12 text-center text-light">
                            <input class="btn w-100 mt-4 text-light bg-black mb-5 btningre" name="btnregistro" type="submit" value="Sign Up"/>
                        </div>
                        
                        
                    </form>
                    <p class="text-white text-center">
                        Already have an account?
                        <a class="signinlink" href="../registro/insertarusuario.php" style="text-decoration: none; color: white">
                            <b>Sign In</b>
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