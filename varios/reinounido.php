<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DESCARGAS</title>
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
            <li class="active"><a href="https://docs.google.com/spreadsheets/d/1DH_7LyTa7AqIuWoB30bHPuz8CRKkI2GW1nNPirHIMlE/edit#gid=898006379" target='_blank'>REPORTE</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PORTADAS<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="usa()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">USA</button></li>
              </ul>
            </li>
            

            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portadas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="portadas()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Portadas</button></li>
              </ul>
            </li> -->
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
        

      function usa(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1545".$date."00000000001001&page=1&paper=A4' target='_blank' >the guardian</a>" ."</br>" ;          
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1048".$date."00000000001001&page=1&paper=A4' target='_blank' >theily mail</a>" ."</br>" ;          
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1043".$date."00000000001001&page=1&paper=A4' target='_blank' >theily expres</a>" ."</br>" ;          
          ?>"; }

      

      </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
















    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
    </script>

  </body>
</html>
