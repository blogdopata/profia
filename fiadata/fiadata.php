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
    <link rel="stylesheet" href="../css/style.css">


<style>
.fiadatadiv
{
	width:100%;
	height:auto;
	border:5px #323233 solid;
	background:lavender;
	text-align:center;
	border-radius:10px;
	overflow:hidden;
	position:relative;
	transition:0.5s;
	margin-bottom:28px;
}


.fiadatadiv img
{
	
	margin-bottom:20px;
	width: 90px;
}

.fiadatadiv h3
{
	font-size:20px;
	font-weight:700;
}

.fiadatadiv p
{
	margin-bottom:0;
}

.fia-back
{
	width:100%;
	height:auto;
	position:absolute;
	top:0;
	left:0;
	padding:5px 15px 0 15px;
	text-align:left;
	background:lavender;
	
}

.fia-front
{
	width:100%;
	height:auto;
	position:relative;
	z-index:10;
	background:#fff;
	padding:15px;
	bottom:0px;
	transition: all 0.5s ease;
}

.fiadatadiv:hover .fia-front
{
	bottom:-200px;
	transition: all 0.5s ease;
}

.fiadatadiv:hover
{
	border-color:#777;
	transition:0.5s;
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

      <?php include_once('../blocks/header.html') ?>

    </header>
    <!-- ##### Header Area End ##### -->

 <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(http://www.usmp.edu.pe/proFIA/img/fia/nuestra-magic.jpg);">
        
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100" style="padding-bottom:25px;padding-top:30px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Facultad de Ingeniería y Arquitectura </span>
                        <h3>FIA - DATA</h3>
                    </div>
                </div>
            </div>
            <div class="row" style="background-image:url(img/fia/fachada2.jpg); no-repeat center top;background-size:cover;">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <p>
                        Tenemos la mejor infraestructura en tecnologías de Información del Perú y detrás de ella, la excelencia profesional. Por que solo así podemos exigir calidad a nuestros estudiantes. Fuimos los primeros en acortar la brecha en cuanto a realidad tecnológica de una Empresa con una Universidad en nuestro país.
                    </p>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <p>
                        Por eso insistimos mucho en la formación personal y profesional de nuestros estudiantes. Cualidades como el afán de investigación, empeño, tenacidad e iniciativa son elementos importantes que juntos ayudarán a la consecución del éxito profesional y capacidad garantizada de nuestros graduados. Por eso decimos que en FIA-DATA el mejor equipo es HUMANO.
                    </p>
                </div>
            </div>
            <br>
            <div class="card text-center">
                <div class="card-header bg-info text-white">
                     <b>ORGANIZACIÓN:</b>
                     <br><br>
                     La Facultad de Ingeniería de Computación y Sistemas cuenta con áreas de soporte tecnológico-producción que sirven de apoyo a la Facultad las cuales se detallan a continuación:
                </div>
            </div>
        
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    
    <div class="container">
	<div class="row">
	
	<!--FUNCIONES-->
	<div class="col-lg-4">
	<div class="fiadatadiv">
	
	<div class="fia-front">
	<img src="http://www.usmp.edu.pe/proFIA/img/fiadata/FUNCIONES.jpg" class="img-fluid" />
	<h3>Funciones</h3>
	<p>Fia-Data</p>
	</div>
	
	<div class="fia-back">
	<span>
	<div class="d-flex align-items-center justify-content-center h-100">
      <div class="d-flex flex-column">
        <p class="text align-self-center p-3">
		FIA – DATA es el órgano encargado de planificar, organizar, dirigir y controlar todas las actividades relacionadas con las tecnologías de Información.
		</p>
		<?php  include("funciones.php") ?>
		<a href="#" class="align-self-center p-3 link" data-toggle="modal" data-target="#funciones">Ver más</a>
      </div>
    </div>
	</span>
	</div>
	
	</div>
	</div>
	<!--FUNCIONES-->
	
    <!--OBJETIVOS-->
	<div class="col-lg-4">
	<div class="fiadatadiv">
	
	<div class="fia-front">
	<img src="http://www.usmp.edu.pe/proFIA/img/fiadata/OBJETIVOS.png" class="img-fluid" />
	<h3>Objetivos</h3>
	<p>Fia-Data</p>
	</div>
	
	<div class="fia-back">
	<span>
	<div class="d-flex align-items-center justify-content-center h-100">
      <div class="d-flex flex-column">
        <p class="text align-self-center p-3">
		FIA – DATA es el órgano encargado de planificar, organizar, dirigir y controlar todas las actividades relacionadas con las tecnologías de Información.
		</p>
		<?php  include("objetivos.php") ?>
		<a href="#" class="align-self-center p-3 link" data-toggle="modal" data-target="#objetivos">Ver más</a>
      </div>
    </div>
	</span>
	</div>
	
	</div>
	</div>
	<!--OBJETIVOS-->

    <!--Des.SW-->
	<div class="col-lg-4">
	<div class="fiadatadiv">
	
	<div class="fia-front">
	<img src="http://www.usmp.edu.pe/proFIA/img/fiadata/DSW.jpg" class="img-fluid" />
	<h3>Área de Desarrollo de Software</h3>
	</div>
	
	<div class="fia-back">
	<span>
	<div class="d-flex align-items-center justify-content-center h-100">
      <div class="d-flex flex-column">
        <p class="text align-self-center p-3">
		La fábrica de software es una organización altamente organizada que produce partes en una línea de producción utilizando elementos ...
		</p>
		<a href="http://www.usmp.edu.pe/fabrica/" target="_blank" class="align-self-center p-3 link">Ver más</a>
      </div>
    </div>
	</span>
	</div>
	
	</div>
	</div>
	<!--Des.SW-->

    <!--Grafimedia-->
	<div class="col-lg-4">
	<div class="fiadatadiv">
	
	<div class="fia-front">
	<img src="http://www.usmp.edu.pe/proFIA/img/fiadata/grafimedia.png" class="img-fluid" />
	<h3>Área de Diseño Gráfico y Multimedia</h3>
	</div>
	
	<div class="fia-back">
	<span>
	<div class="d-flex align-items-center justify-content-center h-100">
      <div class="d-flex flex-column">
        <p class="text align-self-center p-3">
		El Area de Diseño Gráfico y Multimedia brinda soluciones integrales utilizando tecnología de última generación complementados con creatividad ...
		</p>
		<?php  include("grafimedia.php") ?>
		<a href="#" class="align-self-center p-3 link" data-toggle="modal" data-target="#grafimedia">Ver más</a>
      </div>
    </div>
	</span>
	</div>
	
	</div>
	</div>
	<!--Grafimedia-->


    <!--STI-->
	<div class="col-lg-4">
	<div class="fiadatadiv">
	
	<div class="fia-front">
	<img src="http://www.usmp.edu.pe/proFIA/img/fiadata/STI.png" class="img-fluid" />
	<h3>Servicios de Tecnología de la Información</h3>
	</div>
	
	<div class="fia-back">
	<span>
	<div class="d-flex align-items-center justify-content-center h-100">
      <div class="d-flex flex-column">
        <p class="text align-self-center p-3">
		Es el órgano encargado de administrar los servicios de tecnología de la información y comunicaciones que soportan los procesos de negocio ...
		</p>
		<?php  include("sti.php") ?>
		<a href="#" class="align-self-center p-3 link" data-toggle="modal" data-target="#sti">Ver más</a>
      </div>
    </div>
	</span>
	</div>
	
	</div>
	</div>
	<!--STI-->

    <!--SDSK-->
	<div class="col-lg-4">
	<div class="fiadatadiv">
	
	<div class="fia-front">
	<img src="http://www.usmp.edu.pe/proFIA/img/fiadata/SDSK.png" class="img-fluid" />
	<h3>Service Desk</h3>
	<p>Fia-Data</p>
	</div>
	
	<div class="fia-back">
	<span>
	<div class="d-flex align-items-center justify-content-center h-100">
      <div class="d-flex flex-column">
        <p class="text align-self-center p-3">
		Service Desk es el área especializada en la gestión - solución de incidencias y requerimientos; realizados vía telefónica, presenciales, email ...
		</p>
		<?php  include("serviceDesk.php") ?>
		<a href="#" class="align-self-center p-3 link" data-toggle="modal" data-target="#sdsk">Ver más</a>
      </div>
    </div>
	</span>
	</div>
	
	</div>
	</div>
	<!--SDSK-->


	
	
	
	
	</div>
	</div>

<center>
    <hr style="width:96%;">
</center>    

    <footer class="footer-area">
       
       <?php include_once('../blocks/footer.html') ?>
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