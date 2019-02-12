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


    <style>
   




section .section-title {
    text-align: center;
    color: firebrick;
    margin-bottom: 50px;
    
}

#team .card {
    border: none;
    background: lavender;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
}

.backside .card a:hover {
    
    transition:2s;
    text-decoration:underline;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
    </style>

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
        
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100" style="padding-bottom:25px;padding-top:30px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Facultad de Ingeniería y Arquitectura </span>
                        <h3>Oficina de Coordinación Académica</h3>
                    </div>
                </div>
            </div>
            <div class="row" style="background-image:url(img/fia/fachada2.jpg); no-repeat center top;background-size:cover;">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <p>La Oficina de Coordinación Académica es una dependencia del Decanato y es el nexo principal entre la Facultad, los alumnos, sus docentes y el público en general.
                    <br>
                     Con el fin de garantizar la calidad de la enseñanza, provee el material y equipo necesario para el desarrollo de las clases, controla la asistencia, supervisa a los docentes y verifica el desarrollo y cumplimiento de los sílabos.</p>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <p>Encargada de la administración de los procesos de evaluación; coordina, programa, dirige y controla las prácticas calificadas y exámenes. <br><br> Desde aquí los Coordinadores Académicos, en sus diferentes turnos, brindan un servicio integral y personalizado, informando y atendiendo sus consultas. 
                     </p>
                </div>
            </div>
            <br>
            <div class="card text-center">
                <div class="card-header bg-info text-white">
                     <b>Equipo de coordinadores</b>
                </div>
            </div>
        
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    
    <section id="team" class="pb-5">
       
    <div class="container">
        
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img\autoridades\cardenasmartinez.jpg" alt="card image"></p>
                                    <h4 class="card-title">Turno mañana</h4>
                                    <p class="card-text">Mg. José A. Cárdenas Martínez</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Mg. José A. Cárdenas Martínez</h4>
                                    <p class="card-text">Coordinador turno mañana</p>
                                    <center><i style="color:royalblue" class="fa fa-envelope"></i> <a href="mailto:jcardenasm@usmp.pe">jcardenasm@usmp.pe</a></center>
                                    <br>
                                    <center><i class="fa fa-clock-o"></i> 08:00 am - 12:00 pm</center>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img\autoridades\nasario.jpg" alt="card image"></p>
                                    <h4 class="card-title">Turno tarde</h4>
                                    <p class="card-text">Ing. Edgar Rivera Fabian</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Ing. Edgar Rivera Fabian</h4>
                                    <br>
                                    <p class="card-text">Coordinador turno tarde</p>
                                    <center><i style="color:royalblue" class="fa fa-envelope"></i> <a href="mailto:eriveraf@usmp.pe">eriveraf@usmp.pe</a></center>
                                    <br>
                                    <center><i class="fa fa-clock-o"></i> 12:00 pm - 16:00 pm</center>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img\autoridades\coornoche.jpg" alt="card image"></p>
                                    <h4 class="card-title">Turno noche</h4>
                                    <p class="card-text">Ing. Fredy Adán Castro Salazar</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Ing. Fredy Adán Castro Salazar</h4>
                                    <p class="card-text">Coordinador turno noche</p>
                                    <center><i style="color:royalblue" class="fa fa-envelope"></i> <a href="mailto:fcastros@usmp.pe">fcastros@usmp.pe</a></center>
                                    <br>
                                    <center><i class="fa fa-clock-o"></i> 17:00 pm - 21:00 pm</center>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
         
        </section>


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