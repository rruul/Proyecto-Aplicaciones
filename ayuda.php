<?php 
    include './back/conexion.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <style>
            .btnabout {
                color: white!important;
            }

            .btn:hover {
                background-color: #AFD3E2!important;
                color: black!important;
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
        <link href="/css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="./css/ayuda.css">
        <link rel="icon" href="./img/open-book.png">
        <title>Cursos</title>
    </head>
<body>
    <?php include './header.php'?>

    <main>
        <div class="contenedor">
            <div class="principal">
                <div class="container mt-4 mb-1" style="overflow:hidden; padding: 40px;">
                    <div class="text-center">
                        <h2>Ayuda y Asistencia<i class="bi bi-chat-left-heart" style="margin-left: 13px;"></i></h2>
                        <div class="content1 mt-5">
                            <p class="about_texts">
                                <strong>¡Bienvenido a nuestra página de ayuda y atención al cliente!</strong> <br>
                                En LearnSphere entendemos que a veces pueden surgir dificultades técnicas o preguntas mientras 
                                navegas por nuestra página. Estamos aquí para ayudarte a superar cualquier obstáculo y asegurarnos 
                                de que disfrutes de una experiencia fluida y exitosa en tu camino educativo. <br><br>

                                Si estás experimentando algún problema con la página, ya sea relacionado con el inicio de sesión, 
                                la navegación, el acceso a los cursos o cualquier otra cuestión, no dudes en contactarnos. Estamos 
                                comprometidos a proporcionarte el soporte técnico necesario para resolver tus inquietudes de manera 
                                rápida y efectiva. <br><br>

                                Para solicitar ayuda, simplemente completa el formulario de contacto que se encuentra en esta página, 
                                y proporciona todos los detalles relevantes sobre el problema que estás enfrentando. Nuestro equipo de 
                                asistencia técnica especializada se comunicará contigo a la brevedad posible para brindarte una solución 
                                o guía personalizada. <br><br>

                                Valoramos tus comentarios y opiniones, ya que nos ayudan a mejorar constantemente nuestra plataforma educativa. 
                                Si tienes alguna sugerencia o comentario sobre cómo podemos optimizar tu experiencia en LearnSphere, no dudes 
                                en compartirlo con nosotros. Tu satisfacción es nuestra prioridad. <br><br>

                                Gracias por elegir LearnSphere como tu plataforma educativa de confianza. Estamos aquí para brindarte la ayuda 
                                y atención necesaria para que puedas aprovechar al máximo tus estudios. Juntos, alcanzaremos el éxito educativo que deseas.
                            </p>
                        </div>
                        <div class="mt-2 content1" >
                            <div class="container">
                                <h3 class="my-5">¡Contactanos!<i class="bi bi-chat-heart" style="margin-left: 13px;"></i></h3>
                                <form class="row g-3" novalidate id="formulario">
                                    <div class="col-md-6">
                                        <label for="validationCustom01"
                                        class="form-label"
                                        >
                                            <strong>Correo de contacto</strong>
                                        </label>
                                        <?php if(!empty($_SESSION["id"])):?>
                                                <?php 
                                                    $idusu = $_SESSION["id"];
                                                    $usutipo = $_SESSION["tipo"];
                                                    if ($usutipo == "alumno"){
                                                        $sql = "SELECT * FROM usuario WHERE id='$idusu'";
                                                        $res = mysqli_query($conn, $sql);
                                                        $correo = mysqli_fetch_array($res);
                                                    } else {
                                                        $sql = "SELECT * FROM maestro WHERE id='$idusu'";
                                                        $res = mysqli_query($conn, $sql);
                                                        $correo = mysqli_fetch_array($res);
                                                    }
                                                    echo '<input type="text" name="usuario" class="form-control" id="validationCustom01" value="'. $correo['correo'] .'" disabled>';
                                                ?>
                                            <?php else: ?>
                                                <?php echo '<input type="text" name="usuario" class="form-control" id="validationCustom01" placeholder="Escribe tu correo" required>' ?>
                                            <?php endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom02"
                                        class="form-label"
                                        >
                                            <strong>Correo</strong>
                                        </label>
                                        <input type="email" name="correo" class="form-control" id="validationCustom02"  value ="soporte@learnsphere.com" disabled>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom03"
                                        class="form-label"
                                        >
                                            <strong>Mensaje</strong>
                                        </label>
                                        <textarea class="form-control" placeholder="Escribe tu mensaje..." required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <center>
                                            <button class="btn btnabout" type="submit" id="boton" style="width: 30%; background-color: #19A7CE;">Enviar</button>
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="herowave" style="overflow: hidden;" >
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                        <path d="M-0.00,50.10 C150.00,150.33 349.20,-50.10 500.00,50.10 L500.00,150.33 L-0.00,150.33 Z" style="stroke: none; fill: #19A7CE;">
                        </path>
                    </svg>
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