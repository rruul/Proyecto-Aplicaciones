<?php 
    session_start();
    include './back/conexion.php';
    $_id = $_SESSION["id"];
    if(empty($_SESSION["id"])){
        header('location: ./index.php');
    }
    if($_SESSION["tipo"] == "alumno"){
        $sqlcursos = "SELECT * FROM usuario WHERE id = $_id ";
        $result = $conn->query($sqlcursos);
        $datos=mysqli_fetch_array($result);
    } else {
        $sqlcursos = "SELECT * FROM maestro WHERE id = $_id ";
        $result = $conn->query($sqlcursos);
        $datos=mysqli_fetch_array($result);
    }
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
        <link href="./css/style.css" rel="stylesheet"/>
        <link href="./css/index.css" rel="stylesheet"/>
        <link rel="icon" href="./img/open-book.png">

        <title>Cursos</title>
    </head>
<body>
    <main>
        <?php include './header.php'?>
        <div class="contenedor mt-5">
            <div class="container">
                
                <div class="row justify-content-center mt-5">
                <?php include("./back/editarperfil.php"); ?>
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Perfil de Usuario</h5>
                        <img src="./img/perfil.jpg" style="width: 100px;">
                        <p class="card-text"><strong>Nombre:</strong> <?php echo $datos['nombre'] . ' ' .  $datos['apaterno'] .' '.  $datos['amaterno'] ?></p>
                        <p class="card-text"><strong>Correo electrónico:</strong> <?php echo $datos['correo'] ?></p>
                        <p class="card-text"><strong>Número de teléfono:</strong> <?php echo $datos['numero'] ?></p>
                        <button type="button" class="btn btn-primary px-4 ms-3" data-bs-toggle="modal" data-bs-target="#modaleditar">
                            Editar datos
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modaleditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Editar datos</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-3" value="<?php echo $datos['nombre']?>">
                                    <input type="text" name="apaterno" placeholder="Apellido paterno" class="form-control mb-3" value="<?php echo $datos['apaterno']?>">
                                    <input type="text" name="amaterno" placeholder="Apellido materno" class="form-control mb-3" value="<?php echo $datos['amaterno']?>">
                                    <input type="password" name="contrasena" placeholder="Ingresa la contraseña nueva" class="form-control mb-3">
                                    <input type="number" name="numero" placeholder="Numero Telefonico" class="form-control mb-3" value="<?php echo $datos['numero']?>">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary mb-2" name="btneditar" value="Aceptar">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
        <?php include './footer.html'?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>