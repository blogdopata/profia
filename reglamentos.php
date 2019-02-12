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
    #colorRed{
        color:royalblue;
    }
    .link{
    color: #0062cc;
    }
    a.link:hover{
    color:black !important;
    text-decoration:underline !important;    
    }

   /* .fa-window-restore:hover:before {
    color:blue;
    }*/
    .modal-dialog{
    overflow-y: initial !important
}
.modal-body{
    height: 550px;
    overflow-y: auto;
}
.modal-body h6{
  color:#017090;
}
    .popupheader{
        background-color:black;
        text-align:center;
    }
    .fade{
        opacity:1;
        -webkit-transaction: opacity 1s linear;
        transaction:opacity 1s linear;
    }
    .modal-footer small{
      margin:auto;
      text-align:left; 
    }
    div .modal-footer{
      
      border-top: 2px solid #CCD1D1;
    }
    .modal-footer button{
      float:right;
    }

    .modal-body{
      background: url("img/bg-img/marcasAgua/marca2.jpg");
      background-size:contain;
      background-repeat:no-repeat;
      background-position: right center;
      color:black;
      font-weight:500;
      font-size:14px;
    }
    .modal-body p{
      color:black;
      
    }
    .modal-body a:hover h6{
      text-decoration:underline;
      color:red;
      transition:1s;
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
            <div class="row" style="background-image:url(img/fia/fachada2.jpg); no-repeat center top;background-size:cover;">
                <div class="col-12 col-md-4 wow fadeInUp text-center" data-wow-delay="400ms">
                    <br>
                    <br>
                    <div style="background-color:rgba(0,0,255,0.3);text-align:center;color:white;">
                     <b style="font-size:20px;">Reglamentos</b>
                </div>
                 <br>
                   <a data-toggle="modal" data-target="#miModal2" class="link" href="">Reglamento de Registros Académicos <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                   <a data-toggle="modal" data-target="#miModal3" class="link" href="">Reglamento de Evaluación del Aprendizaje <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                   <a data-toggle="modal" data-target="#miModal4" class="link" href="">Reglamento de Convalidación de Asignaturas <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="400ms">
                    <br>
                    <br>
                    <div style="background-color:rgba(0,0,255,0.3);text-align:center;color:white;">
                     <b style="font-size:20px;">Directivas</b>
                </div>
                 <br>
                     <a data-toggle="modal" data-target="#miModal5" class="link" href="">Directivas de Compromiso de Excepción <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                     <a data-toggle="modal" data-target="#miModal6" class="link" href="">Directivas de Reserva de Matrícula <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                     <a data-toggle="modal" data-target="#miModal7" class="link" href="">Directivas de Retiro de ciclo  <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                     <a data-toggle="modal" data-target="#miModal8" class="link" href="">Directivas de Retiro de Cursos  <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                     <a data-toggle="modal" data-target="#miModal9" class="link" href="">Directivas del Examen de Subsanación <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                     <a data-toggle="modal" data-target="#miModal10" class="link" href="">Directivas del Curso de Nivelación  <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                     
                </div>
                 <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="400ms">
                    <br>
                    <br>
                    <div style="background-color:rgba(0,0,255,0.3);text-align:center;color:white;">
                     <b style="font-size:20px;">Normas</b>
                </div>
                 <br>
                     <a data-toggle="modal" data-target="#miModal" class="link" href="">Normas para Reactualización de Matrícula <i id="colorRed" class="fa fa-window-restore"></i></a> <br> <br>
                </div>
            </div>
            <br>
            
               
           
       
        </div>
    </section>
   
<!--inicio modal-->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Normas para Reactualización de Matrícula </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        <address><b>(Aprobado por Resolución Rectoral Nro. 539-2000-CU-R-USMP de fecha 03 de agosto del 2000)</b></address>
        <br>
        <h6>Artículo 1°</h6>
        <br>
        <p>
        Entiéndase por Reactualización de Matrícula al acto académico-administrativo, mediante el cual el estudiante que hubiera dejado de estudiar y no haya reservado su matrícula, obtiene habilitación para poder matricularse como alumno regular en la Facultad o Escuela a la que corresponda.
        </p>
        <br>
        <h6>Artículo 2°</h6>
        <br>
        <p>
        El procedimiento de Reactualización se inicia a petición de parte, con los requisitos establecidos, y culmina con una Resolución Decanal que resuelve aprobar la Reactualización de matrícula del estudiante y la convalidación y/o equivalencia de asignaturas a que hubiere lugar.
        </p>
        <br>
        <h6>Artículo 3°</h6><br>
        <p>El estudiante presenta una solicitud en especie valorada y dirigida al decano, adjuntando :
        <br><br>
        ➢ Recibo de pago, cancelado, por derecho de reactualización de matrícula. <br>
        ➢ Carta de Compromiso de continuar regularmente sus estudios.
        <br>
        <h6>Artículo 4°</h6>
        <br>
        <p>
        La Oficina de Registros Académicos evalúa la situación académica del estudiante, realiza las convalidaciones y/o equivalencias pertinentes, fija el Plan de Estudios y Ciclo Académico que le corresponde al alumno, de acuerdo con el currículo vigente.
        </p>
        <br>
        <h6>Artículo 5°</h6>
        <br>
        <p>Con la información precedente, se expide la Resolución Decanal correspondiente. Recibida aquella por el alumno, procede matricularse siguiendo las normas de matrícula regular.</p>
        <br>
        <h6>Artículo 6°</h6>
        <br>
        <p>
        Aquellas situaciones no contempladas en las presentes normas son resueltas por el Consejo de Facultad e informadas a la instancia superior.
        </p>
        <br>
        <h6>Artículo 7°</h6><br>
        <p>El presente Reglamento entra en vigencia al día siguiente de ser aprobado por el Consejo Universitario. </p>
      </div>
      <div class="modal-footer">
        <small>Oficina de Registros Académicos</small><button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->   


<!--inicio modal-->
<div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Reglamento de Registros Académicos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        <h6>Título I : Disposiciones Generales</h6> <br>
<h6>Capítulo I: Base Legal</h6>
Artículo 1.- Fundamento Jurídico – Normativo <br> <br>


<h6>Capítulo II: Generalidades</h6>
Artículo 2.- De los Objetivos de la Oficina de Registros Académicos <br>
Artículo 3.- De las Funciones de la Oficina de Registros Académicos <br> <br>


<h6>Capítulo III: de la Estructura de la Oficina de Registros Académicos</h6>
Artículo 4.- De la Oficina de Registros Académicos <br>
Artículo 5.- Del Jefe de la Oficina de Registros Académicos <br>
Artículo 6.- Del personal de apoyo <br> <br>


<h6>Capítulo IV: de las Actividades Conexas con el Departamento Académico</h6>
Artículo 7.- De la distribución horaria, del Plan de Estudios y los sílabos <br>
Artículo 8.- De la distribución de aulas <br><br>


<h6>Capítulo V: de los Registros y Actas</h6>
Artículo 9.- De los registros <br>
Artículo 10.- De los Registros Provisionales <br>
Artículo 11.- De los Registros Oficiales <br>
Artículo 12.- De las Actas <br><br> <br>

<hr>

<h6>Titulo II : de la Matrícula</h6> <br>
<h6>Capítulo I: Generalidades</h6>
Artículo 13.- Naturaleza de la Matrícula  <br>
Artículo 14.- Duración de la Matrícula <br>
Artículo 15.- Efectos de la Matrícula <br>
Artículo 16.- De la individualidad de la matrícula <br>
Artículo 17.- Actos administrativos derivados de la matrícula <br>
Artículo 18.- De la Ficha de Matrícula <br>
Artículo 19.- Del Formato de la Ficha de Matrícula <br>
Artículo 20.- Error en la Ficha de Matrícula <br>
Artículo 21.- Pérdida del derecho de matrícula <br> <br>


<h6>Capítulo II: de la Matrícula de los Alumnos Ingresantes a través del Concurso Ordinario de Admisión</h6>
Artículo 22.- Naturaleza <br>
Artículo 23.- De los requisitos para matricularse <br>
Artículo 24.- Del trámite de la matrícula <br>
Artículo 25 .-De la obligatoriedad de la matrícula <br> <br>


<h6>Capítulo III: de las Matrícula de los Alumnos Ingresantes Exonerados del Concurso Ordinario de Admisión</h6>
Artículo 26.- Naturaleza <br>
Artículo 27.- De los requisitos para matricularse <br>
Artículo 28.- De la convalidación de asignaturas <br> <br>


<h6>Capítulo IV: de la Matrícula de los Alumnos Regulares</h6>
Artículo 29.- Naturaleza <br>
Artículo 30.- Condiciones del alumno regular <br>
Artículo 31.- Del Procedimiento de la matrícula <br>
Artículo 32.- De la matrícula en asignaturas de diferentes ciclos <br>
Artículo 33.- De la matrícula de extemporáneos <br>
Artículo 34.- De la Ampliación de créditos <br> <br>


<h6>Capítulo V: de la Matrícula de los Alumnos Especiales</h6>
Artículo 35.- Naturaleza <br>
Artículo 36.- Casos de Matrículas Especiales <br>
Artículo 37.- De la Matrícula Especial Simple <br>
Artículo 38.- De los requisitos <br> <br>


<h6>Capítulo VI: del Retiro de Ciclo</h6>
Artículo 39.- Naturaleza <br>
Artículo 40.- Requisitos especiales <br>
Artículo 41.- Del otorgamiento y los efectos del retiro de ciclo <br>
Artículo 42.- De la reincorporación a la Universidad <br> <br>


<h6>Capítulo VII: de la Reserva de Matrícula</h6> 
Artículo 43.- Naturaleza  <br>
Artículo 44.- Requisitos para acogerse a la Reserva de Matrícula <br>
Artículo 45.- Del otorgamiento del derecho de Reserva de Matrícula <br>
Artículo 46.- Del reincorporación a la Universidad <br> <br>


<h6>Capítulo VIII: de la Reactualización de Matrícula</h6> 
Artículo 47.- Naturaleza <br>
Artículo 48.- Requisitos en la Reactualización de matrícula <br>
Artículo 49.- Del procedimiento en la Reactualización de Matrícula <br>
Artículo 50.- De la Convalidación de Estudios <br> <br> <br>

<hr>


<h6>Titulo III : Otros Actos Administrativos</h6> <br>
<h6>Capítulo I: del Promedio Ponderado</h6>
TERCIO Y QUINTO SUPERIOR <br>
Artículo 51.- Del promedio ponderado <br>
Artículo 52.- Tercio y Quinto Superior <br><br>


<h6>Capítulo II: de los Exámenes de Subsanación </h6>
Artículo 53.- Del examen de subsanación  <br>
Artículo 54.- Requisitos de Examen de Subsanación <br>
Artículo 55.- Del otorgamiento del examen de subsanación <br> <br>


<h6>Capítulo III: de los Exámenes de Aplazados</h6>
Artículo 56.- De los exámenes de aplazados <br> 
Artículo 57.- Requisitos del examen de aplazados <br> <br>


<h6>Capítulo IV: Curso de Nivelación </h6>
Artículo 58.- Naturaleza <br>
Artículo 59.- De la proyección y programación del Curso de Nivelación  <br>
Artículo 60.- Requisitos para la matrícula en el Curso de Nivelación  <br>
Artículo 61.- De la responsabilidad de los docentes <br> <br>


<h6>Capitulo V: de las Renuncias a la Universidad</h6>
Artículo 62.- De la renuncia a la Universidad <br>
Artículo 63.- De los requisitos <br><br>


<h6>Capítulo VI: de los Tramites Documentarios en la Oficina de Registros Académicos</h6> 

Artículo 64.- De los Trámites Documentarios  <br>
Artículo 65.- De la Constancia de Estudio <br>
Artículo 66- De los Certificados de Estudio  <br>
Artículo 67.- Del Duplicado de la Constancia de Matrícula <br>
Artículo 68.- De la Constancia de Notas <br>
Artículo 69.- De la Constancia de Egresado <br>
Artículo 70.- Del Duplicado del Carné Universitario <br>
Artículo 71.- Del Record Académico <br>
Articulo 72.- Del cambio de turno o aula. <br>
Artículo 73.- De la constancia de orden de mérito y promedio ponderado <br>
Artículo 74.- De la Constancia de Tercio o Quinto Superior <br>
Artículo 75.- De la Constancia de Conducta <br>
Artículo 76.- De la Carta de Presentación <br>
Artículo 77.- De la Carta de Prácticas Pre-Profesionales <br>
Artículo 78.- De la Carta de Visita <br>
Artículo 79.- De la Constancia de Biblioteca <br> <br> <br>

<hr>


<h6>Disposiciones Complementarias</h6>

Artículo 80.- De los casos no previstos <br> <br> <br>

<hr>
<a href="legal/disposicionesfinales.php" ><h6>Disposiciones Finales</h6></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->   


<!--inicio submodal-->
<div class="modal fade" id="subModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        ejemplo
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de submodal-->  


<!--inicio modal-->
<div class="modal fade" id="miModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit amet voluptas, asperiores facere architecto quia, modi, debitis tenetur dolor et saepe dignissimos. Ducimus quo quidem voluptas facere ab delectus, provident!</div>
        <div>Dicta sequi, quos voluptatem aliquid. Ea accusamus ipsum, odio accusantium eaque ut molestiae impedit odit dolores error, maxime, porro beatae eligendi recusandae minima perferendis necessitatibus quidem pariatur ex! Nulla, nemo.</div>
        <div>Sit harum porro minus necessitatibus? Accusamus veniam fugiat nesciunt alias, a ipsum voluptates! Facilis placeat tenetur nulla nesciunt id possimus error! Totam ut repudiandae rerum, delectus blanditiis magnam. Saepe, ratione.</div>
        <div>Temporibus in culpa ullam, repellendus dolore nobis officia iusto voluptate assumenda dolorem! Soluta, asperiores excepturi pariatur animi ipsa, atque eum recusandae quae minus obcaecati odit at aperiam explicabo voluptas non?</div>
        <div>Eveniet deserunt ratione minus, provident optio voluptatibus, aliquid harum quia eum, temporibus nemo sapiente unde consequatur esse similique! Cum blanditiis hic praesentium tempore quae, ad nostrum quaerat impedit explicabo repellat.</div>
        <div>Ratione, doloribus, placeat, ab impedit facere totam a provident eius dicta nostrum magnam? Dolorum repellat esse, sit at voluptatibus et hic corporis. Natus, iure? Dolorum asperiores sequi illum tenetur quia.</div>
        <div>Praesentium voluptate reiciendis sunt non consequuntur iusto molestias natus officiis quisquam minus aliquid, dicta commodi, pariatur quibusdam sapiente voluptatum atque inventore temporibus saepe amet! Magnam adipisci aliquam aperiam, sunt mollitia!</div>
        <div>Rem natus rerum recusandae ea fugiat quae, dolor ipsum voluptatem facilis. Natus dolores atque consectetur perspiciatis, repellat corrupti quod recusandae debitis iure quibusdam nihil sapiente explicabo exercitationem, sit praesentium alias!</div>
        <div>Id aliquam, vero quidem odit doloribus eum, nihil, dolorem blanditiis quia natus porro nam incidunt tempora sequi rem voluptas, tempore nulla iusto. At labore accusantium praesentium nostrum, ut vitae. Dolor.</div>
        <div>Soluta odit, omnis dolorem a explicabo ipsa atque dolores adipisci sequi dolore iure mollitia pariatur esse deleniti, repellat quia impedit, assumenda, harum distinctio similique fugit! Autem tempore, officia obcaecati totam?</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis a dolores alias quam explicabo culpa minus dolor, inventore repudiandae beatae repellendus sequi adipisci iusto, et voluptates illo modi, quas perferendis.</div>
        <div>Possimus facilis voluptate maiores! Laboriosam, fuga? Soluta nemo eum nobis quos, explicabo dolores provident quidem quasi ad laudantium, commodi, aliquid deleniti labore modi amet blanditiis quae tempore distinctio dolore architecto?</div>
        <div>Tempora consequuntur repellendus aliquam doloribus hic soluta earum fuga enim totam nisi voluptatem, quam tenetur. Recusandae cum dicta accusamus aut magni, temporibus, similique, magnam voluptatum, quasi iure labore itaque et.</div>
        <div>Voluptatibus quas magnam a consectetur, dicta, quos suscipit labore minima saepe. Atque optio reprehenderit dignissimos in voluptas maxime, iusto dolores quibusdam asperiores illum, earum tenetur nulla. Praesentium maxime, consectetur unde!</div>
        <div>Eligendi voluptate voluptatibus voluptatem libero itaque ut, exercitationem corporis architecto dolores aliquid provident molestiae accusantium dolor saepe esse incidunt reiciendis alias suscipit, qui quia voluptatum eius temporibus minus. Nulla, voluptas.</div>
        <div>Consequatur ut dolor, soluta accusantium temporibus ex! Libero ipsum consequatur commodi dolor sequi molestias, illo eligendi quaerat ad adipisci aliquid ullam quae cumque ipsa error dolorum autem vero vitae. Velit.</div>
        <div>Voluptates beatae saepe tempore quibusdam dolorem. Sapiente excepturi dicta praesentium, nobis alias, neque labore eos est nesciunt distinctio nostrum quidem itaque culpa quam minima doloremque quod in aliquid asperiores odit.</div>
        <div>Voluptatibus praesentium amet fuga molestiae tenetur totam nisi, excepturi nobis quae veritatis molestias aliquid fugit eos et repellat ad rerum officiis, nesciunt, enim accusamus voluptatum temporibus saepe laudantium, ratione illo.</div>
        <div>Consectetur id quae quis soluta corporis iste quasi voluptatem magni temporibus ut modi ab possimus, quaerat harum quod vel est voluptates quisquam, sequi culpa tempore iusto illo? Similique iusto, deleniti!</div>
        <div>Dolor consequuntur omnis error. Quam labore nihil beatae hic ipsum excepturi consectetur iure eum nesciunt harum, blanditiis quisquam, maiores vero! Quo inventore, ullam fuga voluptatem omnis illo facilis tenetur accusantium.</div>
        <div>Iusto, officiis beatae ipsa odio quos illo ipsum, possimus perspiciatis excepturi deserunt laudantium, est tenetur? Enim, culpa, libero! Quibusdam, iure, dolores? Voluptas provident quod perferendis officia esse ad at dolores.</div>
        <div>Rem cum ducimus fuga nesciunt provident eligendi culpa enim quia natus, temporibus quaerat, beatae illo, dignissimos voluptates magni. Beatae sint consequuntur, possimus cumque aspernatur dolore est, quasi reiciendis voluptas! Nemo.</div>
        <div>Officia, ad id hic expedita doloribus aliquam nobis. Eaque dignissimos, omnis maxime magni molestias enim debitis consectetur, facere, iure corporis dolorum, officia. Accusantium veniam unde magnam repudiandae dignissimos provident non!</div>
        <div>Quia quidem minima tempora dicta fugit atque dolore praesentium, quasi, laudantium perferendis autem repellendus in omnis. Sed incidunt unde sunt, itaque, obcaecati esse velit, nesciunt aspernatur ad dignissimos explicabo omnis.</div>
        <div>Alias incidunt nam, est rem laborum soluta quas necessitatibus minus eaque quia doloremque amet repudiandae earum commodi ab, dolore esse vel deserunt praesentium, neque aperiam. Nobis nostrum quas, ex nihil.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->   

<!--inicio modal-->
<div class="modal fade" id="miModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit amet voluptas, asperiores facere architecto quia, modi, debitis tenetur dolor et saepe dignissimos. Ducimus quo quidem voluptas facere ab delectus, provident!</div>
        <div>Dicta sequi, quos voluptatem aliquid. Ea accusamus ipsum, odio accusantium eaque ut molestiae impedit odit dolores error, maxime, porro beatae eligendi recusandae minima perferendis necessitatibus quidem pariatur ex! Nulla, nemo.</div>
        <div>Sit harum porro minus necessitatibus? Accusamus veniam fugiat nesciunt alias, a ipsum voluptates! Facilis placeat tenetur nulla nesciunt id possimus error! Totam ut repudiandae rerum, delectus blanditiis magnam. Saepe, ratione.</div>
        <div>Temporibus in culpa ullam, repellendus dolore nobis officia iusto voluptate assumenda dolorem! Soluta, asperiores excepturi pariatur animi ipsa, atque eum recusandae quae minus obcaecati odit at aperiam explicabo voluptas non?</div>
        <div>Eveniet deserunt ratione minus, provident optio voluptatibus, aliquid harum quia eum, temporibus nemo sapiente unde consequatur esse similique! Cum blanditiis hic praesentium tempore quae, ad nostrum quaerat impedit explicabo repellat.</div>
        <div>Ratione, doloribus, placeat, ab impedit facere totam a provident eius dicta nostrum magnam? Dolorum repellat esse, sit at voluptatibus et hic corporis. Natus, iure? Dolorum asperiores sequi illum tenetur quia.</div>
        <div>Praesentium voluptate reiciendis sunt non consequuntur iusto molestias natus officiis quisquam minus aliquid, dicta commodi, pariatur quibusdam sapiente voluptatum atque inventore temporibus saepe amet! Magnam adipisci aliquam aperiam, sunt mollitia!</div>
        <div>Rem natus rerum recusandae ea fugiat quae, dolor ipsum voluptatem facilis. Natus dolores atque consectetur perspiciatis, repellat corrupti quod recusandae debitis iure quibusdam nihil sapiente explicabo exercitationem, sit praesentium alias!</div>
        <div>Id aliquam, vero quidem odit doloribus eum, nihil, dolorem blanditiis quia natus porro nam incidunt tempora sequi rem voluptas, tempore nulla iusto. At labore accusantium praesentium nostrum, ut vitae. Dolor.</div>
        <div>Soluta odit, omnis dolorem a explicabo ipsa atque dolores adipisci sequi dolore iure mollitia pariatur esse deleniti, repellat quia impedit, assumenda, harum distinctio similique fugit! Autem tempore, officia obcaecati totam?</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis a dolores alias quam explicabo culpa minus dolor, inventore repudiandae beatae repellendus sequi adipisci iusto, et voluptates illo modi, quas perferendis.</div>
        <div>Possimus facilis voluptate maiores! Laboriosam, fuga? Soluta nemo eum nobis quos, explicabo dolores provident quidem quasi ad laudantium, commodi, aliquid deleniti labore modi amet blanditiis quae tempore distinctio dolore architecto?</div>
        <div>Tempora consequuntur repellendus aliquam doloribus hic soluta earum fuga enim totam nisi voluptatem, quam tenetur. Recusandae cum dicta accusamus aut magni, temporibus, similique, magnam voluptatum, quasi iure labore itaque et.</div>
        <div>Voluptatibus quas magnam a consectetur, dicta, quos suscipit labore minima saepe. Atque optio reprehenderit dignissimos in voluptas maxime, iusto dolores quibusdam asperiores illum, earum tenetur nulla. Praesentium maxime, consectetur unde!</div>
        <div>Eligendi voluptate voluptatibus voluptatem libero itaque ut, exercitationem corporis architecto dolores aliquid provident molestiae accusantium dolor saepe esse incidunt reiciendis alias suscipit, qui quia voluptatum eius temporibus minus. Nulla, voluptas.</div>
        <div>Consequatur ut dolor, soluta accusantium temporibus ex! Libero ipsum consequatur commodi dolor sequi molestias, illo eligendi quaerat ad adipisci aliquid ullam quae cumque ipsa error dolorum autem vero vitae. Velit.</div>
        <div>Voluptates beatae saepe tempore quibusdam dolorem. Sapiente excepturi dicta praesentium, nobis alias, neque labore eos est nesciunt distinctio nostrum quidem itaque culpa quam minima doloremque quod in aliquid asperiores odit.</div>
        <div>Voluptatibus praesentium amet fuga molestiae tenetur totam nisi, excepturi nobis quae veritatis molestias aliquid fugit eos et repellat ad rerum officiis, nesciunt, enim accusamus voluptatum temporibus saepe laudantium, ratione illo.</div>
        <div>Consectetur id quae quis soluta corporis iste quasi voluptatem magni temporibus ut modi ab possimus, quaerat harum quod vel est voluptates quisquam, sequi culpa tempore iusto illo? Similique iusto, deleniti!</div>
        <div>Dolor consequuntur omnis error. Quam labore nihil beatae hic ipsum excepturi consectetur iure eum nesciunt harum, blanditiis quisquam, maiores vero! Quo inventore, ullam fuga voluptatem omnis illo facilis tenetur accusantium.</div>
        <div>Iusto, officiis beatae ipsa odio quos illo ipsum, possimus perspiciatis excepturi deserunt laudantium, est tenetur? Enim, culpa, libero! Quibusdam, iure, dolores? Voluptas provident quod perferendis officia esse ad at dolores.</div>
        <div>Rem cum ducimus fuga nesciunt provident eligendi culpa enim quia natus, temporibus quaerat, beatae illo, dignissimos voluptates magni. Beatae sint consequuntur, possimus cumque aspernatur dolore est, quasi reiciendis voluptas! Nemo.</div>
        <div>Officia, ad id hic expedita doloribus aliquam nobis. Eaque dignissimos, omnis maxime magni molestias enim debitis consectetur, facere, iure corporis dolorum, officia. Accusantium veniam unde magnam repudiandae dignissimos provident non!</div>
        <div>Quia quidem minima tempora dicta fugit atque dolore praesentium, quasi, laudantium perferendis autem repellendus in omnis. Sed incidunt unde sunt, itaque, obcaecati esse velit, nesciunt aspernatur ad dignissimos explicabo omnis.</div>
        <div>Alias incidunt nam, est rem laborum soluta quas necessitatibus minus eaque quia doloremque amet repudiandae earum commodi ab, dolore esse vel deserunt praesentium, neque aperiam. Nobis nostrum quas, ex nihil.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->   


<!--inicio modal-->
<div class="modal fade" id="miModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit amet voluptas, asperiores facere architecto quia, modi, debitis tenetur dolor et saepe dignissimos. Ducimus quo quidem voluptas facere ab delectus, provident!</div>
        <div>Dicta sequi, quos voluptatem aliquid. Ea accusamus ipsum, odio accusantium eaque ut molestiae impedit odit dolores error, maxime, porro beatae eligendi recusandae minima perferendis necessitatibus quidem pariatur ex! Nulla, nemo.</div>
        <div>Sit harum porro minus necessitatibus? Accusamus veniam fugiat nesciunt alias, a ipsum voluptates! Facilis placeat tenetur nulla nesciunt id possimus error! Totam ut repudiandae rerum, delectus blanditiis magnam. Saepe, ratione.</div>
        <div>Temporibus in culpa ullam, repellendus dolore nobis officia iusto voluptate assumenda dolorem! Soluta, asperiores excepturi pariatur animi ipsa, atque eum recusandae quae minus obcaecati odit at aperiam explicabo voluptas non?</div>
        <div>Eveniet deserunt ratione minus, provident optio voluptatibus, aliquid harum quia eum, temporibus nemo sapiente unde consequatur esse similique! Cum blanditiis hic praesentium tempore quae, ad nostrum quaerat impedit explicabo repellat.</div>
        <div>Ratione, doloribus, placeat, ab impedit facere totam a provident eius dicta nostrum magnam? Dolorum repellat esse, sit at voluptatibus et hic corporis. Natus, iure? Dolorum asperiores sequi illum tenetur quia.</div>
        <div>Praesentium voluptate reiciendis sunt non consequuntur iusto molestias natus officiis quisquam minus aliquid, dicta commodi, pariatur quibusdam sapiente voluptatum atque inventore temporibus saepe amet! Magnam adipisci aliquam aperiam, sunt mollitia!</div>
        <div>Rem natus rerum recusandae ea fugiat quae, dolor ipsum voluptatem facilis. Natus dolores atque consectetur perspiciatis, repellat corrupti quod recusandae debitis iure quibusdam nihil sapiente explicabo exercitationem, sit praesentium alias!</div>
        <div>Id aliquam, vero quidem odit doloribus eum, nihil, dolorem blanditiis quia natus porro nam incidunt tempora sequi rem voluptas, tempore nulla iusto. At labore accusantium praesentium nostrum, ut vitae. Dolor.</div>
        <div>Soluta odit, omnis dolorem a explicabo ipsa atque dolores adipisci sequi dolore iure mollitia pariatur esse deleniti, repellat quia impedit, assumenda, harum distinctio similique fugit! Autem tempore, officia obcaecati totam?</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis a dolores alias quam explicabo culpa minus dolor, inventore repudiandae beatae repellendus sequi adipisci iusto, et voluptates illo modi, quas perferendis.</div>
        <div>Possimus facilis voluptate maiores! Laboriosam, fuga? Soluta nemo eum nobis quos, explicabo dolores provident quidem quasi ad laudantium, commodi, aliquid deleniti labore modi amet blanditiis quae tempore distinctio dolore architecto?</div>
        <div>Tempora consequuntur repellendus aliquam doloribus hic soluta earum fuga enim totam nisi voluptatem, quam tenetur. Recusandae cum dicta accusamus aut magni, temporibus, similique, magnam voluptatum, quasi iure labore itaque et.</div>
        <div>Voluptatibus quas magnam a consectetur, dicta, quos suscipit labore minima saepe. Atque optio reprehenderit dignissimos in voluptas maxime, iusto dolores quibusdam asperiores illum, earum tenetur nulla. Praesentium maxime, consectetur unde!</div>
        <div>Eligendi voluptate voluptatibus voluptatem libero itaque ut, exercitationem corporis architecto dolores aliquid provident molestiae accusantium dolor saepe esse incidunt reiciendis alias suscipit, qui quia voluptatum eius temporibus minus. Nulla, voluptas.</div>
        <div>Consequatur ut dolor, soluta accusantium temporibus ex! Libero ipsum consequatur commodi dolor sequi molestias, illo eligendi quaerat ad adipisci aliquid ullam quae cumque ipsa error dolorum autem vero vitae. Velit.</div>
        <div>Voluptates beatae saepe tempore quibusdam dolorem. Sapiente excepturi dicta praesentium, nobis alias, neque labore eos est nesciunt distinctio nostrum quidem itaque culpa quam minima doloremque quod in aliquid asperiores odit.</div>
        <div>Voluptatibus praesentium amet fuga molestiae tenetur totam nisi, excepturi nobis quae veritatis molestias aliquid fugit eos et repellat ad rerum officiis, nesciunt, enim accusamus voluptatum temporibus saepe laudantium, ratione illo.</div>
        <div>Consectetur id quae quis soluta corporis iste quasi voluptatem magni temporibus ut modi ab possimus, quaerat harum quod vel est voluptates quisquam, sequi culpa tempore iusto illo? Similique iusto, deleniti!</div>
        <div>Dolor consequuntur omnis error. Quam labore nihil beatae hic ipsum excepturi consectetur iure eum nesciunt harum, blanditiis quisquam, maiores vero! Quo inventore, ullam fuga voluptatem omnis illo facilis tenetur accusantium.</div>
        <div>Iusto, officiis beatae ipsa odio quos illo ipsum, possimus perspiciatis excepturi deserunt laudantium, est tenetur? Enim, culpa, libero! Quibusdam, iure, dolores? Voluptas provident quod perferendis officia esse ad at dolores.</div>
        <div>Rem cum ducimus fuga nesciunt provident eligendi culpa enim quia natus, temporibus quaerat, beatae illo, dignissimos voluptates magni. Beatae sint consequuntur, possimus cumque aspernatur dolore est, quasi reiciendis voluptas! Nemo.</div>
        <div>Officia, ad id hic expedita doloribus aliquam nobis. Eaque dignissimos, omnis maxime magni molestias enim debitis consectetur, facere, iure corporis dolorum, officia. Accusantium veniam unde magnam repudiandae dignissimos provident non!</div>
        <div>Quia quidem minima tempora dicta fugit atque dolore praesentium, quasi, laudantium perferendis autem repellendus in omnis. Sed incidunt unde sunt, itaque, obcaecati esse velit, nesciunt aspernatur ad dignissimos explicabo omnis.</div>
        <div>Alias incidunt nam, est rem laborum soluta quas necessitatibus minus eaque quia doloremque amet repudiandae earum commodi ab, dolore esse vel deserunt praesentium, neque aperiam. Nobis nostrum quas, ex nihil.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->   



<!--inicio modal-->
<div class="modal fade" id="miModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit amet voluptas, asperiores facere architecto quia, modi, debitis tenetur dolor et saepe dignissimos. Ducimus quo quidem voluptas facere ab delectus, provident!</div>
        <div>Dicta sequi, quos voluptatem aliquid. Ea accusamus ipsum, odio accusantium eaque ut molestiae impedit odit dolores error, maxime, porro beatae eligendi recusandae minima perferendis necessitatibus quidem pariatur ex! Nulla, nemo.</div>
        <div>Sit harum porro minus necessitatibus? Accusamus veniam fugiat nesciunt alias, a ipsum voluptates! Facilis placeat tenetur nulla nesciunt id possimus error! Totam ut repudiandae rerum, delectus blanditiis magnam. Saepe, ratione.</div>
        <div>Temporibus in culpa ullam, repellendus dolore nobis officia iusto voluptate assumenda dolorem! Soluta, asperiores excepturi pariatur animi ipsa, atque eum recusandae quae minus obcaecati odit at aperiam explicabo voluptas non?</div>
        <div>Eveniet deserunt ratione minus, provident optio voluptatibus, aliquid harum quia eum, temporibus nemo sapiente unde consequatur esse similique! Cum blanditiis hic praesentium tempore quae, ad nostrum quaerat impedit explicabo repellat.</div>
        <div>Ratione, doloribus, placeat, ab impedit facere totam a provident eius dicta nostrum magnam? Dolorum repellat esse, sit at voluptatibus et hic corporis. Natus, iure? Dolorum asperiores sequi illum tenetur quia.</div>
        <div>Praesentium voluptate reiciendis sunt non consequuntur iusto molestias natus officiis quisquam minus aliquid, dicta commodi, pariatur quibusdam sapiente voluptatum atque inventore temporibus saepe amet! Magnam adipisci aliquam aperiam, sunt mollitia!</div>
        <div>Rem natus rerum recusandae ea fugiat quae, dolor ipsum voluptatem facilis. Natus dolores atque consectetur perspiciatis, repellat corrupti quod recusandae debitis iure quibusdam nihil sapiente explicabo exercitationem, sit praesentium alias!</div>
        <div>Id aliquam, vero quidem odit doloribus eum, nihil, dolorem blanditiis quia natus porro nam incidunt tempora sequi rem voluptas, tempore nulla iusto. At labore accusantium praesentium nostrum, ut vitae. Dolor.</div>
        <div>Soluta odit, omnis dolorem a explicabo ipsa atque dolores adipisci sequi dolore iure mollitia pariatur esse deleniti, repellat quia impedit, assumenda, harum distinctio similique fugit! Autem tempore, officia obcaecati totam?</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis a dolores alias quam explicabo culpa minus dolor, inventore repudiandae beatae repellendus sequi adipisci iusto, et voluptates illo modi, quas perferendis.</div>
        <div>Possimus facilis voluptate maiores! Laboriosam, fuga? Soluta nemo eum nobis quos, explicabo dolores provident quidem quasi ad laudantium, commodi, aliquid deleniti labore modi amet blanditiis quae tempore distinctio dolore architecto?</div>
        <div>Tempora consequuntur repellendus aliquam doloribus hic soluta earum fuga enim totam nisi voluptatem, quam tenetur. Recusandae cum dicta accusamus aut magni, temporibus, similique, magnam voluptatum, quasi iure labore itaque et.</div>
        <div>Voluptatibus quas magnam a consectetur, dicta, quos suscipit labore minima saepe. Atque optio reprehenderit dignissimos in voluptas maxime, iusto dolores quibusdam asperiores illum, earum tenetur nulla. Praesentium maxime, consectetur unde!</div>
        <div>Eligendi voluptate voluptatibus voluptatem libero itaque ut, exercitationem corporis architecto dolores aliquid provident molestiae accusantium dolor saepe esse incidunt reiciendis alias suscipit, qui quia voluptatum eius temporibus minus. Nulla, voluptas.</div>
        <div>Consequatur ut dolor, soluta accusantium temporibus ex! Libero ipsum consequatur commodi dolor sequi molestias, illo eligendi quaerat ad adipisci aliquid ullam quae cumque ipsa error dolorum autem vero vitae. Velit.</div>
        <div>Voluptates beatae saepe tempore quibusdam dolorem. Sapiente excepturi dicta praesentium, nobis alias, neque labore eos est nesciunt distinctio nostrum quidem itaque culpa quam minima doloremque quod in aliquid asperiores odit.</div>
        <div>Voluptatibus praesentium amet fuga molestiae tenetur totam nisi, excepturi nobis quae veritatis molestias aliquid fugit eos et repellat ad rerum officiis, nesciunt, enim accusamus voluptatum temporibus saepe laudantium, ratione illo.</div>
        <div>Consectetur id quae quis soluta corporis iste quasi voluptatem magni temporibus ut modi ab possimus, quaerat harum quod vel est voluptates quisquam, sequi culpa tempore iusto illo? Similique iusto, deleniti!</div>
        <div>Dolor consequuntur omnis error. Quam labore nihil beatae hic ipsum excepturi consectetur iure eum nesciunt harum, blanditiis quisquam, maiores vero! Quo inventore, ullam fuga voluptatem omnis illo facilis tenetur accusantium.</div>
        <div>Iusto, officiis beatae ipsa odio quos illo ipsum, possimus perspiciatis excepturi deserunt laudantium, est tenetur? Enim, culpa, libero! Quibusdam, iure, dolores? Voluptas provident quod perferendis officia esse ad at dolores.</div>
        <div>Rem cum ducimus fuga nesciunt provident eligendi culpa enim quia natus, temporibus quaerat, beatae illo, dignissimos voluptates magni. Beatae sint consequuntur, possimus cumque aspernatur dolore est, quasi reiciendis voluptas! Nemo.</div>
        <div>Officia, ad id hic expedita doloribus aliquam nobis. Eaque dignissimos, omnis maxime magni molestias enim debitis consectetur, facere, iure corporis dolorum, officia. Accusantium veniam unde magnam repudiandae dignissimos provident non!</div>
        <div>Quia quidem minima tempora dicta fugit atque dolore praesentium, quasi, laudantium perferendis autem repellendus in omnis. Sed incidunt unde sunt, itaque, obcaecati esse velit, nesciunt aspernatur ad dignissimos explicabo omnis.</div>
        <div>Alias incidunt nam, est rem laborum soluta quas necessitatibus minus eaque quia doloremque amet repudiandae earum commodi ab, dolore esse vel deserunt praesentium, neque aperiam. Nobis nostrum quas, ex nihil.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->   


<!--inicio modal-->
<div class="modal fade" id="miModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit amet voluptas, asperiores facere architecto quia, modi, debitis tenetur dolor et saepe dignissimos. Ducimus quo quidem voluptas facere ab delectus, provident!</div>
        <div>Dicta sequi, quos voluptatem aliquid. Ea accusamus ipsum, odio accusantium eaque ut molestiae impedit odit dolores error, maxime, porro beatae eligendi recusandae minima perferendis necessitatibus quidem pariatur ex! Nulla, nemo.</div>
        <div>Sit harum porro minus necessitatibus? Accusamus veniam fugiat nesciunt alias, a ipsum voluptates! Facilis placeat tenetur nulla nesciunt id possimus error! Totam ut repudiandae rerum, delectus blanditiis magnam. Saepe, ratione.</div>
        <div>Temporibus in culpa ullam, repellendus dolore nobis officia iusto voluptate assumenda dolorem! Soluta, asperiores excepturi pariatur animi ipsa, atque eum recusandae quae minus obcaecati odit at aperiam explicabo voluptas non?</div>
        <div>Eveniet deserunt ratione minus, provident optio voluptatibus, aliquid harum quia eum, temporibus nemo sapiente unde consequatur esse similique! Cum blanditiis hic praesentium tempore quae, ad nostrum quaerat impedit explicabo repellat.</div>
        <div>Ratione, doloribus, placeat, ab impedit facere totam a provident eius dicta nostrum magnam? Dolorum repellat esse, sit at voluptatibus et hic corporis. Natus, iure? Dolorum asperiores sequi illum tenetur quia.</div>
        <div>Praesentium voluptate reiciendis sunt non consequuntur iusto molestias natus officiis quisquam minus aliquid, dicta commodi, pariatur quibusdam sapiente voluptatum atque inventore temporibus saepe amet! Magnam adipisci aliquam aperiam, sunt mollitia!</div>
        <div>Rem natus rerum recusandae ea fugiat quae, dolor ipsum voluptatem facilis. Natus dolores atque consectetur perspiciatis, repellat corrupti quod recusandae debitis iure quibusdam nihil sapiente explicabo exercitationem, sit praesentium alias!</div>
        <div>Id aliquam, vero quidem odit doloribus eum, nihil, dolorem blanditiis quia natus porro nam incidunt tempora sequi rem voluptas, tempore nulla iusto. At labore accusantium praesentium nostrum, ut vitae. Dolor.</div>
        <div>Soluta odit, omnis dolorem a explicabo ipsa atque dolores adipisci sequi dolore iure mollitia pariatur esse deleniti, repellat quia impedit, assumenda, harum distinctio similique fugit! Autem tempore, officia obcaecati totam?</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis a dolores alias quam explicabo culpa minus dolor, inventore repudiandae beatae repellendus sequi adipisci iusto, et voluptates illo modi, quas perferendis.</div>
        <div>Possimus facilis voluptate maiores! Laboriosam, fuga? Soluta nemo eum nobis quos, explicabo dolores provident quidem quasi ad laudantium, commodi, aliquid deleniti labore modi amet blanditiis quae tempore distinctio dolore architecto?</div>
        <div>Tempora consequuntur repellendus aliquam doloribus hic soluta earum fuga enim totam nisi voluptatem, quam tenetur. Recusandae cum dicta accusamus aut magni, temporibus, similique, magnam voluptatum, quasi iure labore itaque et.</div>
        <div>Voluptatibus quas magnam a consectetur, dicta, quos suscipit labore minima saepe. Atque optio reprehenderit dignissimos in voluptas maxime, iusto dolores quibusdam asperiores illum, earum tenetur nulla. Praesentium maxime, consectetur unde!</div>
        <div>Eligendi voluptate voluptatibus voluptatem libero itaque ut, exercitationem corporis architecto dolores aliquid provident molestiae accusantium dolor saepe esse incidunt reiciendis alias suscipit, qui quia voluptatum eius temporibus minus. Nulla, voluptas.</div>
        <div>Consequatur ut dolor, soluta accusantium temporibus ex! Libero ipsum consequatur commodi dolor sequi molestias, illo eligendi quaerat ad adipisci aliquid ullam quae cumque ipsa error dolorum autem vero vitae. Velit.</div>
        <div>Voluptates beatae saepe tempore quibusdam dolorem. Sapiente excepturi dicta praesentium, nobis alias, neque labore eos est nesciunt distinctio nostrum quidem itaque culpa quam minima doloremque quod in aliquid asperiores odit.</div>
        <div>Voluptatibus praesentium amet fuga molestiae tenetur totam nisi, excepturi nobis quae veritatis molestias aliquid fugit eos et repellat ad rerum officiis, nesciunt, enim accusamus voluptatum temporibus saepe laudantium, ratione illo.</div>
        <div>Consectetur id quae quis soluta corporis iste quasi voluptatem magni temporibus ut modi ab possimus, quaerat harum quod vel est voluptates quisquam, sequi culpa tempore iusto illo? Similique iusto, deleniti!</div>
        <div>Dolor consequuntur omnis error. Quam labore nihil beatae hic ipsum excepturi consectetur iure eum nesciunt harum, blanditiis quisquam, maiores vero! Quo inventore, ullam fuga voluptatem omnis illo facilis tenetur accusantium.</div>
        <div>Iusto, officiis beatae ipsa odio quos illo ipsum, possimus perspiciatis excepturi deserunt laudantium, est tenetur? Enim, culpa, libero! Quibusdam, iure, dolores? Voluptas provident quod perferendis officia esse ad at dolores.</div>
        <div>Rem cum ducimus fuga nesciunt provident eligendi culpa enim quia natus, temporibus quaerat, beatae illo, dignissimos voluptates magni. Beatae sint consequuntur, possimus cumque aspernatur dolore est, quasi reiciendis voluptas! Nemo.</div>
        <div>Officia, ad id hic expedita doloribus aliquam nobis. Eaque dignissimos, omnis maxime magni molestias enim debitis consectetur, facere, iure corporis dolorum, officia. Accusantium veniam unde magnam repudiandae dignissimos provident non!</div>
        <div>Quia quidem minima tempora dicta fugit atque dolore praesentium, quasi, laudantium perferendis autem repellendus in omnis. Sed incidunt unde sunt, itaque, obcaecati esse velit, nesciunt aspernatur ad dignissimos explicabo omnis.</div>
        <div>Alias incidunt nam, est rem laborum soluta quas necessitatibus minus eaque quia doloremque amet repudiandae earum commodi ab, dolore esse vel deserunt praesentium, neque aperiam. Nobis nostrum quas, ex nihil.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->   



<!--inicio modal-->
<div class="modal fade" id="miModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit amet voluptas, asperiores facere architecto quia, modi, debitis tenetur dolor et saepe dignissimos. Ducimus quo quidem voluptas facere ab delectus, provident!</div>
        <div>Dicta sequi, quos voluptatem aliquid. Ea accusamus ipsum, odio accusantium eaque ut molestiae impedit odit dolores error, maxime, porro beatae eligendi recusandae minima perferendis necessitatibus quidem pariatur ex! Nulla, nemo.</div>
        <div>Sit harum porro minus necessitatibus? Accusamus veniam fugiat nesciunt alias, a ipsum voluptates! Facilis placeat tenetur nulla nesciunt id possimus error! Totam ut repudiandae rerum, delectus blanditiis magnam. Saepe, ratione.</div>
        <div>Temporibus in culpa ullam, repellendus dolore nobis officia iusto voluptate assumenda dolorem! Soluta, asperiores excepturi pariatur animi ipsa, atque eum recusandae quae minus obcaecati odit at aperiam explicabo voluptas non?</div>
        <div>Eveniet deserunt ratione minus, provident optio voluptatibus, aliquid harum quia eum, temporibus nemo sapiente unde consequatur esse similique! Cum blanditiis hic praesentium tempore quae, ad nostrum quaerat impedit explicabo repellat.</div>
        <div>Ratione, doloribus, placeat, ab impedit facere totam a provident eius dicta nostrum magnam? Dolorum repellat esse, sit at voluptatibus et hic corporis. Natus, iure? Dolorum asperiores sequi illum tenetur quia.</div>
        <div>Praesentium voluptate reiciendis sunt non consequuntur iusto molestias natus officiis quisquam minus aliquid, dicta commodi, pariatur quibusdam sapiente voluptatum atque inventore temporibus saepe amet! Magnam adipisci aliquam aperiam, sunt mollitia!</div>
        <div>Rem natus rerum recusandae ea fugiat quae, dolor ipsum voluptatem facilis. Natus dolores atque consectetur perspiciatis, repellat corrupti quod recusandae debitis iure quibusdam nihil sapiente explicabo exercitationem, sit praesentium alias!</div>
        <div>Id aliquam, vero quidem odit doloribus eum, nihil, dolorem blanditiis quia natus porro nam incidunt tempora sequi rem voluptas, tempore nulla iusto. At labore accusantium praesentium nostrum, ut vitae. Dolor.</div>
        <div>Soluta odit, omnis dolorem a explicabo ipsa atque dolores adipisci sequi dolore iure mollitia pariatur esse deleniti, repellat quia impedit, assumenda, harum distinctio similique fugit! Autem tempore, officia obcaecati totam?</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis a dolores alias quam explicabo culpa minus dolor, inventore repudiandae beatae repellendus sequi adipisci iusto, et voluptates illo modi, quas perferendis.</div>
        <div>Possimus facilis voluptate maiores! Laboriosam, fuga? Soluta nemo eum nobis quos, explicabo dolores provident quidem quasi ad laudantium, commodi, aliquid deleniti labore modi amet blanditiis quae tempore distinctio dolore architecto?</div>
        <div>Tempora consequuntur repellendus aliquam doloribus hic soluta earum fuga enim totam nisi voluptatem, quam tenetur. Recusandae cum dicta accusamus aut magni, temporibus, similique, magnam voluptatum, quasi iure labore itaque et.</div>
        <div>Voluptatibus quas magnam a consectetur, dicta, quos suscipit labore minima saepe. Atque optio reprehenderit dignissimos in voluptas maxime, iusto dolores quibusdam asperiores illum, earum tenetur nulla. Praesentium maxime, consectetur unde!</div>
        <div>Eligendi voluptate voluptatibus voluptatem libero itaque ut, exercitationem corporis architecto dolores aliquid provident molestiae accusantium dolor saepe esse incidunt reiciendis alias suscipit, qui quia voluptatum eius temporibus minus. Nulla, voluptas.</div>
        <div>Consequatur ut dolor, soluta accusantium temporibus ex! Libero ipsum consequatur commodi dolor sequi molestias, illo eligendi quaerat ad adipisci aliquid ullam quae cumque ipsa error dolorum autem vero vitae. Velit.</div>
        <div>Voluptates beatae saepe tempore quibusdam dolorem. Sapiente excepturi dicta praesentium, nobis alias, neque labore eos est nesciunt distinctio nostrum quidem itaque culpa quam minima doloremque quod in aliquid asperiores odit.</div>
        <div>Voluptatibus praesentium amet fuga molestiae tenetur totam nisi, excepturi nobis quae veritatis molestias aliquid fugit eos et repellat ad rerum officiis, nesciunt, enim accusamus voluptatum temporibus saepe laudantium, ratione illo.</div>
        <div>Consectetur id quae quis soluta corporis iste quasi voluptatem magni temporibus ut modi ab possimus, quaerat harum quod vel est voluptates quisquam, sequi culpa tempore iusto illo? Similique iusto, deleniti!</div>
        <div>Dolor consequuntur omnis error. Quam labore nihil beatae hic ipsum excepturi consectetur iure eum nesciunt harum, blanditiis quisquam, maiores vero! Quo inventore, ullam fuga voluptatem omnis illo facilis tenetur accusantium.</div>
        <div>Iusto, officiis beatae ipsa odio quos illo ipsum, possimus perspiciatis excepturi deserunt laudantium, est tenetur? Enim, culpa, libero! Quibusdam, iure, dolores? Voluptas provident quod perferendis officia esse ad at dolores.</div>
        <div>Rem cum ducimus fuga nesciunt provident eligendi culpa enim quia natus, temporibus quaerat, beatae illo, dignissimos voluptates magni. Beatae sint consequuntur, possimus cumque aspernatur dolore est, quasi reiciendis voluptas! Nemo.</div>
        <div>Officia, ad id hic expedita doloribus aliquam nobis. Eaque dignissimos, omnis maxime magni molestias enim debitis consectetur, facere, iure corporis dolorum, officia. Accusantium veniam unde magnam repudiandae dignissimos provident non!</div>
        <div>Quia quidem minima tempora dicta fugit atque dolore praesentium, quasi, laudantium perferendis autem repellendus in omnis. Sed incidunt unde sunt, itaque, obcaecati esse velit, nesciunt aspernatur ad dignissimos explicabo omnis.</div>
        <div>Alias incidunt nam, est rem laborum soluta quas necessitatibus minus eaque quia doloremque amet repudiandae earum commodi ab, dolore esse vel deserunt praesentium, neque aperiam. Nobis nostrum quas, ex nihil.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->       



<!--inicio modal-->
<div class="modal fade" id="miModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit amet voluptas, asperiores facere architecto quia, modi, debitis tenetur dolor et saepe dignissimos. Ducimus quo quidem voluptas facere ab delectus, provident!</div>
        <div>Dicta sequi, quos voluptatem aliquid. Ea accusamus ipsum, odio accusantium eaque ut molestiae impedit odit dolores error, maxime, porro beatae eligendi recusandae minima perferendis necessitatibus quidem pariatur ex! Nulla, nemo.</div>
        <div>Sit harum porro minus necessitatibus? Accusamus veniam fugiat nesciunt alias, a ipsum voluptates! Facilis placeat tenetur nulla nesciunt id possimus error! Totam ut repudiandae rerum, delectus blanditiis magnam. Saepe, ratione.</div>
        <div>Temporibus in culpa ullam, repellendus dolore nobis officia iusto voluptate assumenda dolorem! Soluta, asperiores excepturi pariatur animi ipsa, atque eum recusandae quae minus obcaecati odit at aperiam explicabo voluptas non?</div>
        <div>Eveniet deserunt ratione minus, provident optio voluptatibus, aliquid harum quia eum, temporibus nemo sapiente unde consequatur esse similique! Cum blanditiis hic praesentium tempore quae, ad nostrum quaerat impedit explicabo repellat.</div>
        <div>Ratione, doloribus, placeat, ab impedit facere totam a provident eius dicta nostrum magnam? Dolorum repellat esse, sit at voluptatibus et hic corporis. Natus, iure? Dolorum asperiores sequi illum tenetur quia.</div>
        <div>Praesentium voluptate reiciendis sunt non consequuntur iusto molestias natus officiis quisquam minus aliquid, dicta commodi, pariatur quibusdam sapiente voluptatum atque inventore temporibus saepe amet! Magnam adipisci aliquam aperiam, sunt mollitia!</div>
        <div>Rem natus rerum recusandae ea fugiat quae, dolor ipsum voluptatem facilis. Natus dolores atque consectetur perspiciatis, repellat corrupti quod recusandae debitis iure quibusdam nihil sapiente explicabo exercitationem, sit praesentium alias!</div>
        <div>Id aliquam, vero quidem odit doloribus eum, nihil, dolorem blanditiis quia natus porro nam incidunt tempora sequi rem voluptas, tempore nulla iusto. At labore accusantium praesentium nostrum, ut vitae. Dolor.</div>
        <div>Soluta odit, omnis dolorem a explicabo ipsa atque dolores adipisci sequi dolore iure mollitia pariatur esse deleniti, repellat quia impedit, assumenda, harum distinctio similique fugit! Autem tempore, officia obcaecati totam?</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis a dolores alias quam explicabo culpa minus dolor, inventore repudiandae beatae repellendus sequi adipisci iusto, et voluptates illo modi, quas perferendis.</div>
        <div>Possimus facilis voluptate maiores! Laboriosam, fuga? Soluta nemo eum nobis quos, explicabo dolores provident quidem quasi ad laudantium, commodi, aliquid deleniti labore modi amet blanditiis quae tempore distinctio dolore architecto?</div>
        <div>Tempora consequuntur repellendus aliquam doloribus hic soluta earum fuga enim totam nisi voluptatem, quam tenetur. Recusandae cum dicta accusamus aut magni, temporibus, similique, magnam voluptatum, quasi iure labore itaque et.</div>
        <div>Voluptatibus quas magnam a consectetur, dicta, quos suscipit labore minima saepe. Atque optio reprehenderit dignissimos in voluptas maxime, iusto dolores quibusdam asperiores illum, earum tenetur nulla. Praesentium maxime, consectetur unde!</div>
        <div>Eligendi voluptate voluptatibus voluptatem libero itaque ut, exercitationem corporis architecto dolores aliquid provident molestiae accusantium dolor saepe esse incidunt reiciendis alias suscipit, qui quia voluptatum eius temporibus minus. Nulla, voluptas.</div>
        <div>Consequatur ut dolor, soluta accusantium temporibus ex! Libero ipsum consequatur commodi dolor sequi molestias, illo eligendi quaerat ad adipisci aliquid ullam quae cumque ipsa error dolorum autem vero vitae. Velit.</div>
        <div>Voluptates beatae saepe tempore quibusdam dolorem. Sapiente excepturi dicta praesentium, nobis alias, neque labore eos est nesciunt distinctio nostrum quidem itaque culpa quam minima doloremque quod in aliquid asperiores odit.</div>
        <div>Voluptatibus praesentium amet fuga molestiae tenetur totam nisi, excepturi nobis quae veritatis molestias aliquid fugit eos et repellat ad rerum officiis, nesciunt, enim accusamus voluptatum temporibus saepe laudantium, ratione illo.</div>
        <div>Consectetur id quae quis soluta corporis iste quasi voluptatem magni temporibus ut modi ab possimus, quaerat harum quod vel est voluptates quisquam, sequi culpa tempore iusto illo? Similique iusto, deleniti!</div>
        <div>Dolor consequuntur omnis error. Quam labore nihil beatae hic ipsum excepturi consectetur iure eum nesciunt harum, blanditiis quisquam, maiores vero! Quo inventore, ullam fuga voluptatem omnis illo facilis tenetur accusantium.</div>
        <div>Iusto, officiis beatae ipsa odio quos illo ipsum, possimus perspiciatis excepturi deserunt laudantium, est tenetur? Enim, culpa, libero! Quibusdam, iure, dolores? Voluptas provident quod perferendis officia esse ad at dolores.</div>
        <div>Rem cum ducimus fuga nesciunt provident eligendi culpa enim quia natus, temporibus quaerat, beatae illo, dignissimos voluptates magni. Beatae sint consequuntur, possimus cumque aspernatur dolore est, quasi reiciendis voluptas! Nemo.</div>
        <div>Officia, ad id hic expedita doloribus aliquam nobis. Eaque dignissimos, omnis maxime magni molestias enim debitis consectetur, facere, iure corporis dolorum, officia. Accusantium veniam unde magnam repudiandae dignissimos provident non!</div>
        <div>Quia quidem minima tempora dicta fugit atque dolore praesentium, quasi, laudantium perferendis autem repellendus in omnis. Sed incidunt unde sunt, itaque, obcaecati esse velit, nesciunt aspernatur ad dignissimos explicabo omnis.</div>
        <div>Alias incidunt nam, est rem laborum soluta quas necessitatibus minus eaque quia doloremque amet repudiandae earum commodi ab, dolore esse vel deserunt praesentium, neque aperiam. Nobis nostrum quas, ex nihil.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->   


<!--inicio modal-->
<div class="modal fade" id="miModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header popupheader">
        <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-y: scroll;max-height:85%;">
        ejemplo
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->   

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