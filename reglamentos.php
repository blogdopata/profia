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

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100" style="padding-bottom:25px;padding-top:30px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Oficina de Registros Académicos</span>
                        <h3>Facultad de Ingeniería y Arquitectura</h3>
                    </div>
                </div>
            </div>
            <!--con imagen <div class="row" style="background-image:url(img/fia/fachada2.jpg); no-repeat center top;background-size:cover;">-->

            <div class="row">
               <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" style="background-color:oldlace;">
                    <br>
                    <br>
                    <div style="background-color:rgba(0,0,255,0.3);text-align:center;color:white;" class="">
                     <h5 style="font-size:20px;">Directivas <i class="fa fa-legal"></i></h5>
                    </div>
                    
                     <br>
                      <?php  include("popuplegal/directivas/comprExcepcion.php") ?>
                     <a data-toggle="modal" data-target="#miModal5" class="link" href="">Directivas de Compromiso de Excepción <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>

                     <?php  include("popuplegal/directivas/reservaMatricula.php") ?>
                     <a data-toggle="modal" data-target="#miModal6" class="link" href="">Directivas de Reserva de Matrícula <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>

                     <?php  include("popuplegal/directivas/retiroCiclo.php") ?>
                     <a data-toggle="modal" data-target="#miModal7" class="link" href="">Directivas de Retiro de Ciclo  <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>

                     <?php  include("popuplegal/directivas/retiroCurso.php") ?>
                     <a data-toggle="modal" data-target="#miModal8" class="link" href="">Directivas de Retiro de Cursos  <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>

                     <?php  include("popuplegal/directivas/examSubsanacion.php") ?>
                     <a data-toggle="modal" data-target="#miModal9" class="link" href="">Directivas del Examen de Subsanación <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>

                     <?php  include("popuplegal/directivas/nivelacion.php") ?>
                     <a data-toggle="modal" data-target="#miModal10" class="link" href="">Directivas del Curso de Nivelación  <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                </div>

                 <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" style="background-color:oldlace;">
                   <br>
                    <br>
                    <div style="background-color:rgba(0,0,255,0.3);text-align:center;color:white;" class="">
                     <h5 style="font-size:20px;">Reglamentos <i class="fa fa-mortar-board"></i> </h5> 
                    </div>
                 <br>
                   <?php  include("popuplegal/reglamentos/regAcademicos.php") ?>
                   <a data-toggle="modal" data-target="#miModal2" class="link" href="">Reglamento de Registros Académicos <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>

                   <?php  include("popuplegal/reglamentos/evalAprendizaje.php") ?>
                   <a data-toggle="modal" data-target="#miModal3" class="link" href="">Reglamento de Evaluación del Aprendizaje <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>

                   <?php  include("popuplegal/reglamentos/convAsignaturas.php") ?>
                   <a data-toggle="modal" data-target="#miModal4" class="link" href="">Reglamento de Convalidación de Asignaturas <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>


                    <br>
                    <br>
                    <div style="background-color:rgba(0,0,255,0.3);text-align:center;color:white;" class="">
                     <h5 style="font-size:20px;">Normas <i class="fa fa-pencil-square"></i></h5>
                </div>
                 <br>
                     <?php  include("popuplegal/normas/reactualizacionMatricula.php") ?>
                     <a data-toggle="modal" data-target="#miModal" class="link" href="">Normas para Reactualización de Matrícula </a> <br> <br> 
            </div>

        </div>
    </section>
   



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