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
    <link rel="icon" href="http://www.usmp.edu.pe/proFIA/img/core-img/logousmp.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="http://www.usmp.edu.pe/proFIA/css/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

      <?php include('../blocks/header.html') ?>


    </header>
    <!-- ##### Header Area End ##### -->

 <!-- ##### banner ##### -->
 <div class="page-header13 img-fix-position2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption1 d-flex justify-content-center align-items-center" >
                        <!-- <h1 class="page-title2 d-flex align-items-center justify-content-center " style="text-align:center;">
                           
                        </h1> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### banner ##### -->

    <!-- ##### contenido ##### -->
    <section class="about-us-area mt-50 section-padding-100">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
                <h5  class="titulo-principal">
                        ACTIVIDADES CULTURALES
                </h5>
            </div>
        </div> 
    </div>
    <br>
        <div class="container">
         <div class="row"> 
         <nav class="col-md-3 menu-tabs " style="margin-bottom:20px;">
         
         <div  class="nav flex-column fixBorder nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
         
                        <a class="nav-item nav-link active" id="nav-bienvenidos-tab" data-toggle="tab" href="#nav-bienvenidos" role="tab" aria-controls="nav-bienvenidos" aria-selected="false">Talleres</a>
						<a class="nav-item nav-link ult-item" id="nav-organizacion-tab" data-toggle="tab" href="#nav-organizacion" role="tab" aria-controls="nav-organizacion" aria-selected="false">Objetivos</a>                      
					</div>
                </nav>


                <!-- CONTENIDO TAB  BIENVENIDOS -->
				<div class="col-md-9 tab-content" id="nav-tabContent " style="font-family:Arial;">

					<div class="tab-pane fade show active" id="nav-bienvenidos" role="tabpanel" aria-labelledby="nav-bienvenidos-tab">
						
                        <div class="container">
                        
                            
                           <p class="text-fix-style">La Facultad de Ingeniería y Arquitectura cuenta actualmente con 2 talleres dirigidos a los estudiantes universitarios en General:
                           </p>

                           <h5 class="titulo-generico">TALLER DE DANZA</h5>
                           
                           <p class="text-fix-style">
                           El taller de Danza nace con la finalidad de practicar en todo su esplendor las Danzas que tenemos a nivel nacional, fomentando así el espíritu cultural en todos los estudiantes universitarios.
                           </p>
                            <br>
                           <h5 class="titulo-generico">TALLER DE PROGRAMACIÓN</h5>
                           
                           <p class="text-fix-style">
                           El taller es un organismo que nace en concordancia con las nuevas directivas del Decano de la Facultad de elevar el nivel de preparación de los alumnos. Está conformado por alumnos de la Facultad que se incorporan a él en forma voluntaria con la intención de formar grupos de trabajo e investigación en todas las áreas de desarrollo de software y uno o más profesores asesores que serán el profesional orientador, conjuntamente con la Oficina de Proyección Social. El Taller es un organismo de acceso libre, donde el horario de ingreso o de salida, no existe.
                           </p>
                            
                        
                        
                        </div> 
                                            

                    </div> 

                    

                    <!-- FIN CONTENIDO BIENVENIDOS -->



                    <!-- Contendio Tab Perfil Graduados -->

				   <div class="tab-pane fade show " id="nav-organizacion" role="tabpanel" aria-labelledby="nav-organizacion-tab">
                   <h5 class="titulo-generico">
                                   OBJETIVOS
                                </h5>
                            
                    <div class="container">
                        <div class="row">

                                <p class="text-fix-style">
                                El objetivo del taller es promover el espíritu de investigación de los alumnos de la Facultad, formando inicialmente cuadros con conocimientos avanzados en lenguajes de programación tales como en lenguajes orientados a objetos y visuales, y en un futuro la explotación de las diversas tecnologías de información, multimedia, red de redes, Internet, la utilización de lenguajes de cuarta generación, la investigación y aplicación de herramientas Case-Icase para el desarrollo de Sistemas de Información y todo aquello que implique el uso de lo último en Tecnologías de Información. La formación de cuadros capaces, redundará en beneficio tanto de las personas interesadas que verán así incrementar sus potencialidades profesionales de manera exponencial, así como también para la Facultad, ya que la Institución estará enviando al mercado elementos con una muy alta calificación, lo que redundará en prestigio para la institución y esto irá incrementando más y más el privilegio de la Facultad y por tanto de todos sus egresados.
                                </p>
                        </div>
                    </div>        
                    </div>
                   <!-- FIN Contendio Tab Perfil Graduados -->

                        


                     <div class="tab-pane fade" id="nav-eventos" role="tabpanel" aria-labelledby="nav-novedades-tab">
                        
                            <?php include('eventos.php') ?>
                   
                    </div>


                    </div>
        </section>

   
        <br>
    <center>
    <hr style="width:96%;">
    </center>

    

     <footer class="footer-area">
       
       <?php include('../blocks/footer.html') ?>
    </footer>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="http://usmp.edu.pe/proFIA/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="http://usmp.edu.pe/proFIA/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="http://usmp.edu.pe/proFIA/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="http://usmp.edu.pe/proFIA/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="http://usmp.edu.pe/proFIA/js/active.js"></script>
</body>

</html>