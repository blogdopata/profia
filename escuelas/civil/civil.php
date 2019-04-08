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

      <?php include_once('../../blocks/header.html') ?>

    </header>
    <!-- ##### Header Area End ##### -->

 <!-- ##### banner ##### -->
 <div class="page-header9 img-fix-position2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption1 d-flex justify-content-center align-items-center" >
                        <h1 class="page-title2 d-flex align-items-center justify-content-center ">
                            INGENIERÍA CIVIL
                        </h1>
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
         
                <nav class="col-md-3 menu-tabs " style="margin-bottom:20px;">
                <div  class="nav flex-column fixBorder nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-item nav-link active" id="nav-escuela-tab" data-toggle="tab" href="#nav-escuela" role="tab" aria-controls="nav-escuela" aria-selected="true">Escuela</a>

                        <a class="nav-link" id="nav-infacad-tab" data-toggle="pill" href="#nav-infacad" role="tab" aria-controls="nav-infacad" aria-selected="true">Información Académica</a>

                        <a class="nav-item nav-link" id="nav-perfil-tab" data-toggle="tab" href="#nav-perfil" role="tab" aria-controls="nav-perfil" aria-selected="false">Perfil profesional</a>

                        <a class="nav-item nav-link" id="nav-faq-tab" data-toggle="tab" href="#nav-faq" role="tab" aria-controls="nav-faq" aria-selected="false">Preguntas frecuentes</a>

                        <a class="nav-link " id="nav-link-tab"  href="http://admision.usmp.edu.pe/" role="tab" aria-controls="nav-campus" aria-selected="false">Admisión</a>

                        <a class="nav-item nav-link" id="nav-campo-tab" data-toggle="tab" href="#nav-campo" role="tab" aria-controls="nav-campo" aria-selected="false">Campo Ocupacional</a>

                        <a class="nav-item nav-link" id="nav-campus-tab" data-toggle="tab" href="#nav-campus" role="tab" aria-controls="nav-campus" aria-selected="false">Campus</a>


                        <a class="nav-item nav-link" id="nav-contacto-tab" data-toggle="tab" href="#nav-contacto" role="tab" aria-controls="nav-contacto" aria-selected="false">Contacto</a>

