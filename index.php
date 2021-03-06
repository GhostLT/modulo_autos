<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>AT&T</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="front/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="front/css/bootstrap-datepicker.js">
        <style type="text/css">
      body { 
        padding-top: 60px;
        bottom: 40px;
      }
      .sidebar-nav { 
       padding: 9px 0;
      } 

      @media (max-width: 980px) { 
        <!--/* Enable use of floated navbar text */ -->
         .navbar-text.pull-right {  
           float: none;  
           padding-left: 5px;  
           padding-right: 5px;  
         }  
       }  
     </style>  
     <link href="front/css/bootstrap-responsive.css" rel="stylesheet">  
     <link rel="stylesheet" href="front/js/bootstrap.js">
     <link href="./bootstrap-datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="/front/img/favicon.ico">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">AT&T</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right"> <a href="#" class="navbar-link"></a></p>
            <ul class="nav">
              <li class="active"><a href="#">RF Optimización</a></li>
           
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Inventario de Autos</li>
              <li class="active"><a href="#">Registrar Vehiculo</a></li>
              <hr>
              <!--<li><a href="#">Generar Reporte</a></li>-->
              <!--<li><a href="#">Link</a></li>-->
              <!--<li><a href="#">Link</a></li>-->
              <!--<li class="nav-header">Sidebar</li>-->
              <!--<li><a href="#">Link</a></li>-->
              <!--<li><a href="#">Link</a></li>-->
              <!--<li><a href="#">Link</a></li>-->
              <!--<li><a href="#">Link</a></li>-->
              <!--<li><a href="#">Link</a></li>-->
              <!--<li><a href="#">Link</a></li>-->
              <!--<li class="nav-header">Sidebar</li>-->
              <!--<li><a href="#">Link</a></li>-->
              <!--<li><a href="#">Link</a></li>-->
              <!--<li><a href="#">Link</a></li>-->
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="span9">

          <div class="hero-unit">
            <h2>INVENTARIO DE VEHICULO ASIGNADO</h2>
            <h3>Registro de auto asignado</h3>


             <div class="row-fluid">  
              <div class="span6">  
                  <div class="row-fluid">  
                    <div class="span6">
                        <!-- Aqui va la Primera mitad -->
                              <!-- CUESTIONARIO VALIDADOR -->
                <!-- USUARIO DE RED: OK -->

                <form data-toggle="validator" role="form" action="registro_autos.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="control-label">Usuario de Red:</label>
                    <input type="text" name="usuario_red" class="form-control" id="inputName" placeholder="ID de Empleado" required >
                  </div>
                  
                 
                  <!-- NOMBRE COMPLETO OK -->
                       <form data-toggle="validator" role="form">
                  <div class="form-group">
                    <label for="inputName" class="control-label">Nombre Completo:</label>
                    <input type="text" name="nombre_completo" class="form-control" id="inputName" placeholder="Nombre y Apellidos" required >
                  </div>
                

                  <!-- AREA OK-->
                  <div class="form-group">
                    <label class="col-xs-3">Area</label>
                    <div class="col-xs-5 selectContainer">
                      <select name="area" class="form-control">
                        <option value=""></option>
                        <option value="RF OPTIMIZACION">RF Optimizacion</option>
                        <option value="FOPS">Operaciones</option>
                        <option value="RAN">RAN</option>
                        <option value="CORE">Core</option>
                      </select>
                    </div>
                  </div>

                  <!-- MERCADO OK -->
                  <div class="form-group">
                    <label class="col-xs-3">Mercado</label>
                    <div class="col-xs-5 selectContainer">
                      <select name="mercado" class="form-control">
                        <option value=""></option>
                        <option value="Monterrey">Monterey</option>
                        <option value="Reynosa">Reynosa</option>
                        <option value="Saltillo">Saltillo</option>
                        <option value="Leon">León</option>
                      </select>
                    </div>
                  </div>

                   <!-- Coordinacion -->
                  <div class="form-group">
                    <label class="col-xs-3">Coordinación</label>
                    <div class="col-xs-5 selectContainer">
                      <select name="coordinacion" class="form-control">
                        <option value=""></option>
                        <option value="Monterrey">Monterrey</option>
                        <option value="TAMAULIPAS">Tamaulipas</option>
                        <option value="Leon">León</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Guadalajara">Guadalajara</option>
                      </select>
                    </div>
                  </div>

                  <!-- Marca de Auto -->
                  <div class="form-group">
                    <label class="col-xs-3">Marca de Auto Asignado</label>
                    <div class="col-xs-5 selectContainer">
                      <select name="marca_auto" class="form-control">
                        <option value=""></option>
                        <option value="toyota">Toyota</option>
                        <option value="chevrolet">Chevrolet</option>
                        <option value="jeep">Jeep</option>
                        <option value="ford">Ford</option>
                        <option value="honda">Honda</option>
                      </select>
                    </div>
                  </div>

                    <!-- Modelo de Auto -->
                  <div class="form-group">
                    <label class="col-xs-3">Modelo de Auto Asignado</label>
                    <div class="col-xs-5 selectContainer">
                      <select name="modelo" class="form-control">
                        <option value=""></option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                         <option value="2015">2015</option>
                          <option value="2016">2016</option>
                      </select>
                    </div>
                  </div>

                      <!-- Tipo de Auto -->
                  <div class="form-group">
                    <label class="col-xs-3">Tipo de Auto Asignado</label>
                    <div class="col-xs-5 selectContainer">
                      <select name="tipo" class="form-control">
                        <option value=""></option>
                        <option value="Camioneta">Camioneta</option>
                         <option value="Auto">Auto</option>
                          <option value="Jeep">Jeep</option>
                      </select>
                    </div>
                  </div>

                   <!-- NUMERO DE SERIE DEL AUTO: -->
                <form data-toggle="validator" role="form">
                  <div class="form-group">
                    <label for="inputName" class="control-label">Número de Serie del Auto:</label>
                    <input type="text" name="serie_auto" class="form-control" id="inputName" placeholder="Serie del Vehículo" required >
                  </div>

                  <!-- KILOMETRAJE DEL AUTO: -->
                <form data-toggle="validator" role="form">
                  <div class="form-group">
                    <label for="inputName" class="control-label">Kilometraje del Auto:</label>
                    <input type="text" name="kilometraje" class="form-control" id="inputName" placeholder="kilometraje actúal" required >
                  </div>


                    <!-- TARJETA DE CIRCULACIÓN: -->
                <form data-toggle="validator" role="form">
                  <div class="form-group">
                    <label for="inputName" class="control-label">Tarjeta de Circulación:</label>
                    <input type="text" name="tarjeta_circulacion" class="form-control" id="inputName" placeholder="Número de Tarjeta" required >
                  </div>

                    <!-- TARJETA DE PEAJE: -->
                <form data-toggle="validator" role="form">
                  <div class="form-group">
                    <label for="inputName" class="control-label">Tarjeta de Peaje:</label>
                    <input type="text" name="tarjeta_peaje" class="form-control" id="inputName" placeholder="Número de Tarjeta" required >
                  </div>

                   <!-- NUMERO DE TARJETA DE GASOLINA: -->
                <form data-toggle="validator" role="form">
                  <div class="form-group">
                    <label for="inputName" class="control-label">Tarjeta de Gasolina:</label>
                    <input type="text" name="tarjeta_gasolina" class="form-control" id="inputName" placeholder="Número de Tarjeta" required >
                  </div>

                    <!-- NIP DE TARJETA DE GASOLINA: -->
                <form data-toggle="validator" role="form">
                  <div class="form-group">
                    <label for="inputName" class="control-label">NIP Tarjeta de Gasolina:</label>
                    <input type="text" name="nip_tarjeta" class="form-control" id="inputName" placeholder="NIP de Tarjeta" required >
                  </div>
                   <!-- NUMERO DE POLIZA: -->
                <form data-toggle="validator" role="form">
                  <div class="form-group">
                    <label for="inputName" class="control-label">Número de Poliza de Seguro:</label>
                    <input type="text" name="poliza_seguro" class="form-control" id="inputName" placeholder="Numero de Poliza de Seguro" required >
                  </div>

                     </div>  


                      <div class="span4 offset2">
                        <!-- Aqui va la segunda mitad --> 

                           

                    

                  <!-- FOTOGRAFIA FRONTAL -->
                  <div class="form-group">
                                <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
                                <input type="file" name="foto_frontal" id="foto">
                                <p class="help-block">FOTOGRAFIA FRONTAL</p>
                  </div>
                  
                   <!-- FOTOGRAFIA LATERAL DERECHO -->
                  <div class="form-group">
                                <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
                                <input type="file" name="foto_izq">
                                <p class="help-block">FOTOGRAFIA LATERAL DERECHO</p>
                  </div>
                  
                  <!-- FOTOGRAFIA LATERAL IZQUIERDO -->
                  <div class="form-group">
                                <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
                                <input type="file" name="foto_der">
                                <p class="help-block">FOTOGRAFIA LATERAL IZQUIERDO</p>
                  </div>

                   <!-- FOTOGRAFIA ATRAS -->
                  <div class="form-group">
                                <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
                                <input type="file" name="foto_atras">
                                <p class="help-block">FOTOGRAFIA ATRÁS</p>
                  </div>

                  

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    
                  
                  </div>

                  


                      </div>
                      </div>
                      </div>
                      
                      
                    </div>
                  </div>





                       





                </form>

<!-- FINALIZA CUESTIONARIO VALIDADOR -->

               

                              </div> <!-- <div class="row-fluid">  -->
                              </div> <!--  <div class="span6"> -->
                              </div> <!--  <div class="span6"> -->
         
          </div>

      <footer>
        <p>&copy; AT&T Company 2016</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script src="front/js/bootstrap-datepicker.js"></script>

  </body>
</html>
