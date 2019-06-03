<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canada</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">Bootstrap theme</a> -->
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PARTE 1<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <!-- CONTENIDO -->
                <li><button onclick="holland()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">publimetro holland</button></li>
              </ul>
            </li>
          </div><!--/.nav-collapse -->

        </div>
    </nav>




    <!-- Button trigger modal -->
    <!-- Modal solo para el df -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">En la edicion de hoy podras encontrar...</h4>
      </div>
      <div id="caja2" >
      <div class="modal-body" id="caja" >
        <script type="text/javascript">
        <?php
          $date = date("Ymd");
          $año = date("Y");
          $mes = date("m");
          $dia = date("d");
          $meses = array(
               '01' => "enero",
               '02' => "febrero",
               '03' => "marzo",
               '04' => "abril",
               '05' => "mayo",
               '06' => "junio",
               '07' => "julio",
               '08' => "agosto",
               '09' => "septiembre",
               '10' => "octubre",
               '11' => "noviembre",
               '12' => "diciembre");
          $diaL = date("l");
          $diasNombre = array(
              'Monday' => "Lunes",
              'Tuesday' => "Martes",
              'Wednesday' => "Miercoles",
              'Thursday' => "Jueves",
              'Friday' => "Viernes",
              'Saturday' => "Sabado",
              'Sunday' => "Domingo",
          );
        ?>


        // AQUI EMPIESAN LAS FUNCIONES DE pressdisplay
        function holland(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='https://rm.metrolatam.com/pdf/".$año."/".$mes."/".$dia."/".$año."".$mes."".$dia."_metro-holland.pdf' target='_blank' >holland</a>" ."</br>" ;
        ?>"; }
        // AQUI TERMINAN LAS FUNCIONES DE PRESSDISPLAY








      </script>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>







<!-- forbes
https://dnp6aggxo9vfh.cloudfront.net/data/6731/1489427648/jpg/1.jpg -->








    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
    </script>

  </body>
</html>
<!-- https://impresa.pagina24.com.mx/Jalisco.pdf
https://impresa.pagina24.com.mx/Aguascalientes.pdf
https://impresa.pagina24.com.mx/Zacatecas.pdf -->
