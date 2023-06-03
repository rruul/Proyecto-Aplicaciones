<?php 
    include '../back/conexion.php';

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
        <link rel="stylesheet" href="./css/about.css">
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
                        <h2>Terminos y Condiciones</h2>
                        <div class="content1 mt-5">
                            <p class="about_texts">
                                Bienvenido/a a LearnSphere, una plataforma escolar en línea que ofrece servicios educativos. Antes de utilizar nuestros servicios, 
                                te pedimos que leas detenidamente los siguientes términos y condiciones, ya que establecen los derechos y responsabilidades tanto de 
                                los usuarios como de LearnSphere. Al acceder o utilizar nuestros servicios, aceptas estar legalmente obligado/a por estos términos y 
                                condiciones. Si no estás de acuerdo con alguno de los términos, te recomendamos que no utilices nuestra plataforma.
                            </p>
                        </div>
                        <div class="mt-3 content1" >
                            <table>
                                <tr>
                                    <th>1. Uso de la plataforma</th>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>a.</strong> LearnSphere es una plataforma diseñada para brindar servicios educativos a estudiantes, profesores y personal administrativo. <br>
                                        <strong>b.</strong> Al registrarte en LearnSphere, debes proporcionar información precisa y actualizada. No debes crear múltiples cuentas ni compartir tu cuenta con terceros. <br>
                                        <strong>c.</strong> Al utilizar nuestra plataforma, aceptas cumplir con todas las leyes y regulaciones aplicables.
                                    </td>
                                </tr>
                                <tr>
                                    <th>2. Privacidad y protección de datos:</th>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>a.</strong> Respetamos tu privacidad y nos comprometemos a proteger tus datos personales de acuerdo con nuestra política de privacidad. <br>
                                        <strong>b.</strong> Recopilamos y utilizamos tus datos personales solo con fines educativos y administrativos. No compartiremos tus datos con terceros sin tu consentimiento, excepto cuando sea necesario para cumplir con la ley o proteger nuestros derechos legales.
                                    </td>
                                </tr>
                                <tr>
                                    <th>3. Propiedad intelectual:</th>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>a.</strong> Todo el contenido de la plataforma, incluyendo textos, imágenes, videos, software y materiales educativos, está protegido por derechos de autor y otras leyes de propiedad intelectual.
                                        <strong>b.</strong> No está permitido copiar, modificar, distribuir o utilizar de cualquier forma el contenido de la plataforma sin nuestro consentimiento previo y por escrito.
                                    </td>
                                </tr>
                                <tr>
                                    <th>4. Conducta del usuario</th>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>a.</strong> Como usuario/a de la plataforma, te comprometes a utilizar nuestros servicios de manera responsable y respetuosa, sin difamar, acosar, amenazar o violar los derechos de otros usuarios. <br>
                                        <strong>b.</strong> No está permitido cargar, publicar o compartir contenido que sea ilegal, ofensivo, difamatorio, obsceno o que infrinja los derechos de propiedad intelectual de terceros.
                                    </td>
                                </tr>
                                <tr>
                                    <th>5. Responsabilidad:</th>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>a.</strong> La plataforma escolar en línea se proporciona "tal cual" y no ofrecemos garantías de ningún tipo en cuanto a su funcionamiento, precisión, confiabilidad o disponibilidad. <br>
                                        <strong>b.</strong> No nos hacemos responsables de cualquier daño directo, indirecto, incidental o consecuente que pueda surgir del uso o la imposibilidad de uso de la plataforma.
                                    </td>
                                </tr>
                                <tr>
                                    <th>6. Modificaciones y terminación:</th>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>a.</strong> Nos reservamos el derecho de realizar cambios en los términos y condiciones en cualquier momento. Te notificaremos sobre cualquier cambio y tu uso continuado de la plataforma después de dicha notificación constituirá tu aceptación de los nuevos términos. <br>
                                        <strong>b.</strong> Nos reservamos el derecho de suspender o cancelar tu cuenta y acceso a la plataforma si violas estos términos y condiciones.
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="content1 mt-5">
                            <p class="about_texts">
                            Estos términos y condiciones constituyen el acuerdo completo entre tú y LearnSphere con respecto al uso de nuestra plataforma escolar en línea. 
                            Si tienes alguna pregunta o inquietud, contáctanos a través de los canales de soporte proporcionados en LearnSphere. Gracias por utilizar nuestros servicios.
                            </p>
                        </div>
                    </div>
                    <div id="band" class="container text-center mt-4">
                            <h2>Creadores</h2>
                            <div class="row mt-4">
                                <div class="col-sm-4">
                                    <p><strong>Raul Eduardo Ortega</strong></p>
                                    <img src="./img/raul.jpg" class="rounded-circle person" alt="Random Name" width="235" height="235">
                                    <a href="https://github.com/rruul" target="_blank" ><i class="bi bi-github" style="text-decoration: none; font-size: 2.5em; color: #27374D;"></i></a>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-center"><strong>Jose Emmanuel Rangel</strong></p>
                                    <img src="./img/mane.jpg" class="rounded-circle text-center person" alt="Random Name" width="235" height="235">
                                    <a href="https://github.com/Mane645" target="_blank" ><i class="bi bi-github" style="text-decoration: none; font-size: 2.5em; color: #27374D;"></i></a>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-center"><strong>Jennifer Gonzalez</strong></p>
                                    <img src="./img/jennifer.jpg" class="rounded-circle person" alt="Random Name" width="235" height="235">
                                    <a href="https://github.com/gonzalezjennifer" target="_blank" ><i class="bi bi-github" style="text-decoration: none; font-size: 2.5em; color: #27374D;"></i></a>
                                </div>
                            </div>
                        </div>
                    <a href="./registro.php" class="btn btnabout" style="background-color: #19A7CE;">¡Registrate!</a>
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