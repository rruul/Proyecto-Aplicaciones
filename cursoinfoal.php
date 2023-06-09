<?php
    session_start();
    include './back/conexion.php';
    include './back/alumno/info.php';
    if(empty($_SESSION["id"])){
        header('location: ./index.php');
    }
    if($_SESSION["tipo"] == "maestro"){
        header('location: ./miscursosmaestro.php');
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
            .texto {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .suscribete{
                width: 100%;
                display: flex;
                justify-content: flex-end;
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
        
        <link rel="icon" href="./img/open-book.png">
        <title>Curso</title>
    </head>
<body>
    <main style="background-color:black;">
        <?php include './header.php'?>
        <div class="contenedor">
            <div class="container text-light" style="background-color:#27374D;">
                <h2 class=" text-center pt-3" id="htexto"><?php echo $cos['nombre'] ?></h2>
                
                <div class="texto">
                    <p> <b>Creado por:</b> <?php echo $maes['nombre'].' '. $maes['apaterno']. ' '. $maes['amaterno']?></p>
                    <p style="margin-left: 3vw;"><i class="bi bi-globe"></i> Español</p>
                </div>
            </div>
            <div class="container">
                <div class="alert alert-success text-center" style="display:none;">Muy bien ya estas tomando el curso, date una vuelta por tus cursos</div>
            </div>
            <div class="container">
                <div class="contenido" id="contenido">
                <p class="mt-3" > <?php echo $cos['descripcion']?></p>
                </div>

            </div>
            <div class="container">
                <div class="suscribete">
                    <button type="button" class="btn btn-outline-dark" id="btnsal">Salir del curso</button>
                    <a href="./miscursosalumno.php" class="btn btn-outline-danger" style ="margin-left: 10px;">Regresar</a>
                </div>
            </div>
        </div>

        <?php include './footer.html'?>
    </main>
    
    <script src="/js/infocursosal.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>