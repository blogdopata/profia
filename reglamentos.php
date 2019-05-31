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

   
    <header class="header-area">
        
      <?php include_once('blocks/header.html') ?>

    </header>
    <!-- ##### Header Area End ##### -->

 <!-- ##### Breadcumb Area Start ##### -->
    <div  class="bg-img img-fix-position-bg" style="background-image: url('http://www.usmp.edu.pe/fia/img/bg-img/reglamentos.jpg');"  >
     
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->

    <div class="container" style='margin-top:120px; ' >
      <div class="row">
          <div class="col-12">
                <h2  class="title-general-fix">
                  REGLAMENTOS 
                </h2>
            </div>
        </div> 
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    

    <div class="container">

        <div class="row  mb-2 mt-3">
                               
            <div class="col-12 col-md-3 font-mode fix-height"  >
                <div class="py-5 d-flex flex-column justify-content-center align-items-center fontmode-bd" >
                    <h5 class="text-info-gen text-center"  >Directivas de Compromiso de Excepción </h5>
                    <?php include('popuplegal/directivas/comprExcepcion.php') ?>
                    <a data-toggle="modal" href="#miModal5" data-toogle="miModal5" class="text-link-gen" >Ver más</a>
                    
                </div>
            </div>
            
            
            <div class="col-12 col-md-3 font-mode fix-height"  >
                <div class="py-5 d-flex flex-column justify-content-center align-items-center fontmode-bd" >
                    <h5 class="text-info-gen text-center"  >Directivas de Reserva de Matrícula</h5>
                    <?php include('popuplegal/directivas/reservaMatricula.php') ?>
                    <a data-toggle="modal" href="#miModal6" data-toogle="miModal6" class="text-link-gen" >Ver más</a>
                    
                </div>
            </div>
        
            <div class="col-12 col-md-3 font-mode fix-height"  >
                <div class="py-5 d-flex flex-column justify-content-center align-items-center fontmode-bd" >
                    <h5 class="text-info-gen text-center"  >Directivas de Retiro de Ciclo</h5>
                    <?php include('popuplegal/directivas/retiroCiclo.php') ?>
                    <a data-toggle="modal" href="#miModal7" data-toogle="miModal7" class="text-link-gen" >Ver más</a>
                    
                </div>
            </div>

            <div class="col-12 col-md-3 font-mode fix-height"  >
                <div class="py-5 d-flex flex-column justify-content-center align-items-center fontmode-bd" >
                    <h5 class="text-info-gen text-center"  >Directivas de Retiro de Cursos</h5>
                    <?php include('popuplegal/directivas/retiroCurso.php') ?>
                    <a data-toggle="modal" href="#miModal8" data-toogle="miModal8" class="text-link-gen" >Ver más</a>
                    
                </div>
            </div>
                               

        </div>

        <div class="row  mb-5 mt-3">
            
            <div class="col-12 col-md-3 font-mode"  >
                <div class="py-5 d-flex flex-column justify-content-center align-items-center fontmode-bd" >
                    <h5 class="text-info-gen text-center"  >Directivas de Examen de Subsanación</h5>
                    <?php include('popuplegal/directivas/examSubsanacion.php') ?>
                    <a data-toggle="modal" href="#miModal9" data-toogle="miModal9" class="text-link-gen" >Ver más</a>
                    
                </div>
            </div>

            
            <div class="col-12 col-md-3 font-mode"  >
                <div class="py-5 d-flex flex-column justify-content-center align-items-center fontmode-bd" >
                    <h5 class="text-info-gen text-center"  >Directivas del Curso de Nivelación</h5>
                    <?php include('popuplegal/directivas/nivelacion.php') ?>
                    <a data-toggle="modal" href="#miModal10" data-toogle="miModal10" class="text-link-gen" >Ver más</a>
                    
                </div>
            </div>

            <div class="col-12 col-md-3 font-mode"  >
                <div class="py-5 d-flex flex-column justify-content-center align-items-center fontmode-bd" >
                    <h5 class="text-info-gen text-center"  >Reglamento de Registros Académicos</h5>
                    <?php include('popuplegal/reglamentos/regAcademicos.php') ?>
                    <a data-toggle="modal" href="#miModal2" data-toogle="miModal2" class="text-link-gen" >Ver más</a>
                    
                </div>
            </div>

            <div class="col-12 col-md-3 font-mode"  >
                <div class="py-5 d-flex flex-column justify-content-center align-items-center fontmode-bd" >
                    <h5 class="text-info-gen text-center"  >Reglamento de Evaluación del Aprendizaje </h5>
                    <?php include('popuplegal/reglamentos/evalAprendizaje.php') ?>
                    <a data-toggle="modal" href="#miModal3" data-toogle="miModal3" class="text-link-gen" >Ver más</a>
                    
                </div>
            </div>

        </div>

        <div class="row  mb-5 mt-3">

        <div class="col-12 col-md-3 font-mode"  >
                <div class="py-5 d-flex flex-column justify-content-center align-items-center fontmode-bd" >
                    <h5 class="text-info-gen text-center"  >Reglamento de Convalidación de Asignaturas </h5>
                    <?php include('popuplegal/reglamentos/convAsignaturas.php') ?>
                    <a data-toggle="modal" href="#miModal4" data-toogle="miModal4" class="text-link-gen" >Ver más</a>
                    
                </div>
            </div>

            
            <div class="col-12 col-md-3 font-mode"  >
                <div class="py-5 d-flex flex-column justify-content-center align-items-center fontmode-bd" >
                    <h5 class="text-info-gen text-center"  >Normas para Reactualización de Matrícula </h5>
                    <?php include('popuplegal/normas/reactualizacionMatricula.php') ?>
                    <a data-toggle="modal" href="#miModal" data-toogle="miModal" class="text-link-gen" >Ver más</a>
                    
                </div>
            </div>

            
            

        </div>



    </div>






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