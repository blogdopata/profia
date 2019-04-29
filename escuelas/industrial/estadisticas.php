<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
<script type="text/javascript">
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>

<style>
    table.celda-style td{
        font-family: "Roboto Condensed";
        text-align: center;
        color:#585857;
        font-size:14px;
        vertical-align:middle;
        padding:0px;
    }

    table.cabecera-style th{
        font-family: "Roboto Condensed";
        background-color:#8f0222;
        color:white;
        font-weight:bolder;
        font-size:14px;
        vertical-align:middle;
        text-align:center;
    }
    .box{
        color: #575758;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .cuadro1{ background: white; }
    .cuadro2{ background: white; }
    .cuadro3{ background: white; }
    .cuadro4{ background: white; }
    .cuadro5{ background: white; }
    .cuadro6{ background: white; }
    .cuadro7{ background: white; }
    .cuadro8{ background: white; }
    .cuadro9{ background: white; }
    .cuadro10{ background: white; }
    .cuadro11{ background: white; }
    .cuadro12{ background: white; }
    .cuadro13{ background: white; }
    .cuadro14{ background: white; }
    .cuadro15{ background: white; }
    .cuadro16{ background: white; }
    .cuadro17{ background: white; }
    .cuadro18{ background: white; }
    .cuadro19{ background: white; }
    .cuadro20{ background: white; }
    .cuadro21{ background: white; }
    .cuadro22{ background: white; }
    
    

    select {
      font-family:'Roboto condensed' !important;
      color:#575758;
 
    }
   
</style>

<div class="container">
<h4 class="subtitle-general-fix">Estadísticas</h4>
</div>

<div class="container">


        <select>
            <option>Seleccione ciclo académico</option>
            <option value="cuadro22">Ciclo académico 2018-II</option>
            <option value="cuadro21">Ciclo académico 2018-I</option>
            <option value="cuadro20">Ciclo académico 2017-II</option>
            <option value="cuadro19">Ciclo académico 2017-I</option>
            <option value="cuadro18">Ciclo académico 2016-II</option>
            <option value="cuadro17">Ciclo académico 2016-I</option>
            <option value="cuadro16">Ciclo académico 2015-II</option>
            <option value="cuadro15">Ciclo académico 2015-I</option>
            <option value="cuadro14">Ciclo académico 2014-II</option>
            <option value="cuadro13">Ciclo académico 2014-I</option>
            <option value="cuadro12">Ciclo académico 2013-II</option>
            <option value="cuadro11">Ciclo académico 2013-I</option>
            <option value="cuadro10">Ciclo académico 2012-II</option>
            <option value="cuadro9">Ciclo académico 2012-I</option>
            <option value="cuadro8">Ciclo académico 2011-II</option>
            <option value="cuadro7">Ciclo académico 2011-I</option>
            <option value="cuadro6">Ciclo académico 2010-II</option>
            <option value="cuadro5">Ciclo académico 2010-I</option>
            <option value="cuadro4">Ciclo académico 2009-II</option>
            <option value="cuadro3">Ciclo académico 2009-I</option>
            <option value="cuadro2">Ciclo académico 2008-II</option>
            <option value="cuadro1">Ciclo académico 2008-I</option>
            
        </select>


        <!-- 2008-1 -->
    <div class="cuadro1 box">
    <div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2008 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2008-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>6</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2008-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>9</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2008-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>610</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2008-1 -->


<!-- 2008-2 -->
<div class="cuadro2 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2008 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2008-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>9</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2008-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>6</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2008-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>620</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2008-2 -->




<!-- 2009-1 -->
<div class="cuadro3 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2009 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2009-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>5</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2009-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>10</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2009-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>640</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2009-1 -->




<!-- 2009-2 -->
<div class="cuadro4 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2009 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2009-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>9</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2009-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>7</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2009-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>631</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2009-2 -->




<!-- 2010-1 -->
<div class="cuadro5 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2010 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2010-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>9</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2010-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>8</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2010-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>704</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2010-1 -->




<!-- 2010-2 -->
<div class="cuadro6 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2010 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2010-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>9</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2010-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>12</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2010-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>691</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2010-2 -->




<!-- 2011-1 -->
<div class="cuadro7 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2011 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2011-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>6</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2011-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>11</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2011-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>754</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2011-1 -->






<!-- 2011-2 -->
<div class="cuadro8 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2011 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2011-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>11</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2011-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>20</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2011-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>734</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2011-2 -->







<!-- 2012-1 -->
<div class="cuadro9 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2012 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2012-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>14</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2012-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>14</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2012-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>754</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2012-1 -->






<!-- 2012-2 -->
<div class="cuadro10 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2012 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2012-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>18</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2012-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>19</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2012-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>754</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2012-2 -->







<!-- 2013-1 -->
<div class="cuadro11 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2013 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2013-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>17</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2013-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>17</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2013-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>894</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2013-1 -->







<!-- 2013-2 -->
<div class="cuadro12 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2013 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2013-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>11</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2013-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>24</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2013-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>897</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2013-2 -->







<!-- 2014-1 -->
<div class="cuadro13 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2014 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2014-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>22</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2014-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>22</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2014-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>977</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2014-1 -->









<!-- 2014-2 -->
<div class="cuadro14 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2014 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2014-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>16</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2014-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>23</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2014-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>943</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2014-2 -->







<!-- 2015-1 -->
<div class="cuadro15 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2015 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2015-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>27</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2015-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>28</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2015-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>1002</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2015-1 -->







<!-- 2015-2 -->
<div class="cuadro16 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2015 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2015-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>23</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2015-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>19</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2015-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>916</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2015-2 -->






<!-- 2016-1 -->
<div class="cuadro17 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2016 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2016-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>11</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2016-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>37</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2016-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>875</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2016-1 -->





<!-- 2016-2 -->
<div class="cuadro18 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2016 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2016-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>16</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2016-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>17</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2016-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>784</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2016-2 -->







<!-- 2017-1 -->
<div class="cuadro19 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2017 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2017-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>12</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2017-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>23</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2017-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>775</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2017-1 -->








<!-- 2017-2 -->
<div class="cuadro20 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2017 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2017-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>11</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2017-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>27</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2017-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>729</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2017-2 -->














<!-- 2018-1 -->
<div class="cuadro21 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2018 - I</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2018-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>35</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2018-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>15</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2018-I</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>714</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2018-1 -->






<!-- 2018-2 -->
<div class="cuadro22 box">
<div class="container text-center mb-4"><h2 class="subtitle-general-fix">Ciclo Académico 2018 - II</h2></div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Graduados 2018-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>19</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Egresados 2018-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>31</td>
					        </tr>

						</table>
    </div>
    <div class="table-responsive" style="background-color: white;">
                <table class="table table-bordered celda-style cabecera-style" style="background-color: white;">
					 	
								  <tr>
								    <th><b class="title-table">Siglas</b></th>
								    <th><b class="title-table">Entidad</b></th>
								    <th><b class="title-table">Ciudad</b></th>
								    <th><b class="title-table">Campus</b></th>
                    <th><b class="title-table">Programa</b></th>
                    <th><b class="title-table">Estudiantes 2018-II</b></th>
								  </tr>

								  <tr>
								    <td>USMP</td>
                    <td>Universidad de San Martín de Porres</td>
                    <td>Lima</td>
                    <td>Facultad de Ingeniería y Arquitectura , La Molina</td>
                    <td>Ingeniería Industrial</td>
                    <td>631</td>
					        </tr>

						</table>
    </div>
</div>
<!-- 2018-2 -->


    </div>
    
       

