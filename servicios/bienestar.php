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
    <link rel="icon" href="http://www.usmp.edu.pe/fia/img/core-img/logousmp.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="http://www.usmp.edu.pe/fia/css/style.css">

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
 <div class="page-header14 img-fix-position2">
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
    <section class="about-us-area mt-15 section-padding-100">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
                <h5  class="title-general-fix">
                        BIENESTAR UNIVERSITARIO
                </h5>
            </div>
        </div> 
    </div>
    <br>
        <div class="container">
         <div class="row"> 
         <nav class="col-md-3 menu-tabs " style="margin-bottom:20px;">
         
         <div  class="nav flex-column fixBorder nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
         
                        <a class="nav-item nav-link active" id="nav-nosotros-tab" data-toggle="tab" href="#nav-nosotros" role="tab" aria-controls="nav-nosotros" aria-selected="false">Nosotros</a>
						<a class="nav-item nav-link" id="nav-social-tab" data-toggle="tab" href="#nav-social" role="tab" aria-controls="nav-social" aria-selected="false">Servicio Social</a>  
                        <a class="nav-item nav-link" id="nav-seguro-tab" data-toggle="tab" href="#nav-seguro" role="tab" aria-controls="nav-seguro" aria-selected="false">Seguro de Accidentes</a>
                        <a class="nav-item nav-link" id="nav-psicologia-tab" data-toggle="tab" href="#nav-psicologia" role="tab" aria-controls="nav-psicologia" aria-selected="false">Servicio de Orientación Psicológica</a> <a class="nav-item nav-link" id="nav-becas-tab" data-toggle="tab" href="#nav-becas" role="tab" aria-controls="nav-becas" aria-selected="false">Concurso de Becas</a>     
                        <a class="nav-item nav-link ult-item" id="nav-adatosp-tab" data-toggle="tab" href="#nav-adatosp" role="tab" aria-controls="nav-adatosp" aria-selected="false">Actualización de datos personales</a>               
					</div>
                </nav>


                <!-- CONTENIDO TAB NOSOTROS -->
				<div class="col-md-9 tab-content" id="nav-tabContent " style="font-family:Arial;">

					<div class="tab-pane fade show active" id="nav-nosotros" role="tabpanel" aria-labelledby="nav-nosotros-tab">
						
                        <div class="container">

                            
                           <p class="text-fix-content">
                           La Oficina de Bienestar Universitario de la Facultad de Ingeniería y Arquitectura, es la encargada de orientar, asistir y promover al estudiante que se encuentra en situación de riesgo, contribuyendo a superarlos con la participación de un equipo multidisciplinario, a través de una adecuada atención integral, humanizando el proceso de enseñanza y aprendizaje, contribuyendo, de esta manera, al mejoramiento de la calidad de vida de los miembros de nuestra Comunidad Universitaria.
                           </p>

                           <br>

                           <h2 class="subtitle-general-fix">MISIÓN</h2>
                           
                           <p class="text-fix-content">
                           Contribuir a una óptima formación integral del estudiante, propiciando las condiciones adecuadas para un eficiente desarrollo físico, psicoafectivo y social, fomentando principios y valores de nuestra Comunidad Universitaria, para el logro de una buena Cultura Institucional.
                           </p>
                            
                        
                        
                        </div> 
                                            

                    </div> 
                    <!-- FIN CONTENIDO NOSOTROS -->

           
                    <!-- Contendio Tab servicio social -->

				   <div class="tab-pane fade show " id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">
                  
                            
                    <div class="container">
                    <h5 class="subtitle-general-fix">
                                   SERVICIO SOCIAL
                                </h5>

                                <p class="text-fix-content">
                                Es la unidad encargada de evaluar los casos sociales y/o situaciones de riesgo de la población universitaria, así como brindar la orientación e información respectiva de los trámites a seguir para la obtención de beneficios que otorga la Facultad, además de organizar y promover actividades de bienestar social para los estudiantes, personal docente y administrativo de nuestra Comunidad Universitaria.
                                </p>
                               
                                <div class="row">
                                <img class="img-fluid" src="http://www.usmp.edu.pe/fia/img/prestaciones/otros/fotoBienestar2.jpg" style="margin:auto;" alt="">
                                </div>
                        
                    </div>        
                    </div>
                   <!-- FIN Contendio Tab servicio social -->


                   <!-- Contendio Tab servicio social -->

				   <div class="tab-pane fade show " id="nav-seguro" role="tabpanel" aria-labelledby="nav-seguro-tab">
                        <?php include('accidente.php') ?>    
                  </div>
                 <!-- FIN Contendio Tab servicio social -->


                 <!-- Contendio Tab servicio orientacion psicologica -->

				   <div class="tab-pane fade show " id="nav-psicologia" role="tabpanel" aria-labelledby="nav-psicologia-tab">
                        <?php include('psicologia.php') ?>    
                  </div>
                 <!-- FIN Contendio Tab servicio orientacion psicologica -->


                 <!-- Contendio Tab BECAS -->

				   <div class="tab-pane fade show " id="nav-becas" role="tabpanel" aria-labelledby="nav-becas-tab">
                        <?php include('becas.php') ?>    
                  </div>
                 <!-- FIN Contendio Tab BECAS -->



                   <!-- Contendio Tab actualizacion de datos personales -->

				   <div class="tab-pane fade show " id="nav-adatosp" role="tabpanel" aria-labelledby="nav-adatosp-tab">
                  
                            
                  <div class="container">
                  <h5 class="subtitle-general-fix">
                                 ACTUALIZACIÓN DE DATOS PERSONALES
                              </h5>
                                
                              <p class="text-fix-content">
                              La Facultad de Ingeniería y Arquitectura, pensando siempre en mantener una excelente relación Universidad-alumno, considera necesaria la constante actualización de la base de datos personales de sus estudiantes, por lo que se les recuerda lo siguiente:
                              </p>
                             
                              <ul class="fix-items-li">
                                  <li>Aquellos alumnos regulares que, por diversas razones, no brindaron oportunamente sus datos personales o se haya producido un cambio en la información proporcionada inicialmente, están obligados a actualizar sus datos ante la Oficina de Bienestar Universitario.</li>
                                  <li>Los alumnos ingresantes y aquellos que realicen su Reactualización de Matrícula, deberán presentar su Ficha de Datos Personales debidamente llenada al momento de matricularse.</li>
                            </ul>
                      
                  </div>        
                  </div>
                 <!-- FIN Contendio Tab actualizacion de datos personales -->

                        


                     

                        
                    </div>
        </section>

   
        <br>
    

    

     <footer class="footer-area">
       
       <?php include('../blocks/footer.html') ?>
    </footer>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="http://usmp.edu.pe/fia/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="http://usmp.edu.pe/fia/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="http://usmp.edu.pe/fia/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="http://usmp.edu.pe/fia/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="http://usmp.edu.pe/fia/js/active.js"></script>
</body>

</html>