<!-- 
                        <a class="nav-link " data-toggle="pill" data-target="#contacto" href="#nav-contacto" role="tab" aria-controls="nav-contacto" aria-selected="false">
                        <li data-toggle="modal" data-target="#contacto">Contacto</li>
                        </a> -->

                        <!--BACK UP PARA MOSTRAR PDFS NO TOCAR <a class="nav-item nav-link" id="nav-campo-tab" data-toggle="tab" href="#nav-organizacion" role="tab" aria-controls="nav-organizacion" aria-selected="false">Organización Plan de Estudios</a> -->

						<!-- <a class="nav-item nav-link"  href="http://www.usmp.edu.pe/ffia/files/calendario2018/plan_de_estudio/plan_2018-II_Ingenieria_Civil.pdf"  target="_blank">Organización Plan de Estudios</a> -->

                        <a class="nav-item nav-link" id="nav-estad-tab" data-toggle="tab" href="#nav-estad" role="tab" aria-controls="nav-estad" aria-selected="false">Estadísticas</a>

                        <a class="nav-item nav-link" id="nav-lab-tab" data-toggle="tab" href="#nav-lab" role="tab" aria-controls="nav-lab" aria-selected="false">Laboratorios</a>

                        <a class="nav-item nav-link" id="nav-eqlab-tab" data-toggle="tab" href="#nav-eqlab" role="tab" aria-controls="nav-eqlab" aria-selected="false">Equipos de Laboratorio</a>

                        <a class="nav-item nav-link" id="nav-myp-tab" data-toggle="tab" href="#nav-myp" role="tab" aria-controls="nav-myp" aria-selected="false">Manuales y Protocolos de Seguridad</a>

                        <a class="nav-item nav-link ult-item" id="nav-proy-tab" data-toggle="tab" href="#nav-proy" role="tab" aria-controls="nav-proy" aria-selected="false">Proyectos</a>


					</div>
                </nav>


    <!-- CONTENIDO TAB ESCUELA -->
    <div class="col-md-9 tab-content" id="nav-tabContent " style="font-family:Arial;">

    <div class="tab-pane fade show active" id="nav-escuela" role="tabpanel" aria-labelledby="nav-escuela-tab">
    
    <?php include('escuela.php') ?>
    
    </div>
    <!-- FIN CONTENIDO ESCUELA -->


    <!-- Contendio Tab Perfil Graduados -->

    <div class="tab-pane fade show " id="nav-perfil" role="tabpanel" aria-labelledby="nav-perfil-tab">
        
    <div class="container">
       <?php include('perfil.php') ?>
    </div>   

        
    </div>
    <!-- FIN Contendio Tab Perfil Graduados -->


    <!-- Contenido tab CAMPO OCUPACIONAL --> 
    <div class="tab-pane fade" id="nav-campo" role="tabpanel" aria-labelledby="nav-campo-tab">
        <div class="container">
            <h2 class="titulo-generico">
                Campo Ocupacional
            </h2>
            <p class="text-fix-style">
            El campo laboral del ingeniero civil es muy amplio debido a que esta profesión se preocupa por el bienestar general de las personas: construye responsablemente, soluciona problemas sociales y de infraestructura, integrando pueblos alejados. Una recopilación muy sucinta establece que el ámbito ocupacional del ingeniero civil es el siguiente:
            </p>
            <div class="listaperfil">
            <li>En el área de la construcción: viviendas, edificios multifamiliares, complejos habitacionales, hospitales, colegios, centros comerciales, locales industriales, centros turísticos y recreacionales, obras de saneamiento, electrificación y de habilitación urbana.</li>
            <li>En el área de transportes y obras viales: carreteras, puentes, túneles, puertos, aeropuertos, levantamientos topográficos y catastrales; estudios geológicos y de suelos.</li>
            <li>En el área de estructuras: diseño estructural de las edificaciones en general, edificios, puentes, presas, reservorios, irrigaciones, obras de saneamiento, etc.</li>
            <li>Hidráulica.</li>
            <li>Gestión y Asesoría.</li>
            </div>
        </div>
    </div>
    <!-- FIN Contenido tab CAMPO OCUPACIONAL --> 


    <!-- Contenido tab CAMPUS --> 

    <div class="tab-pane fade" id="nav-campus" role="tabpanel" aria-labelledby="nav-campus-tab">
        <div class="container">

        <?php include('../../blocks/campus.php') ?>

        </div>
        
    </div>

    <!-- FIN Contenido tab CAMPUS --> 

    <div class="tab-pane fade" id="nav-contacto" role="tabpanel" aria-labelledby="nav-contacto-tab">
       

        <?php include('../../blocks/contacto.php') ?>

       
        
    </div>



    <!-- Contenido tab FAQ --> 

    <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">
       

        <?php include('preguntasfrec.php') ?>

        
            
    </div>

    <!-- FIN Contenido tab FAQ --> 






     <!-- Contenido tab LABORATORIOS --> 

     <div class="tab-pane fade" id="nav-lab" role="tabpanel" aria-labelledby="nav-lab-tab">

    <?php include('laboratorios.php') ?>

    </div>

    <!-- FIN Contenido tab LABORATORIOS--> 




    <!-- Contenido tab MANUALES --> 

    <div class="tab-pane fade" id="nav-myp" role="tabpanel" aria-labelledby="nav-myp-tab">

    <?php include('manuales.php') ?>

    </div>

    <!-- FIN Contenido tab MANUALES--> 




    <!-- Contenido tab eq.LABORATORIOS --> 

    <div class="tab-pane fade" id="nav-eqlab" role="tabpanel" aria-labelledby="nav-eqlab-tab">

    <?php include('equipos.php') ?>

    </div>

    <!-- FIN Contenido tab eq.LABORATORIOS --> 







    <!-- Contenido tab PROYECTO --> 

    <div class="tab-pane fade" id="nav-proy" role="tabpanel" aria-labelledby="nav-proy-tab">

         <?php include('proyectos.php') ?>
    
    </div>

    <!-- FIN Contenido tab PROYECTO--> 






    <!-- Contenido tab INF ACADEMICA --> 

    <div class="tab-pane fade" id="nav-infacad" role="tabpanel" aria-labelledby="nav-infacad-tab">
        <div class="container">


            <h2 class="titulo-generico">
                Información Académica
            </h2>

           <p class="text-fix-style">
           La carrera de Ingeniería Civil en la USMP te permite ser un profesional responsable del planeamiento, diseño y construcción de todas las obras civiles que el país necesita, de manera sostenida y sustentable. Un País que progresa, es una sociedad que busca el bienestar de sus ciudadanos y tiene la necesidad de proyectar y construir viviendas, escuelas, edificios, hospitales, carreteras, puentes, aeropuertos, puertos, centrales hidroeléctricas, sistemas de irri­gación, etc. 
           </p>
           <br>

           <div class="listaperfil2">
               <li>Grado : Bachiller en Ingeniería Civil </li>
               <li>Título : Ingeniero Civil. </li>
               <li>Duración: 10 semestres </li>
               <li>Tipo de enseñanza : Presencial </li>
               <li>Régimen de estudios: Semestral </li>
               <li>Idioma: Español </li>
           </div>

           <br>

           <div class="container centrarimg" >
           <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/I8pzTrHgzJQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>


           

        </div>
            
    </div>
    <!-- FIN Contenido tab INF ACADEMICA --> 



                     <!-- Contenido tab Catalogo de Cursos --> 

                    <div class="tab-pane fade" id="nav-estad" role="tabpanel" aria-labelledby="nav-estad-tab">
                       <?php include('estadisticas.php') ?>
                     </div>
                     <!-- FIN Contenido tab Catalogo de Cursos --> 



                     <!-- Contenido tab Fotos --> 


                    <div class="tab-pane fade" id="nav-fotos" role="tabpanel" aria-labelledby="nav-fotos-tab">
                        <div class="container rowArqui">
                            <br>
                        <h1 id="azulfia" style="text-align:center;">FOTOS</h1></br>                             
                        <center><img src="http://www.usmp.edu.pe/acreditacionfia/escuelas/civil/img/cabecera/2.jpg"></center>
                            <br><br>
                            </div>
                       
                    </div>

                     <!-- FIN Contenido tab Fotos --> 



                     <!-- Contenido tab Ponencia --> 
                    <!-- <div class="tab-pane fade" id="nav-ponencia" role="tabpanel" aria-labelledby="nav-ponencia-tab">
                         <div class="container rowArqui">
                            <br>
                            <h1 id="azulfia" style="text-align:center;">PONENCIA</h1></br>  
                            <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="http://www.usmp.edu.pe/ffia/escuelas/civil/pdf/ponencia_ingCivil.pdf" id="archivo"></iframe>
                        </div>
                        <br><br>
                            </div>
                    </div> -->
                    <!-- FIN Contenido tab Ponencia --> 

                     <!-- Contenido tab Organización plan de Estudios --> 

                    <div class="tab-pane fade" id="nav-organizacion" role="tabpanel" aria-labelledby="nav-organizacion-tab">
                    <div class="container-fluid">
                        
                        <h2 id="grisfia">ORGANIZACIÓN PLAN DE ESTUDIOS</h2></br>   
                        <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="http://www.usmp.edu.pe/ffia/files/calendario2018/plan_de_estudio/plan_2018-II_Ingenieria_Civil.pdf" id="archivo" allowfullscreen></iframe>
                        </div> 
                        <br>
                        <br>
                        <br>
                        </div>
                    </div>

                    <!-- FIN Contenido tab Organización plan de Estudios --> 


                    </div>
                    </div>
        </section>
      
   
    <br>
    <center>
    <hr style="width:96%;">
    </center>                            
    

     <footer class="footer-area">
       
       <?php include_once('../../blocks/footer.html') ?>
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