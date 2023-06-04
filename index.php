<?php 
    session_start();
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
        <link href="./css/style.css" rel="stylesheet"/>
        <link href="./css/index.css" rel="stylesheet"/>
        <link rel="icon" href="./img/open-book.png">

        <title>Cursos</title>
    </head>
<body>
    <main>
    <?php include './header.php'?>
            <!--Carousel section-->
            <section id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class = "carousel-indicators">
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-current="true"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-current="true"
                        aria-label="Slide 3"></button>
                </div>
                <!--Carousel content-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="carousel-image d-block w-100" src="./img/1.jpg">
                        <span class="carousel-caption">
                            <?php if(!empty($_SESSION["id"])):?>
                               <?php echo ' <h5> Bienvenido(a) '. '<span class="text-info">' . $_SESSION["tipo"] . '</span></h5>'?>
                                <p>
                                    Continua con los cursos en los que ya llevas progreso!
                                </p>
                                <a class="btn btnlinks mt-3" href="./redirecccion/rmiscursos.php" style="background-color: #19A7CE;"><i class="bi bi-archive"></i><span style="margin-left: 5px;"> Mis cursos</span></a>
                            <?php else: ?>
                                <h5>
                                    ¿Estas en busca de nuevos cursos?
                                    <span class="text-info">¡LearnSphere es para ti!</span>
                                </h5>
                                <p>
                                    Busca entre nuestros cursos y elige los que se adapten a tus necesidades!
                                </p>
                                <a class="btn btnlinks mt-3" href="./registro.php">Registrate</a>
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="carousel-item">
                        <img class="carousel-image d-block w-100" src="./img/2.jpg">
                        <span class="carousel-caption">
                            <?php if(!empty($_SESSION["id"])):?>
                               <?php echo ' <h5> Bienvenido(a) '. '<span class="text-info">' . $_SESSION["tipo"] . '</span></h5>'?>
                                <p>
                                    Busca cursos nuevos para comenzar!
                                </p>
                                <a class="btn btnlinks mt-3" href="./redirecccion/rcursos.php" style="background-color: #19A7CE;"><i class="bi bi-archive"></i><span style="margin-left: 5px;"> Cursos</span></a>
                            <?php else: ?>
                                <h5>
                                    ¿Quieres impartir algun curso pero no tienes una plataforma?
                                    <span class="text-info">¡LearnSphere es para ti!</span>
                                </h5>
                                <p>
                                    Imparte tus cursos en linea sin necesidad de establecer un horario de clase!
                                </p>
                                <a class="btn btnlinks mt-3" href="./registro.php">Registrate</a>
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="carousel-item">
                        <img class="carousel-image d-block w-100" src="./img/3.jpg">
                        <span class="carousel-caption">
                            <?php if(!empty($_SESSION["id"])):?>
                               <?php echo ' <h5> Bienvenido(a) '. '<span class="text-info">' . $_SESSION["tipo"] . '</span></h5>'?>
                                <p>
                                    Imparte un nuevo curso!
                                </p>
                                <a class="btn btnlinks mt-3" href="" style="background-color: #19A7CE;"><i class="bi bi-easel"></i><span style="margin-left: 5px;"> Enseña</span></a>
                            <?php else: ?>
                                <h5>
                                    ¿Te cuesta ir a la universidad?
                                    <span class="text-info">¡LearnSphere es para ti!</span>
                                </h5>
                                <p>
                                    Toma tus clases a traves de LearnSphere en el horario que se te adapte!
                                </p>
                                <a class="btn btnlinks mt-3" href="./registro.php">Registrate</a>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
                <!--Carousel prev and next buttons-->
                <button class = "carousel-control-prev" type = "button"
                    data-bs-target="#mainCarousel"
                    data-bs-slide="prev"
                >
                    <span class = "carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class = "visually-hidden">Previous</span>
                </button>
                <button class = "carousel-control-next" type = "button"
                    data-bs-target="#mainCarousel"
                    data-bs-slide="next"
                >
                    <span class = "carousel-control-next-icon" aria-hidden="true"></span>
                    <span class = "visually-hidden">Next</span>
                </button>
            </section>
            <?php include './footer.html'?>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>