<?php
    session_start();
    include './back/conexion.php';
    if(empty($_SESSION["id"])){
        header('location: ./index.php');
    }
    if($_SESSION["tipo"] == "alumno"){
        header('location: ./miscursosalumno.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <style>
            .btnregistrar:hover {
                color: black!important;
                background-color: #AFD3E2!important;
            }
            body {
                font-family: 'Red Hat Display', sans-serif;
            }
        </style>
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
        <link href="./css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/mcursosmaestro.css">
        <link rel="icon" href="./img/open-book.png">
        <title>Cursos</title>
    </head>
<body>
    <main>
        <?php include './header.php'?>
        <div class="contenedor">
            <div class="container">
                <div class="cabeceratop" style="display: flex; ">
                    <h2 class="mt-5">Tus cursos registrados</h2>
                    <?php include './back/maestro/miscursos.php'; ?>
                    <div class="nuevocurso">
                        <button type="button" class="btn btnregistrar" data-bs-toggle="modal" data-bs-target="#registrarcurso" style="margin-top: 50px!important; margin-left: 48vw; background-color: #19A7CE; color: white; transition-duration: 0.1s!important;">
                            <i class="bi bi-plus-circle-fill" style="margin-right: 5px;"></i>Registrar curso
                        </button>
                        <?php include './back/maestro/registrocurso.php'?>
                    </div>
                </div>
                <div class="cursos mt-5" id="cursos">
                
                </div>
            </div>
        </div>

        <div class="modal fade" id="registrarcurso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar un curso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="validationCustom01" class="form-label">Nombre del curso</label>
                    <input type="text" name="nombre" class="form-control" id="validationCustom01" require>
                    <label for="validationCustom03" class="form-label mt-3">Detalles del curso</label>
                    <textarea type="text" name="descripcion" class="form-control" id="validationCustom03" required></textarea>
                    <label for="validationCustom02" class="form-label mt-3">Duracion del curso en horas</label>
                    <input type="number" name="horas" step="0.01" class="form-control" id="validationCustom02" require>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="btnregcurso" value="Aceptar" id="btnregcurso">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
                </div>
            </div>
        </div>

        <?php include './footer.html'?>
        <template id="cardcursos">
            <div class="stylecardcursos">
                <div class="titulo"></div>
                <img src="./img/imgcurso.png" class="imgcardcursos">
                <div class="horas" id="horas"> </div>
                <form action="./maestroalumnos.php" method="post">
                    <input type="number" name="id" id="id" class="id d-none" value="">
                    <input type="submit" value="Alumnos" class="btn btn-primary btnenviar" id="btnenviar">
                </form>
            </div>
        </template>

    </main>
    
    <script src="./js/miscursosmaestro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>