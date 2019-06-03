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
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1047".$date."00000000001001&page=1&paper=A4' target='_blank' >twp</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8108".$date."00000000001001&page=1&paper=A4' target='_blank' >voz de los ciudadanos</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8539".$date."00000000001001&page=1&paper=A4' target='_blank' >republic jeral</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1995".$date."00000000001001&page=1&paper=A4' target='_blank' >the day </a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8234".$date."00000000001001&page=1&paper=A4' target='_blank' >the atlanta yournal</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1012".$date."00000000001001&page=1&paper=A4' target='_blank' >the arisona republic</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7089".$date."00000000001001&page=1&paper=A4' target='_blank' >tampa day times</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9huk".$date."00000000001001&page=1&paper=A4' target='_blank' >dailiy neews starkville</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1288".$date."00000000001001&page=1&paper=A4' target='_blank' >star trubune</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9d76".$date."00000000001001&page=1&paper=A4' target='_blank' >santa fe neews mexican</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7376".$date."00000000001001&page=1&paper=A4' target='_blank' >sprinfild neews zoom</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9b80".$date."00000000001001&page=1&paper=A4' target='_blank' >milkwooki jounal sentinel</a>" ."</br>";
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9gcx".$date."00000000001001&page=1&paper=A4' target='_blank' >manteca bulletin</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1313".$date."00000000001001&page=1&paper=A4' target='_blank' >pistburt post ct</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7068".$date."00000000001001&page=1&paper=A4' target='_blank' >orlando sentinel</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9fbh".$date."00000000001001&page=1&paper=A4' target='_blank' >loanlding neews</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1075".$date."00000000001001&page=1&paper=A4' target='_blank' >las vegas rebiw journal</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7374".$date."00000000001001&page=1&paper=A4' target='_blank' >hamilton journal neews</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1084".$date."00000000001001&page=1&paper=A4' target='_blank' >houston cronicle</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2078".$date."00000000001001&page=1&paper=A4' target='_blank' >la opinion</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9166".$date."00000000001001&page=1&paper=A4' target='_blank' >el dorado neews times</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e804".$date."00000000001001&page=1&paper=A4' target='_blank' >el diario del paso</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2075".$date."00000000001001&page=1&paper=A4' target='_blank' >el diario</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9g59".$date."00000000001001&page=1&paper=A4' target='_blank' >escalon times</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8525".$date."00000000001001&page=1&paper=A4' target='_blank' >dailiy fileman(quinstonNY)</a>" ."</br>";
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7330".$date."00000000001001&page=1&paper=A4' target='_blank' >dailton time neew</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8524".$date."00000000001001&page=1&paper=A4' target='_blank' >tile times (primos pa)</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1594".$date."00000000001001&page=1&paper=A4' target='_blank' >cherooke conty herald</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1221".$date."00000000001001&page=1&paper=A4' target='_blank' >chicago some times</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1586".$date."00000000001001&page=1&paper=A4' target='_blank' >call houn times</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1016".$date."00000000001001&page=1&paper=A4' target='_blank' >austin american</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1055".$date."00000000001001&page=1&paper=A4' target='_blank' >chicago tribune</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1152".$date."00000000001001&page=1&paper=A4' target='_blank' >usa to day normal</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1369".$date."00000000001001&page=1&paper=A4' target='_blank' >albuquerque journal</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1116".$date."00000000001001&page=1&paper=A4' target='_blank' >baltimore the sunn</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1074".$date."00000000001001&page=1&paper=A4' target='_blank' >arkansas democret</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1245".$date."00000000001001&page=1&paper=A4' target='_blank' >neew york post</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1156".$date."00000000001001&page=1&paper=A4' target='_blank' >los angels times</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1024".$date."00000000001001&page=1&paper=A4' target='_blank' >dayli news(ny)</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1021".$date."00000000001001&page=1&paper=A4' target='_blank' >usa to day inter</a>" ."</br>";          
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
