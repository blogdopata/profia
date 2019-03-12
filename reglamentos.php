<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title -->
    <title>Fia USMP</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logousmp.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

      <?php include_once('blocks/header.html') ?>

    </header>
    <!-- ##### Header Area End ##### -->

 <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/fia/nuestra-magic.jpg);">
        <div class="bradcumbContent">
            <h2>Reglamentos Generales</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Oficina de Registros Académicos</span>
                        <h3>Facultad de Ingeniería y Arquitectura</h3>
                    </div>
    </div>

   
    <section style="background-color:lavender;padding-top:20px;padding-bottom:20px;">
        <div class="page-full clearfix" style="border:solid 1px grey;border-radius:6px;box-shadow:2px 2px 3px grey;">

			<!-- Mostrando los Artículos -->
				<div class='art-page-full clearfix'>

				                    <header class="st-header">
				                    	<h1>Reglamentos</h1>
                                    </header>

                                        <section class="st-content">
                                        <dl>

                                        <?php  include("popuplegal/directivas/comprExcepcion.php") ?>    
                                        <dt><a href="" data-toggle="modal" data-target="#miModal5" alt=""><img src="http://www.usmp.edu.pe/proFIA/img/st_libro.png" /><span>Directivas de Compromiso de Excepción</span></a></dt>

                                        <?php  include("popuplegal/directivas/reservaMatricula.php") ?>
                                        <dt><a href="" data-toggle="modal" data-target="#miModal6" alt=""><img src="http://www.usmp.edu.pe/proFIA/img/st_libro.png" /><span>Directivas de Reserva de Matrícula  </span></a></dt>

                                        <?php  include("popuplegal/directivas/retiroCiclo.php") ?>
                                        <dt><a href="" data-toggle="modal" data-target="#miModal7" alt=""><img src="http://www.usmp.edu.pe/proFIA/img/st_libro.png" /><span>Directivas de Retiro de Ciclo</span></a></dt>
                                        
                                        <?php  include("popuplegal/directivas/retiroCurso.php") ?>
                                        <dt><a href="" data-toggle="modal" data-target="#miModal8" alt=""><img src="http://www.usmp.edu.pe/proFIA/img/st_libro.png" /><span>Directivas de Retiro de Cursos</span></a></dt>

                                        <?php  include("popuplegal/directivas/examSubsanacion.php") ?>
                                        <dt><a href="" data-toggle="modal" data-target="#miModal9" alt=""><img src="http://www.usmp.edu.pe/proFIA/img/st_libro.png" /><span>Directivas del Examen de Subsanación</span></a></dt>

                                        <?php  include("popuplegal/directivas/nivelacion.php") ?>
                                        <dt><a href="" data-toggle="modal" data-target="#miModal10" alt=""><img src="http://www.usmp.edu.pe/proFIA/img/st_libro.png" /><span>Directivas del Curso de Nivelación</span></a></dt>

                                        <?php  include("popuplegal/reglamentos/regAcademicos.php") ?>
                                        <dt><a href="" data-toggle="modal" data-target="#miModal2" alt=""><img src="http://www.usmp.edu.pe/proFIA/img/st_libro.png" /><span>Reglamento de Registros Académicos</span></a></dt>

                                        <?php  include("popuplegal/reglamentos/evalAprendizaje.php") ?>
                                        <dt><a href="" data-toggle="modal" data-target="#miModal3" alt=""><img src="http://www.usmp.edu.pe/proFIA/img/st_libro.png" /><span>Reglamento de Evaluación del Aprendizaje</span></a></dt>

                                        <?php  include("popuplegal/reglamentos/convAsignaturas.php") ?>
                                        <dt><a href="" data-toggle="modal" data-target="#miModal4" alt=""><img src="http://www.usmp.edu.pe/proFIA/img/st_libro.png" /><span>Reglamento de Convalidación de Asignaturas</span></a></dt>

                                        <?php  include("popuplegal/normas/reactualizacionMatricula.php") ?>
                                        <dt><a href="" data-toggle="modal" data-target="#miModal" alt=""><img src="http://www.usmp.edu.pe/proFIA/img/st_libro.png" /><span>Normas para Reactualización de Matrícula</span></a></dt>

                                        </dl>
                                        </section>
				</div>
							
		     <!-- Fin de los artículos -->
		</section>
    <br>
    <center>
<hr style="width:98%;">
    </center>
   <br>

    <footer class="footer-area">
       
       <?php include_once('blocks/footer.html') ?>
    </footer>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>