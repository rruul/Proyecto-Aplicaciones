<?php
    session_start();
    include './back/conexion.php';
    include './back/maestro/loadalumnos.php';
    if(empty($_SESSION["id"])){
        header('location: ./index.php');
    }
    if($_SESSION["tipo"] != "admin"){
        header('location: ./index.php');
    }
    $sqlalum = "SELECT * FROM usuario";
    $resalum = $conn->query($sqlalum);
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
            .contbotones{
                display: grid;
                grid-template-columns: 1fr 1fr;
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
        <link rel="stylesheet" href="./css/maestroalumnos.css">
        
        <link rel="icon" href="./img/open-book.png">
        <title>Cursos</title>
    </head>
<body>
    <main>
        <?php include './header.php'?>
        <div class="contenedor">
            <div class="container">
                <div style="width: 100%;" class="contbotones">
                    <h2 class="mt-5" id="htexto">Alumnos registrados a este curso</h2>
                    
                    <div class="container" id="btncontenedor" style="display: flex; flex-direction: row; margin-top: 50px!important; margin-left: 15vw;">
                        <!-- Si se cambian estas clases de botones dentro de templates de debe cambiar el javascript o no jala-->
                        
                        <a class="btn btn-danger eliminarcurso" style="height: 5vh;"> Eliminar curso </a>
                        <a href="./miscursosadmin.php" class="btn btn-primary btnregreso" style="margin-left: 10px; height: 5vh;"> Regresar</a>
                        <button type="button" class="btn btnregistrar" data-bs-toggle="modal" data-bs-target="#registraralumno" style="margin-top: 50px!important; margin-left: 28vw; background-color: #19A7CE; color: white; transition-duration: 0.1s!important;">
                            <i class="bi bi-plus-circle-fill" style="margin-right: 5px;"></i>Registrar Alumno
                        </button>
                    </div>
                </div>
                <div class="cursos mt-5" id="alumnos">
                
                </div>
            </div>
        </div>

        <?php include './footer.html'?>
        <template id="cardalumno">
            <div class="stylecardcursos">
                <div class="textos">
                    <i class="bi bi-person-circle" style="font-size: 4em; margin: 0;"></i>
                    <div class="mastextos" style="margin: 0;">
                        <div class="nombre" style="font-size: 18px;"></div>
                        <div class="correo" id="correo"> </div> 
                    </div>
                </div>
                <!-- Si se cambian estas clases de botones dentro de templates de debe cambiar el javascript o no jala-->
                <button class="btn btn-danger btneliminar" style=" height: 5vh; width: 15vw;">Eliminar</button>
            </div>
            <br>
        </template>


        <div class="modal fade" id="registraralumno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar un curso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="idcurso" id="iddelcurso" class="form-control" value="">
                    <label class="form-label" for="maestros">Elige un alumno para añadir</label>
                    <select id="cars" name="alumnos" class="form-control" onfocus='this.size=3;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                        <?php while($alum=mysqli_fetch_array($resalum)){ ?>
                            <option value="<?php echo $alum['id']?>"><?php echo $alum['nombre'].' '.$alum['apaterno'].' '.$alum['amaterno']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="btnregcurso" value="Aceptar" id="btnregcurso">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
                </div>
            </div>
        </div>


    </main>
    
    <script src="./js/misalumnosadmin.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
