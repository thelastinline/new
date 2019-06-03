<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>caca</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DISTRITO FEDERAL<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="publimetro()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">PUBLIMETRO</button></li>
                <li><button onclick="dia()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL DIA</button></li>
                <li><button onclick="impacto()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">IMPACTO</button></li>
                <li><button onclick="cronica()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">LA CRONICA</button></li>
                <li><button onclick="diarioImagen()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">DIARIO IMAGEN</button></li>
                <li><button onclick="miled()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">MILED</button></li>
                <li><button onclick="basta()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">BASTA</button></li>
                <li><button onclick="elPais()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL PAIS</button></li>
                <li><button onclick="laPrensa()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">LA PRENSA</button></li>
                <li><button onclick="financiero()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">FINANCIERO</button></li>
                <li><button onclick="economista()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL ECONOMISTA</button></li>
                <li><button onclick="record()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">RECORD</button></li>
                <li><button onclick="excelsior()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EXCELSIOR</button></li>
                <li><button onclick="milenioNacional()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">MILENIO NACIONAL</button></li>
                <li><button onclick="criticaPolitica()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Critica Politica</button></li>

                <!-- <li><button onclick="revistaAr()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Revista ar.</button></li>
                <li><button onclick="revistaCambio()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">REVISTA CAMBIO</button></li>
                -->
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GUADALAJARA<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="crionicaJalisco()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">LA CRONICA JALISCO</button></li>
                <li><button onclick="meridianos()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">MERIDIANOS</button></li>
                <li><button onclick="ntrGdl()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL DIARIO DE GUADALAJARA</button></li>
                <li><button onclick="criticaJalisco()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Critica</button></li>
                <li><button onclick="jaliscoPublica()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">jaliscoPublica</button></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESTADOS 1<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="yumpu()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">YUMPU</button></li>
                <li><button onclick="sintesis()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">SINTESIS</button></li>
                <li><button onclick="contexto()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">CONTEXTO DE DURANGO</button></li>
                <li><button onclick="elMananaDeValles()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL MAÑANA DE VALLES</button></li>
                <li><button onclick="elGranDiarioDeSonora()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL GRAN DIARIO DE SONORA</button></li>
                <li><button onclick="huasteca()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">HUASTECA HOY</button></li>
                <li><button onclick="expreso()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Expreso</button></li>
                <li><button onclick="iCampeche()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">LA I DE CAMPECHE</button></li>
                <li><button onclick="porvenir()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL PORVENIR</button></li>
                <li><button onclick="diario_de_morelos()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">DIARIO DE MORELOS</button></li>
                <li><button onclick="campecheHoy()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">CAMPECHE HOY</button></li>
                <li><button onclick="genteYpoder()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">GENTE Y PODER</button></li>
                <li><button onclick="laUnion()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">LA UNION DE MORELOS</button></li>
                <li><button onclick="imparcial()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">El Imparcial</button></li>
                <li><button onclick="amDeQueretaro()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> AM de Queretaro</button></li>
                <li><button onclick="lucesDelSiglo()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">LUCES DEL SIGLO</button></li>
                <li><button onclick="elHeraldoDePuebla()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL HERLADO DE PUEBLA</button></li>
                <li><button onclick="siglo_durango()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">El siglo de durango</button></li>
                <li><button onclick="imagenQuintanaRoo()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">imagen quintana roo</button></li>
                <li><button onclick="impulsoEdomex()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">IMPULSO EDOMEX</button></li>
                <li><button onclick="calameo()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">calameo</button></li>
                <li><button onclick="abcDeMonterrey()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">abc de monterrey</button></li>
                <!--<li><button onclick="cabos()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Tribuna de los Cabos</button></li>
                <li><button onclick="gato()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">gato</button></li>

                <li><button onclick="primera_hora()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Primera Hora</button></li> -->



                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESTADOS 2<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="jornadaGuerrero()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">JORNADA GUERRERO</button></li>
                <li><button onclick="sanluishoy()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">San Luis Hoy</button></li>
                <li><button onclick="horizonte_m()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">HORIZONTE DE MONTERREY</button></li>
                <li><button onclick="jornadaAguasCalientes()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">LA JORNADA AGUASCALIENTES</button></li>
                <li><button onclick="quintanaRooHoy()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">QUINTANA ROO HOY</button></li>
                <li><button onclick="tabascohoy()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">TABASCO HOY</button></li>
                <li><button onclick="fronteraTijuana()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">LA FRONTERA DE TIJUANA</button></li>
                <li><button onclick="diariodecolima()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Diario de Colima</button></li>
                <li><button onclick="noticiaschiapas()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">NOTICIAS chiapas</button></li>
                <li><button onclick="noticiasIstmo()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">NOTICIAS ISTMO</button></li>
                <li><button onclick="noticiasCuenca()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">NOTICIAS CUENCA</button></li>
                <li><button onclick="noticiasOaxaca()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">NOTICIAS OAXACA</button></li>
                <li><button onclick="vozM()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">La Voz de Michoacan</button></li>
                <li><button onclick="presente()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">PRESENTE</button></li>
                <li><button onclick="lider()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Lider Informativo</button></li>
                <li><button onclick="despertar()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Despertar</button></li>
                <!--
                <li><button onclick="ecos()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">ECOS DE LA COSTA</button></li>
                <li><button onclick="correoManzanillo()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">CORREO DE MANZANILLO</button></li>
                <li><button onclick="enfoque()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">ENFOQUE INFORMATIVO</button></li>
                <li><button onclick="redes()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">REDES DEL SUR</button></li>
                <li><button onclick="cronicaMexicali()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">La Cronica de Mexicali</button></li>
                -->
                </ul>
            </li>

             <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">chingaderas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="chile()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">AL CHILE</button></li>
                <li><button onclick="elEraldoDeChiapas()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL HERALDO DE CHIAPAS</button></li>
                <li><button onclick="laidelcarmen()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">La I del Carmen</button></li>
                <li><button onclick="mens()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Mens Health</button></li>
                <li><button onclick="hParaHombres()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">H PARA HOMBRES</button></li>
                <li><button onclick="misuperdiario()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Mi Súper Diario</button></li>
                <li><button onclick="motociclismo()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Motociclismo</button></li>
                <li><button onclick="muyinteresantejunior()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Muy Interesante Junior</button></li>
                <li><button onclick="natgeot()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">National Geographic Traveler </button></li>
                <li><button onclick="natgeo_esp()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">National Geographic en Español</button></li>
                <li><button onclick="al_dia()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Al Dia</button></li>
                <li><button onclick="amdeselaya()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">am DE CELAYA</button></li>
                <li><button onclick="am_express_guanajuato()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">am EXPRESS GUANAJUATO</button></li>
                <li><button onclick="am_express_la_piedad()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">am EXPRESS LA PIEDAD</button></li>

              </ul> -->



            <!--    <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Costa rica <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="laRepublica()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> La Republica </button></li>
                <li><button onclick="laNacion()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> La NACION </button></li>
                <li><button onclick="financieroCostarica()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> FINANCIERO </button></li>
                <li><button onclick="laTeja()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> LA TEJA </button></li>
              </ul>
            </li>  -->


           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Revistas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="nexos()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Nexos</button></li>
                <li><button onclick="expancion()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">expancion</button></li>
                <li><button onclick="quien()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">quien</button></li>
                <!-- <li><button onclick="muy_interesante()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Muy Interesante</button></li>
                <li><button onclick="tvynovelas()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">TV Y NOVELAS</button></li>
                <li><button onclick="tvNotas()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Tvnotas</button></li>
                <li><button onclick="caras()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Caras</button></li>
                <li><button onclick="circulo_tressesenta()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Circulo 360º</button></li>
                <li><button onclick="cosmopolitan()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Cosmopolitan</button></li>
                <li><button onclick="ellas()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Ellas</button></li> -->

              </ul>
            </li>

            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PGJ<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="PGJ()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">PGJ</button></li>
              </ul>
            </li> -->

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OEM<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="occidental()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Occidental</button></li>
                <li><button onclick="portadas()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">LAS PORTADAS</button></li>
                <li><button onclick="elsoldepueblacompleto()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE PUEBLA</button></li>
                <li><button onclick="diarioDeYucatan()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL DIARIO DE YUCATAN</button></li>
                <li><button onclick="diarioDeJuarez()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL DIARIO DE JUAREZ</button></li>
                <li><button onclick="DiarioDeQueretaro()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">DIARIO DE QUERETARO</button></li>
                <li><button onclick="elSolDeSanJuanDelRio()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE SAN JUAN DEL RIO</button></li>
                <!-- <li><button onclick="universal()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL UNIVERSAL</button></li> -->
                <li><button onclick="elSolDeMazatlan()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE MAZATLAN</button></li>
                <li><button onclick="elSudcaliforniano()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SUDCALIFORNIANO</button></li>
                <li><button onclick="elSolDeMexico()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE MEXICO</button></li>
                <li><button onclick="elSolDetulancingo()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE TULANCINGO</button></li>
                <li><button onclick="elSolDehidalgo()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE HIDALGO</button></li>
                <li><button onclick="elSolDeAcapulco()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE ACAPULCO</button></li>
                <li><button onclick="elSolDeDurango()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE DURANGO</button></li>
                <li><button onclick="elSolDeHermosillo()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE HERMOSILLO</button></li>
                <li><button onclick="elSolDeMazatlan()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE MAZATLAN</button></li>
                <li><button onclick="elSolDeMorelia()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE MORELIA</button></li>
                <li><button onclick="elSolDeSinaloa()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE SINALOA</button></li>
                <li><button onclick="elSolDeTampico()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE TAMPICO</button></li>
                <li><button onclick="elSolDeTijuana()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE TIJUANA</button></li>
                <li><button onclick="elSolDeTlaxcala()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE TLAXCAL</button></li>
                <li><button onclick="elSolDeZacatecas()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE ZACATECAS</button></li>
                <li><button onclick="elSolDeZamora()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE ZAMORA</button></li>
                <li><button onclick="elSolDelCentro()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DEL CENTRO</button></li>
                <li><button onclick="DiarioDeXalapa()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">DIARIO DE XALAPA</button></li>
                <li><button onclick="DiarioDelSur()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">DIARIO DEL SUR</button></li>
                <li><button onclick="ElHeraldoDeChiapas()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL HERALDO DE CHIAPAS</button></li>
                <li><button onclick="ElHeraldoDeChihuahua()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL HERALDO DE CHIHUAHUA</button></li>
                <li><button onclick="ElHeraldoDeTabasco()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL HERALDO DE TABASCO</button></li>
                <li><button onclick="LaVozDeLaFrontera()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">LA VOZ DE LA FRONTERA</button></li>
                <li><button onclick="TribunaDeSanLuis()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">TRIBUNA DE SAN LUIS</button></li>

              </ul>
            </li>



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Leon Guanajuato<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="correoDeGuanajuato()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Correo de Guanajuato</button></li>
                <li><button onclick="amDeLeon()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">a.m. de León</button></li>
                <li><button onclick="elSolDelBajio()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">El Sol del Bajío</button></li>
                <li><button onclick="elSolDeIrapuato()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE IRAPUATO</button></li>
                <li><button onclick="diaLeon()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Al Día León</button></li>
                <li><button onclick="elSolDeLeon()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE LEON</button></li>
                <li><button onclick="elSolDeSalamanca()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">EL SOL DE SALAMANCA</button></li>
                <li><button onclick="diaCelaya()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Al Día Celaya</button></li>
                <li><button onclick="diaMoroleon()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Al Día Moroleón</button></li>
                <li><button onclick="diaSalamanca()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Al Día Salamanca</button></li>
                <li><button onclick="diaIrapuato()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Al Día Irapuato</button></li>
              </ul>
            </li>









            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Varios<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="pressdisplayMexico()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">pressdisplayMexico</button></li>
                <li><button onclick="pressdisplayEstadosUnidos()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">pressdisplayEstadosUnidos</button></li>
                <li><button onclick="pressdisplayAlemania()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">pressdisplayAlemania</button></li>
                <li><button onclick="pressdisplayCanada()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">pressdisplayCanada</button></li>
                <li><button onclick="pressdisplayFrancia()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">pressdisplayFrancia</button></li>
                <li><button onclick="pressdisplayHolanda()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">pressdisplayHolanda</button></li>
                <li><button onclick="listaDePaises()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">listaDePaises</button></li>
                <!-- <li><button onclick="journal_news()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Journal News</button></li>
                <li><button onclick="newYork()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">The New York Post</button></li>
                <li><button onclick="citicenvoice()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">The Citizens' Voice</button></li>
                <li><button onclick="houstoncronicle()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Houston Chronicle</button></li>
                <li><button onclick="thedallasmorningnews()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">The Dallas Morning News</button></li>
                <li><button onclick="chicagotribune()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Chicago Tribune</button></li>
                <li><button onclick="themercurypa()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">The Mercury PA</button></li>
                <li><button onclick="laopinionla()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">La opinion LA</button></li>
                <li><button onclick="losangelestimes()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Los Angeles Times</button></li>
                <li><button onclick="twp()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">The Washington Post</button></li>
                <li><button onclick="palmbeach()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Palm Beach</button></li>
                <li><button onclick="startTelegram()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">START TELEGRAM</button></li>
                <li><button onclick="usa()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">usa</button></li>
                <li><button onclick="canada()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">canada</button></li>
                <li><button onclick="argentina()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">argentina</button></li>
                <li><button onclick="alemania()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">alemania</button></li>
                <li><button onclick="reinoUnido()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">reinoUnido</button></li>
                <li><button onclick="francia()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">francia</button></li>
                <li><button onclick="china()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">china</button></li>
                <li><button onclick="australia()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">australia</button></li> -->
            </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">porno<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><button onclick="porno()" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">porno</button></li>
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
               '04' => "Mayo",
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

       function capital(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='https://script.google.com/macros/s/AKfycbzzQ8V2LfohYLRw62s-A_u1zTyM6Ywqbp_9zqDj8cV94RFYuGQH/exec' target='_blank' > Capital Media </a>" ."</br>" ;
          ?>"; }

          function elPais(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://elpais.com/hemeroteca/elpais-america/portadas/".$año."/".$mes."/".$dia."/' target='_blank' >EL PAIS</a>" ."</br>" ;
          ?>"; }


      function am_lagos(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=50 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e936".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >am DE LAGOS DE MORENO".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function cronica(){
          document.getElementById("caja").innerHTML="<?php


        echo "<a href='http://www.cronica.com.mx/impreso/files/publication.pdf' target='_blank' > pag </a>" ."</br>" ;

      ?>"; }


      function ntrGdl(){
          document.getElementById("caja").innerHTML="<?php
      echo "<a href='http://issuu.com/ntrguadalajara.com' target='_blank' >Link GDL</a>" ."</br>" ;
      echo "<a href='http://issuu.com/ntrguadalajara.com/docs/".$año."-".$mes."-".$dia."' target='_blank' >NTR GDL</a>" ."</br>" ;
      echo "<a href='http://issuu.com/ntrguadalajara.com/docs/web_".$año."-".$mes."-".$dia."' target='_blank' >NTR GDL</a>" ."</br>" ;

      if ($año = substr(2019, -2)) {
        echo "<a href='http://issuu.com/ntrguadalajara.com/docs/web_".$dia."".$mes."".$año."/1' target='_blank' >NTR GDL</a>" ."</br>" ;
      }
      $año = date("Y");
      ?>"; }

      function diariodecolima(){
          document.getElementById("caja").innerHTML="<?php
          if ($año = substr(2019, -2)) {
            echo "<a href='https://diariodecolima.com/contenido/suscriptor/A".$dia."-".$mes."-".$año.".pdf' target='_blank' >SECCION A </a>" ."</br>" ;
            echo "<a href='https://diariodecolima.com/contenido/suscriptor/B".$dia."-".$mes."-".$año.".pdf' target='_blank' >SECCION B </a>" ."</br>" ;
            echo "<a href='https://diariodecolima.com/contenido/suscriptor/C".$dia."-".$mes."-".$año.".pdf' target='_blank' >SECCION C </a>" ."</br>" ;
          }
          $año = date("Y");
          ?>"; }

      function vozM(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=100 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='http://sitiolavoz.lavozdemichoacan.com.mx/digital/".$año."/".$mes."/".$dia."".$mes."19/files/assets/mobile/pages/page000".$pag."_i2.jpg' target='_blank' >pag M".$pag."</a>" ."</br>" ;
        }
        if ($pag>=10 and $pag<=100) {
          echo "<a href='http://sitiolavoz.lavozdemichoacan.com.mx/digital/".$año."/".$mes."/".$dia."".$mes."19/files/assets/mobile/pages/page00".$pag."_i2.jpg' target='_blank' >pag M".$pag."</a>" ."</br>" ;
        }


      }
      ?>"; }

       function laPrensa(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=48 ; $pag++) {
             echo "<a href='http://hemeroteca.oem.com.mx/laprensa/".$año."".$mes."".$dia."/content/pages/page".$pag.".jpg'target='_blank'>pag".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function crionicaJalisco(){
          document.getElementById("caja").innerHTML="<?php
      echo "<a href='http://www.cronicajalisco.com/impreso/'target='_blank'>La Cronica Jalisco I </a>" ."</br>" ;
      echo "<a href='http://www.cronicajalisco.com/impreso/files/web.pdf'target='_blank'>La Cronica Jalisco II </a>" ."</br>" ;

      ?>"; }

      function ecos(){
          document.getElementById("caja").innerHTML="<?php
      echo "<a href='http://www.ecosdelacosta.mx/pdf/2019/".$mes."_".$meses["$mes"]."/".$dia."".$meses["$mes"]."2019.pdf' target='_blank'>Ecos de la Costa</a>" ."</br>" ;
      ?>"; }

      function solMexico(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34ns".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
            }

          ?>"; }


      function despertar(){
          document.getElementById("caja").innerHTML="<?php
        echo "<a href='http://issuu.com/despertardechiapas/docs/despertar_".$dia."_de_".$meses["$mes"]."_".$año."' target='_blank' >Despertar</a>";
      ?>"; }

      function noticiaschiapas(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=50 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='https://impresod.nvinoticias.com/2019/".$mes."/".$dia."/Y7nEwMx7sapftbTj/chiapas/files/assets/common/downloads/page000".$pag.".pdf' target='_blank' >".$pag."</a>" ."</br>" ; }

        if ($pag>=10 and $pag<=99)
        {
          echo "<a href='https://impresod.nvinoticias.com/2019/".$mes."/".$dia."/Y7nEwMx7sapftbTj/chiapas/files/assets/common/downloads/page00".$pag.".pdf' target='_blank' >".$pag."</a>" ."</br>" ;
        }
        if ($pag>=100 and $pag<=1000) {
          echo "<a href='https://impresod.nvinoticias.com/2019/".$mes."/".$dia."/Y7nEwMx7sapftbTj/chiapas/files/assets/common/downloads/page0".$pag.".pdf' target='_blank' >".$pag."</a>" ."</br>" ;
        }


      }
      ?>"; }

      function noticiasOaxaca(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=50 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='https://impresod.nvinoticias.com/2019/".$mes."/".$dia."//Y7nEwMx7sapftbTj/oaxaca/files/assets/common/downloads/page000".$pag.".pdf' target='_blank' >".$pag."</a>" ."</br>" ; }
        if ($pag>=10 and $pag<=99)
        {
          echo "<a href='https://impresod.nvinoticias.com/2019/".$mes."/".$dia."//Y7nEwMx7sapftbTj/oaxaca/files/assets/common/downloads/page00".$pag.".pdf' target='_blank' >".$pag."</a>" ."</br>" ;
        }
        if ($pag>=100 and $pag<=1000) {
          echo "<a href='https://impresod.nvinoticias.com/2019/".$mes."/".$dia."//Y7nEwMx7sapftbTj/oaxaca/files/assets/common/downloads/page0".$pag.".pdf' target='_blank' >".$pag."</a>" ."</br>" ;
        }


      }
      ?>"; }

      function noticiasIstmo(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=50 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='https://impresod.nvinoticias.com/".$año."/".$mes."/".$dia."//Y7nEwMx7sapftbTj/istmo/files/assets/common/downloads/page000".$pag.".pdf' target='_blank' >Pagina".$pag."</a>" ."</br>" ;
        }
        if ($pag>=10 and $pag<=99) {
          echo "<a href='https://impresod.nvinoticias.com/".$año."/".$mes."/".$dia."//Y7nEwMx7sapftbTj/istmo/files/assets/common/downloads/page00".$pag.".pdf' target='_blank' >Pagina".$pag."</a>" ."</br>" ;
        }
        if ($pag>=100 and $pag<=1000) {
          echo "<a href='https://impresod.nvinoticias.com/".$año."/".$mes."/".$dia."//Y7nEwMx7sapftbTj/istmo/files/assets/common/downloads/page0".$pag.".pdf' target='_blank' >Pagina".$pag."</a>" ."</br>" ;
        }


      }
      ?>"; }

      function noticiasCuenca(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=50 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='https://impresod.nvinoticias.com/".$año."/".$mes."/".$dia."//Y7nEwMx7sapftbTj/cuenca/files/assets/common/downloads/page000".$pag.".pdf' target='_blank' >Pagina".$pag."</a>" ."</br>" ;
        }
        if ($pag>=10 and $pag<=99) {
          echo "<a href='https://impresod.nvinoticias.com/".$año."/".$mes."/".$dia."//Y7nEwMx7sapftbTj/cuenca/files/assets/common/downloads/page00".$pag.".pdf' target='_blank' >Pagina".$pag."</a>" ."</br>" ;
        }
        if ($pag>=100 and $pag<=1000) {
          echo "<a href='https://impresod.nvinoticias.com/".$año."/".$mes."/".$dia."//Y7nEwMx7sapftbTj/cuenca/files/assets/common/downloads/page0".$pag.".pdf' target='_blank' >Pagina".$pag."</a>" ."</br>" ;
        }


      }
      ?>"; }


        function cronicaMexicali(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=50 ; $pag++) {
          echo "<a href='http://www.lacronica.com/EdicionDigital/Ediciones/".$año."".$mes."".$dia."/Pdfs/GENERAL_".$pag.".pdf'>General".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://www.lacronica.com/EdicionDigital/Ediciones/".$año."".$mes."".$dia."/Pdfs/DEPORTES_".$pag.".pdf'>Deportes".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://www.lacronica.com/EdicionDigital/Ediciones/".$año."".$mes."".$dia."/Pdfs/ESPECTACULOS_".$pag.".pdf'>Espectaculos".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://www.lacronica.com/EdicionDigital/Ediciones/".$año."".$mes."".$dia."/Pdfs/SOCIALES_".$pag.".pdf'>Sociales".$pag."</a>" ."</br>" ;
        }
      ?>"; }

      function portadas(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qk".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qm".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qn".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qp".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          // echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34np".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          //echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pb".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pd".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          //echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pw".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34py".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          // echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pc".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34px".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pg".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34nv".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pz".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          // echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qs".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qr".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34ql".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          // echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34q1".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          //echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34p8".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qf".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34ps".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pu".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pt".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34nw".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34ny".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pr".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e803".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>";
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e747".$date."00000000001001&page=1&paper=A3' target='_blank' >pag,1</a>" ."</br>" ;
      ?>"; }

      function occidental(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qj".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function DiarioDelSur(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pr".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeMexico(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34ns".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }
      function abcDeMonterrey(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='https://online.fliphtml5.com/hddh/jbcq/files/large/".$pag.".jpg' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function presente(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
                                                            // SE CAMBIA LA SEGUNDA
            echo "<a href='http://online.fliphtml5.com/jkdq/rlltW/files/large/".$pag.".jpg' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elHeraldoDePuebla(){
          document.getElementById("caja").innerHTML="<?php
            echo "<a href='http://www.elheraldodepuebla.mx/wp-content/uploads/2017/06/PDFs-".$dia."-".$mes."-19.pdf' target='_blank' >EDICION</a>" ."</br>" ;
      ?>"; }

      function diarioDeMexico(){
          document.getElementById("caja").innerHTML="<?php
            echo "<a href='https://www.diariodemexico.com/flowpaper/php/services/view.php?doc=MX".$dia."".$mes."19.pdf&format=pdf&page={page}&subfolder=' target='_blank' >DIARIO DE MEXICO</a>" ."</br>" ;
      ?>"; }

      function masPorMas(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e195".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function veinticuatroHorasCdmx(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9vrn".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function prueba(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='https://i.prcdn.co/img?file=2133".$date."00000000001001&page=".$pag."&scale=instead' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function quintanaRooHoy(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=50 ; $pag++) {
                echo "<a href='https://s3.amazonaws.com/eid-grupocanton/ediciondigital/".$año."/".$mes."/".$dia."/qroo/files/mobile/".$pag.".jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
            }
      ?>"; }

      function elSolDeSanJuanDelRio(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34p9".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDetulancingo(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qp".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDehidalgo(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qn".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeAcapulco(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qk".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeDurango(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qm".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeHermosillo(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34np".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeIrapuato(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pb".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeLeon(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pd".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeMazatlan(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pw".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeMorelia(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34py".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeSalamanca(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pc".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeSinaloa(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34px".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeTampico(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pg".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeTijuana(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34nv".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeTlaxcala(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pz".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeZacatecas(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qs".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDeZamora(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qr".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSolDelCentro(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34ql".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function elSudcaliforniano(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34q1".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function diarioDeYucatan(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e747".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function DiarioDeQueretaro(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34p8".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function DiarioDeXalapa(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34qf".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function ElHeraldoDeChiapas(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34ps".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function ElHeraldoDeChihuahua(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=200 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pu".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function ElHeraldoDeTabasco(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pt".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function LaVozDeLaFrontera(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34nw".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function TribunaDeSanLuis(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
            echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34ny".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }




      function capitalMedia(){
          document.getElementById("caja").innerHTML="<?php
       for ($pag=51476; $pag <=51675 ; $pag++) {
         echo "<a href='https://p88.capitalmedia.mx/ediciones/1206-CapitalMexico/".$pag."/html5/".$pag.".pdf' target='_blank' >".$pag."</a>" ."</br>" ;
         }
      ?>"; }



      function elsoldepueblacompleto(){
          document.getElementById("caja").innerHTML="<?php
       for ($pag=1; $pag <=150 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pe".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      // function universal(){
      //     document.getElementById("caja").innerHTML="<?php
      //
      //     for ($pag=1; $pag <=140 ; $pag++) {
      //
      //     echo "<a href='http://ediciondigital.eluniversal.com.mx/ed/eu".$dia."".$mes."19/files/pages/large/".$pag.".jpg' target='_blank' >pag ".$pag." </a>" ."</br>" ;
      //   }

        for ($pag=1; $pag <=50 ; $pag++) {

          echo "<a href='http://ediciondigital.eluniversalmas.com.mx/edqro/uq".$dia."".$mes."19/files/pages/large/".$pag.".jpg' target='_blank' > que ".$pag." </a>" ."</br>" ;
        }

      for ($pag=1; $pag <=200 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2053".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >X ".$pag."</a>" ."</br>" ;

      }

      for ($pag=1; $pag <=100 ; $pag++) {
        echo "<a href='http://ediciondigital.eluniversalmas.com.mx/suplementos/clase/pages/".$pag."-large.jpg' target='_blank' >Clase ".$pag."</a>" ."</br>" ;
      }

      for ($pag=1; $pag <=100 ; $pag++) {
        echo "<a href='http://ediciondigital.eluniversalmas.com.mx/suplementos/claseQro/pages/".$pag."-large.jpg' target='_blank' >Clase Q ".$pag."</a>" ."</br>" ;

      }

      ?>"; }

      function fronteraTijuana(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=50 ; $pag++) {
          echo "<a href='http://c283867.r67.cf1.rackcdn.com/".$año."".$mes."".$dia."_GENERAL_".$pag.".pdf'>GENERAL".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://c283867.r67.cf1.rackcdn.com/".$año."".$mes."".$dia."_DEPORTES_".$pag.".pdf'>DEPORTES".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://c283867.r67.cf1.rackcdn.com/".$año."".$mes."".$dia."_ESPECTACULOS_".$pag.".pdf'>ESPECTACULOS".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://c283867.r67.cf1.rackcdn.com/".$año."".$mes."".$dia."_SOCIALES_".$pag.".pdf'>SOCIALES".$pag."</a>" ."</br>" ;
        }

      ?>"; }

      function dia(){
          document.getElementById("caja").innerHTML="<?php
        echo "<a href='http://factura.codigobit.com.mx/diarioeldia/periodico/".$año."-".$mes."-".$dia.".pdf' target='_blank' >El Dia</a>";
        ?>"; }

      function imparcial(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=40 ; $pag++) {
          echo "<a href='http://www.elimparcial.com/EdicionDigital/Ediciones/".$date."/Pdfs/GENERAL_".$pag.".pdf'>General".$pag."</a>" ."</br>" ;

        }
        for ($pag=1; $pag <=10 ; $pag++) {
          echo "<a href='http://www.elimparcial.com/EdicionDigital/Ediciones/".$date."/Pdfs/DEPORTES_".$pag.".pdf'>Deportes".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=10 ; $pag++) {
          echo "<a href='http://www.elimparcial.com/EdicionDigital/Ediciones/".$date."/Pdfs/METRO_".$pag.".pdf'>Metro".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=10 ; $pag++) {
          echo "<a href='http://www.elimparcial.com/EdicionDigital/Ediciones/".$date."/Pdfs/ESPECTACULOS_".$pag.".pdf'>Espectaculos".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=10 ; $pag++) {
          echo "<a href='http://www.elimparcial.com/EdicionDigital/Ediciones/".$date."/Pdfs/SOCIALES_".$pag.".pdf'>Sociales".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=10 ; $pag++) {
          echo "<a href='http://www.elimparcial.com/EdicionDigital/Ediciones/".$date."/Pdfs/SONORA_".$pag.".pdf'>Sonora".$pag."</a>" ."</br>" ;
        }
      ?>"; }

      function horizonte_m(){
          document.getElementById("caja").innerHTML="<?php

        echo "<a href='http://www.elhorizonte.mx/edicion_impresa/".$año."-".$mes."-".$dia."_EH/pdf/".$año."-".$mes."-".$dia."_EH.pdf' target='_blank' >Horizonte de Monterrey</a>";
      ?>"; }

       function sanluishoy(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=35 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='http://mival.mx/pulso/Pdfs/San%20Luis/".$año."".$mes."".$dia."/SLH".$dia."0".$pag.".pdf' target='_blank' >pag".$pag."</a>" ."</br>" ;
        }
        if ($pag>=10 and $pag<=99) {
          echo "<a href='http://mival.mx/pulso/Pdfs/San%20Luis/".$año."".$mes."".$dia."/SLH".$dia."".$pag.".pdf' target='_blank' >pag".$pag."</a>" ."</br>" ;
        }


      }
      ?>"; }
       function criticaJalisco(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='https://criticajalisco.com/wp-content/uploads/sites/2/2019/05/CRITICA649.jpg' target='_blank' >pag1</a>" ."</br>" ;
      for ($pag=2; $pag <=30 ; $pag++) {
          echo "<a href='https://criticajalisco.com/wp-content/uploads/sites/2/2019/05/CRITICA649".$pag.".jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
      }
      ?>"; }

       function jaliscoPublica(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://criticajalisco.com/wp-content/uploads/sites/2/2019/05/jalisco-27.jpg' target='_blank' >pag1</a>" ."</br>" ;
      for ($pag=2; $pag <=30 ; $pag++) {
          echo "<a href='http://criticajalisco.com/wp-content/uploads/sites/2/2019/05/jalisco".$pag."-27.jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
      }
      ?>"; }

       function criticaPolitica(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='https://mexicopublica.com/wp-content/uploads/2019/05/NACIONAL-268.jpg' target='_blank' >pag1</a>" ."</br>" ;

      for ($pag=2; $pag <=30 ; $pag++) {
          echo "<a href='https://mexicopublica.com/wp-content/uploads/2019/05/NACIONAL-268".$pag.".jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function redes(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=32 ; $pag++)
            {
                echo "<a href='http://www.redesdelsur.com.mx/versionimpresa/2019/diciembre/dic".$dia."/files/mobile/".$pag.".jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
            }


      ?>"; }

      function correoManzanillo(){
          document.getElementById("caja").innerHTML="<?php
      echo "<a href='http://www.ecosdelacosta.mx/pdf/".$año."/".$mes."_".$meses["$mes"]."/correo".$dia."".$meses["$mes"]."".$año.".pdf' target='_blank'>Correo de Manzanillo</a>" ."</br>" ;

      ?>"; }

      function lider(){
          document.getElementById("caja").innerHTML="<?php
      echo "<a href='http://archivos.lider-informativo.com/hemeroteca/".$año."/".$mes."/".$dia."/Lider.pdf' target='_blank'>Lider Informativo</a>" ."</br>" ;
      echo "<a href='http://archivos.lider-informativo.com/hemeroteca/".$año."/".$mes."/".$dia."/Orbe.pdf' target='_blank'>ORBE</a>" ."</br>" ;
      echo "<a href='http://archivos.lider-informativo.com/hemeroteca/".$año."/".$mes."/".$dia."/Meta.pdf' target='_blank'>META</a>" ."</br>" ;
      echo "<a href='http://archivos.lider-informativo.com/hemeroteca/".$año."/".$mes."/".$dia."/Pais.pdf' target='_blank'>PAIS</a>" ."</br>" ;
      echo "<a href='http://archivos.lider-informativo.com/hemeroteca/".$año."/".$mes."/".$dia."/Show.pdf' target='_blank'>SHOW</a>" ."</br>" ;
      echo "<a href='http://archivos.lider-informativo.com/hemeroteca/".$año."/".$mes."/".$dia."/grafico%20".$dia.".pdf' target='_blank'>Grafico</a>" ."</br>" ;
      ?>"; }

      function am_leon(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=100 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e933".$año."".$mes."2100000000001001&page=".$pag."&paper=A3' target='_blank' >am DE LEON".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function tvynovelas(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e765".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function veintitantos(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=21712015122000000000001001&page=".$pag."&paper=A3' target='_blank' >Veintitantos".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function chile(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e751".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function milenioMonterrey(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=ec19".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function milenioNacional(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2073".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function milenioJalisco(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=ed26".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;

      }
      ?>"; }


      function elEraldoDeChiapas(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34ps".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function caras(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e757".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >Caras".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function circulo_tressesenta(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e953".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >Circulo 360º ".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function cosmopolitan(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e759".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >COSMOPOLITAN ".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function eldiariodelpaso(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e804".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function eldiariodenuevodecasasgrandes(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e805".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >PAG".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function ellas(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e807".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >Ellas".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function laidelcarmen(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e750".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >La I del Carmen".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function laidemerida(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e748".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function mens(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e972".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >Mens Health".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function hParaHombres(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=ed702019070100000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function misuperdiario(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e707".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >Mi Súper Diario".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function motociclismo(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e886".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >Motociclismo".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function muy_interesante(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e801".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function muyinteresantejunior(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e992".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >Muy Interesante Junior".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function natgeot(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e990".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >National Geographic Traveler ".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function natgeo_esp(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e762".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >National Geographic en Español ".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function al_dia(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e939".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >Al Dia ".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function amdeselaya(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e935".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >am DE CELAYA ".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function am_express_guanajuato(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e937".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >am EXPRESS GUANAJUATO ".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function am_express_la_piedad(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e945".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >am EXPRESS LA PIEDAD ".$pag."</a>" ."</br>" ;
      }
      ?>"; }


      function impacto(){
          document.getElementById("caja").innerHTML="<?php
           echo "<a href='http://impreso.impacto.mx/wp-content/uploads/2019/' target='_blank' >Impacto</a>" ."</br>" ;
           ?>"; }

      function meridianos(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://189.194.63.87/edicion/vallarta/".$año."/".$mes."/".$dia."/politica/publicidad/politica.pdf' target='_blank' >Vallarta A</a>" ."</br>" ;
          echo "<a href='http://189.194.63.87/edicion/vallarta/".$año."/".$mes."/".$dia."/policiaca/publicidad/policiaca.pdf' target='_blank' >Vallarta B</a>" ."</br>" ;
          echo "<a href='http://189.194.63.87/edicion/nayarit/".$año."/".$mes."/".$dia."/politica/publicidad/politica.pdf' target='_blank' >Nayarit A</a>" ."</br>" ;
          echo "<a href='http://189.194.63.87/edicion/nayarit/".$año."/".$mes."/".$dia."/deportes/publicidad/deportes.pdf' target='_blank' >Nayarit B</a>" ."</br>" ;
          echo "<a href='http://189.194.63.87/edicion/nayarit/".$año."/".$mes."/".$dia."/comercial/publicidad/comercial.pdf' target='_blank' >Nayarit C</a>" ."</br>" ;
          echo "<a href='http://189.194.63.87/edicion/nayarit/".$año."/".$mes."/".$dia."/sociales/publicidad/sociales.pdf' target='_blank' >Nayarit D</a>" ."</br>" ;
          echo "<a href='http://impreso.meridiano.mx/edicion/grafico/".$año."/".$mes."/".$dia."/graficoa/publicidad/graficoa.pdf' target='_blank' >Grafico A</a>" ."</br>" ;
          echo "<a href='http://impreso.meridiano.mx/edicion/grafico/".$año."/".$mes."/".$dia."/graficob/publicidad/graficob.pdf' target='_blank' >Grafico B</a>" ."</br>" ;
          echo "<a href='http://impreso.meridiano.mx/edicion/santiago/".$año."/".$mes."/".$dia."/santiago/publicidad/santiago.pdf' target='_blank' >Santiago</a>" ."</br>" ;
          ?>"; }

          function expreso(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://edicionimpresa.expreso.com.mx/edicion_impresa/".$date."/1/".$pag.".pdf'>A ".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=10 ; $pag++) {
          echo "<a href='http://edicionimpresa.expreso.com.mx/edicion_impresa/".$date."/2/".$pag.".pdf'>B ".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=10 ; $pag++) {
          echo "<a href='http://edicionimpresa.expreso.com.mx/edicion_impresa/".$date."/3/".$pag.".pdf'>C ".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=10 ; $pag++) {
          echo "<a href='http://edicionimpresa.expreso.com.mx/edicion_impresa/".$date."/4/".$pag.".pdf'>D ".$pag."</a>" ."</br>" ;
        }
        for ($pag=1; $pag <=10 ; $pag++) {
          echo "<a href='http://edicionimpresa.expreso.com.mx/edicion_impresa/".$date."/5/".$pag.".pdf'>E ".$pag."</a>" ."</br>" ;
        }

      ?>"; }

      function huasteca(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=40 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='http://mival.mx/pulso/Pdfs/Huasteca/".$date."/HH".$dia."0".$pag.".pdf' target='_blank' >pag".$pag."</a>" ."</br>" ;


      }
        if ($pag>=10 and $pag<=40) {
          echo "<a href='http://mival.mx/pulso/Pdfs/Huasteca/".$date."/HH".$dia."".$pag.".pdf' target='_blank' >pag".$pag."</a>" ."</br>" ;
        }

      }
      ?>"; }

      function liberaldelsur(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://files.flipsnack.net.s3.amazonaws.com/collections/archives/fdnag3lmd/".$dia."".$meses["$mes"]."".$año.".zip' target='_blank' >Liberal del Sur </a>" ."</br>" ;
          ?>"; }

          function yumpu(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=40 ; $pag++) {
        echo "<a href='https://img.yumpu.com/62682894/".$pag."/3840x2160/' target='_blank' >YUMPU".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function record(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=80 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2133".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function revistaCambio(){
          document.getElementById("caja").innerHTML="<?php
      for ($pag=52932; $pag <=53031 ; $pag++) {
        echo "<a href='https://p88.capitalmedia.mx/ediciones/1158-ReporteIndigoDF/".$pag."/html5/".$pag.".pdf'>".$pag."</a>" ."</br>" ;

      }
      ?>"; }

      function iCampeche(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=32 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e749".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >pag,".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function quien(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=300 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e900".$año."".$mes."0100000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function expancion(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=300 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e894".$año."".$mes."0100000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function tvNotas(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=ed53".$año."".$mes."".$dia."00000051001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }



      function diarioDeJuarez(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e803".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>";
      }
      ?>"; }

      function correoDeGuanajuato(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34n1".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>";
      }
      ?>"; }

      function amDeLeon(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e933".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>";
      }
      ?>"; }

      function diaLeon(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e939".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>";
      }
      ?>"; }

      function diaCelaya(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e941".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>";
      }
      ?>"; }

      function diaMoroleon(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e944".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>";
      }
      ?>"; }

      function diaSalamanca(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e943".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>";
      }
      ?>"; }

      function diaIrapuato(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e940".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>";
      }
      ?>"; }

      function elSolDelBajio(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=34pa".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>";
      }
      ?>"; }

      function elDiarioDeElPaso(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e804".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>";
      }
      ?>"; }

      function guardian(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e959".$año."".$mes."".$dia."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function vanguardia(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=150 ; $pag++) {
        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2102".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function cabos(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=40 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='https://www.tribunadeloscabos.com.mx/wp-content/uploads/flippingbook/files/assets/common/page-html5-substrates/page000".$pag."_4.jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
        }
        if ($pag>=10 and $pag<=99) {
          echo "<a href='https://www.tribunadeloscabos.com.mx/wp-content/uploads/flippingbook/files/assets/common/page-html5-substrates/page00".$pag."_4.jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
        }
      }
      ?>"; }

          function primera_hora(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.primera-hora.com.mx/pub/mazatlan/".$año."".$mes."".$dia."/pdf/MZT".$año."".$mes."".$dia.".pdf' target='_blank' >Primera Hora</a>" ."</br>" ;
          ?>"; }

          function financiero(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.elfinanciero.com.mx/paper' target='_blank' >WEB</a>" ."</br>" ;
          echo "<a href='http://xpaper.xalok.com/uploads/downloader.php?fichero=/uploads/El-Financiero-".$dia."-".$mes."-".$año."/El-Financiero-".$dia."-".$mes."-".$año.".PDF&formato=1' target='_blank' >Financiero</a>" ."</br>" ;
          echo "<a href='http://xpaper.xalok.com/uploads/downloader.php?fichero=/uploads/Bajio-".$dia."-".$mes."-".$año."/Bajio-".$dia."-".$mes."-".$año.".PDF&formato=1' target='_blank' >Financiero Bajio</a>" ."</br>" ;
          echo "<a href='http://xpaper.xalok.com/uploads/downloader.php?fichero=/uploads/Monterrey-".$dia."-".$mes."-".$año."/Monterrey-".$dia."-".$mes."-".$año.".PDF&formato=1' target='_blank' >Financiero Monterrey</a>" ."</br>" ;
          echo "<a href='http://xpaper.xalok.com/uploads/downloader.php?fichero=/uploads/Viajes-".$dia."-".$mes."-".$año."/Viajes-".$dia."-".$mes."-".$año.".PDF&formato=1' target='_blank' >Financiero Viajes</a>" ."</br>" ;
          echo "<a href='http://xpaper.xalok.com/uploads/downloader.php?fichero=/uploads/Autos-".$dia."-".$mes."-".$año."/Autos-".$dia."-".$mes."-".$año.".PDF&formato=1' target='_blank' >Financiero Autos</a>" ."</br>" ;
          echo "<a href='http://xpaper.xalok.com/uploads/downloader.php?fichero=/uploads/Suplemento-especial-".$dia."-".$mes."-".$año."/Suplemento-especial-".$dia."-".$mes."-".$año.".PDF&formato=1' target='_blank' >Financiero Suplemento-especial</a>" ."</br>" ;
          echo "<a href='http://xpaper.xalok.com/uploads/downloader.php?fichero=/uploads/Suplemento-especial-1-".$dia."-".$mes."-".$año."/Suplemento-especial-1-".$dia."-".$mes."-".$año.".PDF&formato=1' target='_blank' >Suplemento</a>" ."</br>" ;
          ?>"; }

          function economista(){
          document.getElementById("caja").innerHTML="<?php
                         https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/politicos/2019/politicos020119.pdf&var=1
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/econo_global/".$año."".$mes."/economista".$dia."".$mes."19.pdf' target='_blank' >Economista</a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/econo_queretaro/".$año."".$mes."/queretaro".$dia."".$mes."19.pdf&var=1' target='_blank' >Economista queretaro</a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/econo_termo/".$año."".$mes."/t_economico".$dia."".$mes."19.pdf&var=1' target='_blank' > TERMOMETRO ECONOMICO </a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/politicos/".$año."/politicos".$dia."".$mes."19.pdf&var=1' target='_blank' > LOS POLITICOS </a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/autos/".$año."/autos".$dia."".$mes."19.pdf&var=1' target='_blank' >AUTOS</a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/wp/".$año."/wp".$dia."".$mes."19.pdf&var=1' target='_blank' >TWP</a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/credito/".$año."/uniones".$dia."".$mes."19.pdf&var=1' target='_blank' >UNIONES</a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/reporte_especial/".$año."/industria".$dia."".$mes."19.pdf&var=1' target='_blank' >INDISTRIA</a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/estrategias/".$año."/estrategias".$dia."".$mes."19.pdf&var=1' target='_blank' >ESTRATEGIAS</a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/asofom/asofom_".$dia."".$mes."19.pdf&var=1' target='_blank' >ASOFOM</a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/viajes/".$año."/turismo".$dia."".$mes."19.pdf&var=1' target='_blank' > TURISMO </a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/transporte/".$año."/transporte".$dia."".$mes."19.pdf&var=1' target='_blank' > TRASPORTE </a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/prevision/".$año."/prevision".$dia."".$mes."19.pdf&var=1' target='_blank' > TRASPORTE </a>" ."</br>" ;
          echo "<a href='https://www3.eleconomista.com.mx/download.php?file=publicaciones_pdf/especializadas/reporte_especial/".$año."/respecial".$dia."".$mes."19.pdf&var=1' target='_blank' > REPORTE </a>" ."</br>" ;


          ?>"; }

          function enfoque(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='https://enfoquenayarit.com/seccion/impreso/' target='_blank' >WEB</a>" ."</br>" ;
          ?>"; }



      function excelsior(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://m.excelsior.com.mx/periodico/flip-nacional/".$dia."-".$mes."-".$año."/portada.pdf' target='_blank' >A</a>" ."</br>" ;
          echo "<a href='http://m.excelsior.com.mx/periodico/flip-global/".$dia."-".$mes."-".$año."/portada.pdf' target='_blank' >B</a>" ."</br>" ;
          echo "<a href='http://m.excelsior.com.mx/periodico/flip-dinero/".$dia."-".$mes."-".$año."/portada.pdf' target='_blank' >C</a>" ."</br>" ;
          echo "<a href='http://m.excelsior.com.mx/periodico/flip-comunidad/".$dia."-".$mes."-".$año."/portada.pdf' target='_blank' >D</a>" ."</br>" ;
          echo "<a href='http://m.excelsior.com.mx/periodico/flip-adrenalina/".$dia."-".$mes."-".$año."/portada.pdf' target='_blank' >E</a>" ."</br>" ;
          echo "<a href='http://m.excelsior.com.mx/periodico/flip-funcion/".$dia."-".$mes."-".$año."/portada.pdf' target='_blank' >F</a>" ."</br>" ;
          echo "<a href='http://m.excelsior.com.mx/periodico/flip-expresiones/".$dia."-".$mes."-".$año."/portada.pdf' target='_blank' >G</a>" ."</br>" ;

          ?>"; }

          function bahia(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=32 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='http://www.tribunadelabahia.com.mx/wp-content/uploads/flippingbook/files/assets/mobile/pages/page000".$pag."_i2.jpg' target='_blank' >pag.jpg".$pag."</a>" ."</br>" ;
        }
        if ($pag>=10 and $pag<=99) {
          echo "<a href='http://www.tribunadelabahia.com.mx/wp-content/uploads/flippingbook/files/assets/mobile/pages/page00".$pag."_i2.jpg' target='_blank' >pag.jpg".$pag."</a>" ."</br>" ;
        }
      }

      for ($pag=1; $pag <=32 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='http://www.tribunadelabahia.com.mx/wp-content/uploads/flippingbook/files/assets/mobile/pages/page000".$pag."_i2.png' target='_blank' >pag.png".$pag."</a>" ."</br>" ;
        }
        if ($pag>=10 and $pag<=99) {
          echo "<a href='http://www.tribunadelabahia.com.mx/wp-content/uploads/flippingbook/files/assets/mobile/pages/page00".$pag."_i2.png' target='_blank' >pag.png".$pag."</a>" ."</br>" ;
        }
      }
      ?>"; } //http://www.tribunadelabahia.com.mx/wp-content/uploads/flippingbook/files/assets/mobile/pages/   este link nos manda a las imagenes .jpg de el mobil

      function expreso_victoria(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=100 ; $pag++) {
          echo "<a href='http://expreso.press/flip/expresovic/hoy/impreso/pages/zoom/".$pag.".jpg' target='_blank'>Expreso Victoria ".$pag."</a>" ."</br>" ;
        }
        ?>"; }

        function razon_tampico(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=100 ; $pag++) {
          echo "<a href='http://expreso.press/flip/larazontam/hoy/impreso/pages/zoom/".$pag.".jpg' target='_blank'>La Razon Tampico ".$pag."</a>" ."</br>" ;
        }
        ?>"; }

        function expreso_matamoros(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=100 ; $pag++) {
          echo "<a href='http://expreso.press/flip/expresomat/hoy/impreso/pages/zoom/".$pag.".jpg' target='_blank'>Expreso Matamoros ".$pag."</a>" ."</br>" ;
        }
        ?>"; }

        function expreso_mante(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=100 ; $pag++) {
          echo "<a href='http://expreso.press/flip/expresoman/hoy/impreso/pages/zoom/".$pag.".jpg' target='_blank'>Expreso Mante ".$pag."</a>" ."</br>" ;
        }
        ?>"; }

        function siglo_durango(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://elsiglodedurango.com.mx/descargas/?view=".$año."|".$mes."|".$dia."|".$dia."dgo0".$pag."a.pdf' target='_blank'>El siglo de durango A".$pag."</a>" ."</br>" ;
        }

        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://elsiglodedurango.com.mx/descargas/?view=".$año."|".$mes."|".$dia."|".$dia."dgo0".$pag."b.pdf' target='_blank'>El siglo de durango B".$pag."</a>" ."</br>" ;
        }

        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://elsiglodedurango.com.mx/descargas/?view=".$año."|".$mes."|".$dia."|".$dia."dgo0".$pag."c.pdf' target='_blank'>El siglo de durango C".$pag."</a>" ."</br>" ;
        }

        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://elsiglodedurango.com.mx/descargas/?view=".$año."|".$mes."|".$dia."|".$dia."dgo0".$pag."d.pdf' target='_blank'>El siglo de durango D".$pag."</a>" ."</br>" ;
        }

        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://elsiglodedurango.com.mx/descargas/?view=".$año."|".$mes."|".$dia."|".$dia."dgo0".$pag."e.pdf' target='_blank'>El siglo de durango E".$pag."</a>" ."</br>" ;
        }

        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://elsiglodedurango.com.mx/descargas/?view=".$año."|".$mes."|".$dia."|".$dia."dgo0".$pag."f.pdf' target='_blank'>El siglo de durango F".$pag."</a>" ."</br>" ;
        }

        for ($pag=1; $pag <=20 ; $pag++) {
          echo "<a href='http://elsiglodedurango.com.mx/descargas/?view=".$año."|".$mes."|".$dia."|".$dia."dgo0".$pag."g.pdf' target='_blank'>El siglo de durango G".$pag."</a>" ."</br>" ;
        }
        ?>"; }

        function los_rostros_de_tlaxcala(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=250 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='https://www.losrostros.com.mx/redisenoV2/images/imagenes-impreso/fleep/494_pages-00".$pag.".jpg' target='_blank' >X".$pag."</a>" ."</br>" ;
        }
        if ($pag>=10 and $pag<=99) {
          echo "<a href='https://www.losrostros.com.mx/redisenoV2/images/imagenes-impreso/fleep/494_pages-0".$pag.".jpg' target='_blank' >X".$pag."</a>" ."</br>" ;
        }
        if ($pag>=100 and $pag<=1000) {
          echo "<a href='https://www.losrostros.com.mx/redisenoV2/images/imagenes-impreso/fleep/494_pages-".$pag.".jpg' target='_blank' >X".$pag."</a>" ."</br>" ;
        }


      }
      ?>"; }

      function monitorEconomico(){
        document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=50 ; $pag++) {
      if ($pag>=1 and $pag<10) {
        echo "<a href='http://monitoreconomico.org/media/uploads/ejemplares/".$año."/".$mes."/".$dia."/11_".$meses["$mes"]."_".$año."_page_0".$pag.".png' target='_blank' >pag,".$pag."</a>" ."</br>" ;
      }
      if ($pag>=10 and $pag<=99) {
        echo "<a href='http://monitoreconomico.org/media/uploads/ejemplares/".$año."/".$mes."/".$dia."/11_".$meses["$mes"]."_".$año."_page_".$pag.".png' target='_blank' >pag,".$pag."</a>" ."</br>" ;
      }
    }
    ?>"; }

      function esto(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=100 ; $pag++) {
             echo "<a href='http://hemeroteca.oem.com.mx/esto/".$año."".$mes."08/content/pages/page".$pag.".jpg' target='_blank' > ESTO DF ".$pag."</a>" ."</br>" ;
      }
      ?>"; }





        function contexto(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='http://contextodedurango.com.mx/hemeroteca/2019/".$meses["$mes"]."/".$dia."".$mes."".$año.".pdf' target='_blank' > contexto de durango </a>" ."</br>" ;
        ?>"; }

        function impulsoEdomex(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='https://impulsoedomex.com.mx/wp-content/uploads/ftp/hemeroteca/".$año."/ENERO/".$año."".$mes."".$dia.".pdf' target='_blank' >IMPULSO EDOMEX</a>" ."</br>" ;
        ?>"; }

        function diarioImagen(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='http://www.diarioimagen.net/wp-content/pdfedit/pdfarchive/".$año."/".$mes."".$año."/' target='_blank' > diario imagen </a>" ."</br>" ;
        ?>"; }

        function imagenQuintanaRoo(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='http://diarioimagenqroo.mx/noticias/wp-content/pdfedit/pdfarchive/2019/".$meses["$mes"]."' target='_blank' > imagen quintana roo </a>" ."</br>" ;
        ?>"; }

        function jornadaAguasCalientes(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='https://issuu.com/jornadags/docs/lja".$dia."".$mes."".$año."' target='_blank' > la jornada aguascalientes </a>" ."</br>" ;
        ?>"; }


        function miled(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='https://issuu.com/milednoticias1' target='_blank' > MILED MEXICO </a>" ."</br>" ;
        echo "<a href='https://issuu.com/miledestados0' target='_blank' > MILED VARIOS </a>" ."</br>" ;
        ?>"; }

        function jornadaGuerrero(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='http://lajornada.digital/ciudad/Guerrero/' target='_blank' >EDICION</a>" ."</br>" ;
        ?>"; }

        function mundoExpress(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='https://issuu.com/mundoejecutivo' target='_blank' > OPCION A </a>" ."</br>" ;
        ?>"; }

        function sintesisTlaxcala(){
          document.getElementById("caja").innerHTML="<?php
        for ($pag=1; $pag <=10 ; $pag++) {
             echo "<a href='https://www.sintesis.mx/APPSintesis/ImpresoPortadas/Diarios/".$dia."".$mes."".$año."_ATLAX_0".$pag.".jpeg' target='_blank' > sintesisTlaxcala ".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function proceso(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='https://www.facebook.com/NZartre/?fref=ts&__mref=message_bubble' target='_blank' > proceso </a>" ."</br>" ;


        ?>"; }

        function laRepublica(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=50 ; $pag++) {

        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=3889".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >La Republica".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function laNacion(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=50 ; $pag++) {

        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=ea61".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >La NACION".$pag."</a>" ."</br>" ;

      }
      for ($pag=1; $pag <=50 ; $pag++) {

        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=ea89".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' > VIVA ".$pag."</a>" ."</br>" ;

      }
      ?>"; }

      function financieroCostarica(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=50 ; $pag++) {

        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=ea62".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' > FINANCIERO ".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function laTeja(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=50 ; $pag++) {

        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=ea85".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >La TEJA".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function gato(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=50 ; $pag++) {

        echo "<a href='https://image.issuu.com/180610092526-f0730d895717508f3aca5844ef33e4a6/jpg/page_".$pag.".jpg' target='_blank' >gato".$pag."</a>" ."</br>" ;


      }
      ?>"; }

      function calameo(){

          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=50 ; $pag++) {
        echo "<a href='https://p.calameoassets.com/190212185201-78c3961b332e49329a41e788ffeae127/p".$pag.".jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
        }
      ?>"; }

      function diarioObjetivo(){
          document.getElementById("caja").innerHTML="<?php

        echo "<a href='http://www.diarioobjetivo.com.mx/pdf/".$diasNombre["$diaL"]."%20".$dia."%20de%20".$meses["$mes"]."%20de%202019.pdf' target='_blank' >diario Objetivo nota la primera letra de el mes es mayuscula</a>" ."</br>" ;
        ?>"; }

        function pais()
        {
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=2317 ; $pag++)
          {
            echo "<a href='http://lector.kioskoymas.com/epaper/services/OnlinePrintHandler.ashx?issue=".$pag."2019102600000000001001&page=1&paper=A3' target='_blank' >pais".$pag."</a>" ."</br>" ;
          }
      ?>";
        }







        function algo(){
          document.getElementById("caja").innerHTML="<?php


      for ($pag=1; $pag <=2317 ; $pag++) {

        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=".$pag."".$date."00000000001001&page=1&paper=A3' target='_blank' >algo".$pag."</a>" ."</br>" ;


      }
      ?>"; }

      function revistaAr(){
          document.getElementById("caja").innerHTML="<?php


      for ($pag=1; $pag <=120 ; $pag++) {

        echo "<a href='http://www.aregional.com/intranet/revistaApp/revistas/revista_digital/59/content/pages/page".$pag.".jpg' target='_blank' >Pagina".$pag."</a>" ."</br>" ;


      }
      ?>"; }

      function porvenir(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://elporvenir.mx/pdfs/19/".$mes."/".$dia."/' target='_blank' >El Porvenir y El Tren</a>" ."</br>" ;
      ?>"; }

      function elGranDiarioDeSonora(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.eldiariodesonora.com.mx/diarioson/archivo/".$dia."".$mes."2019/pdf/' target='_blank' >El Gran Diario de Sonora</a>" ."</br>" ;
      ?>"; }

      function amDeQueretaro(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='https://issuu.com/periodicoamqueretaro/docs/excelsior_".$dia."_i_".$mes."_i_".$año."' target='_blank' >Excelsior</a>" ."</br>" ;
          echo "<a href='https://issuu.com/periodicoamqueretaro/docs/queretaro_".$dia."_i_".$mes."_i_".$año."' target='_blank' >Excelsior</a>" ."</br>" ;
      ?>"; }

      function twp(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=100 ; $pag++) {

        echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=10472019122100000000001001&page=".$pag."&paper=A3' target='_blank' >pag".$pag."</a>" ."</br>" ;
      }
      ?>"; }

      function nexos(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=200 ; $pag++) {

        echo "<a href='http://impresa.nexos.com.mx/files/mobile/".$pag.".jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;

      }
      ?>"; }

      function forbes(){
          document.getElementById("caja").innerHTML="<?php

      for ($pag=1; $pag <=200 ; $pag++) {

        echo "<a href='https://dnp6aggxo9vfh.cloudfront.net/data/6731/1491948700/jpg/".$pag.".jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
      }
      ?>"; }



        function juarez(){
          document.getElementById("caja").innerHTML="<?php


          ?>"; }


// ***************************************************************************************** usa *****************************************************************************************
      function usa(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1047".$date."00000000001001&page=1&paper=A3' target='_blank' >THE WASHINGTON POST</a>" ."</br>" ;
          echo "<a href='http://www.nytimes.com/images/".$año."/".$mes."/".$dia."/nytfrontpage/scan.pdf' target='_blank' >THE NEW YORK TIMES</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8108".$date."00000000001001&page=1&paper=A3' target='_blank' >THE CITIZENS´ VOICE</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8539".$date."00000000001001&page=1&paper=A3' target='_blank' >REPUBLICAN HERALD</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1995".$date."00000000001001&page=1&paper=A3' target='_blank' >THE DAY</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8234".$date."00000000001001&page=1&paper=A3' target='_blank' >THE ATLANTA JOURNAL-CONSTITUTION</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1012".$date."00000000001001&page=1&paper=A3' target='_blank' >ARIZONA REPUBLIC</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7089".$date."00000000001001&page=1&paper=A3' target='_blank' >TAMPA BAY TIMES</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9huk".$date."00000000001001&page=1&paper=A3' target='_blank' >DAILY NEWS STARKVILLE</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1288".$date."00000000001001&page=1&paper=A3' target='_blank' >STAR TRIBUNE</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9d76".$date."00000000001001&page=1&paper=A3' target='_blank' >santa fe neews mexican</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7376".$date."00000000001001&page=1&paper=A3' target='_blank' >SPRINGFIELD NEWS-SUN</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9b80".$date."00000000001001&page=1&paper=A3' target='_blank' >JOURNAL SENTINEL|MILWAUKEE WISCONSIN</a>" ."</br>";
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9gcx".$date."00000000001001&page=1&paper=A3' target='_blank' >MANTECA BULLETIN</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1313".$date."00000000001001&page=1&paper=A3' target='_blank' >PITTSBURGH POST-GAZETTE</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7068".$date."00000000001001&page=1&paper=A3' target='_blank' >ORLANDO SENTINEL</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9fbh".$date."00000000001001&page=1&paper=A3' target='_blank' >loanlding neews</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1075".$date."00000000001001&page=1&paper=A3' target='_blank' >REVIEW-JOURNAL|LAS VEGAS</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7374".$date."00000000001001&page=1&paper=A3' target='_blank' >JOURNAL-NEWS</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1084".$date."00000000001001&page=1&paper=A3' target='_blank' >HOUSTON CHRONICLE</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2078".$date."00000000001001&page=1&paper=A3' target='_blank' >LA OPINION</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9166".$date."00000000001001&page=1&paper=A3' target='_blank' >EL DORADO NEWS-TIMES</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=e804".$date."00000000001001&page=1&paper=A3' target='_blank' >EL DIARIO DE EL PASO</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2075".$date."00000000001001&page=1&paper=A3' target='_blank' >EL DIARIO</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=9g59".$date."00000000001001&page=1&paper=A3' target='_blank' >escalon times</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8525".$date."00000000001001&page=1&paper=A3' target='_blank' >DAILY FREEMAN</a>" ."</br>";
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7330".$date."00000000001001&page=1&paper=A3' target='_blank' >DAYTON DAILY NEWS</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8524".$date."00000000001001&page=1&paper=A3' target='_blank' >DAILY TIMES</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1594".$date."00000000001001&page=1&paper=A3' target='_blank' >cherooke conty herald</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1221".$date."00000000001001&page=1&paper=A3' target='_blank' >SUN TIMES|CHICAGO</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1586".$date."00000000001001&page=1&paper=A3' target='_blank' >call houn times</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1016".$date."00000000001001&page=1&paper=A3' target='_blank' >AUSTIN AMERICAN-STATESMAN</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1055".$date."00000000001001&page=1&paper=A3' target='_blank' >CHICAGO TRIBUNE</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1152".$date."00000000001001&page=1&paper=A3' target='_blank' >USA TODAY</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1369".$date."00000000001001&page=1&paper=A3' target='_blank' >ALBUQUERQUE JOURNAL</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1116".$date."00000000001001&page=1&paper=A3' target='_blank' >THE SUN|BALTIMORE</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1074".$date."00000000001001&page=1&paper=A3' target='_blank' >ARKANSAS DEMOCRAT|GAZETTE</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1245".$date."00000000001001&page=1&paper=A3' target='_blank' >NEW YORK POST</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1156".$date."00000000001001&page=1&paper=A3' target='_blank' >LOS ANGELES TIMES</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1024".$date."00000000001001&page=1&paper=A3' target='_blank' >DAILY NEWS</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1021".$date."00000000001001&page=1&paper=A3' target='_blank' >USA TODAY</a>" ."</br>";
          ?>"; }
          // ***************************************************************************************** canada *****************************************************************************************

          function canada(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=6225".$date."00000000001001&page=1&paper=A3' target='_blank' >veinticuatro horas toronto</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2573".$date."00000000001001&page=1&paper=A3' target='_blank' >veinticuatro horas montreal</a>" ."</br>";
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2624".$date."00000000001001&page=1&paper=A3' target='_blank' >the solay</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1131".$date."00000000001001&page=1&paper=A3' target='_blank' >ottawa citicen</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1893".$date."00000000001001&page=1&paper=A3' target='_blank' >the globe and mail</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1000".$date."00000000001001&page=1&paper=A3' target='_blank' >vancuver shout</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1006".$date."00000000001001&page=1&paper=A3' target='_blank' >national post</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2527".$date."00000000001001&page=1&paper=A3' target='_blank' >the journal montreal</a>" ."</br>" ;
          ?>"; }

          // ***************************************************************************************** argentina *****************************************************************************************

          function argentina(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2008".$date."00000000001001&page=1&paper=A3' target='_blank' >olé</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2260".$date."00000000001001&page=1&paper=A3' target='_blank' >la nacion</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2009".$date."00000000001001&page=1&paper=A3' target='_blank' >clarin</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2010".$date."00000000001001&page=1&paper=A3' target='_blank' >la razon</a>" ."</br>" ;
          ?>"; }

          // ***************************************************************************************** alemania *****************************************************************************************

          function alemania(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=3035".$date."00000000001001&page=1&paper=A3' target='_blank' >der tagesspiegel</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=3021".$date."00000000001001&page=1&paper=A3' target='_blank' >hamburger morgen post</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=3012".$date."00000000001001&page=1&paper=A3' target='_blank' >heinische post</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=3190".$date."00000000001001&page=1&paper=A3' target='_blank' >abentdzeitumg muchen</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=3133".$date."00000000001001&page=1&paper=A3' target='_blank' >hna kassemite</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=3035".$date."00000000001001&page=1&paper=A3' target='_blank' >der tagesspiegel</a>" ."</br>" ;
          ?>"; }

          // ***************************************************************************************** reino Unido *****************************************************************************************

          function reinoUnido(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1545".$date."00000000001001&page=1&paper=A3' target='_blank' >the guardian</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1048".$date."00000000001001&page=1&paper=A3' target='_blank' >theily mail</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1043".$date."00000000001001&page=1&paper=A3' target='_blank' >theily expres</a>" ."</br>" ;
          ?>"; }

          // ***************************************************************************************** francia *****************************************************************************************

        function francia(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2909".$date."00000000001001&page=1&paper=A3' target='_blank' >veinte minutes</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2526".$date."00000000001001&page=1&paper=A3' target='_blank' >le figaro</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2505".$date."00000000001001&page=1&paper=A3' target='_blank' >aujourdphui en france</a>" ."</br>" ;
          ?>"; }

          // ***************************************************************************************** china *****************************************************************************************

          function china(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7650".$date."00000000001001&page=1&paper=A3' target='_blank' >china dayli</a>" ."</br>" ;
          ?>"; }

          // ***************************************************************************************** australia *****************************************************************************************

          function australia(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1835".$date."00000000001001&page=1&paper=A3' target='_blank' >eral sum</a>" ."</br>" ;
          echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1120".$date."00000000001001&page=1&paper=A3' target='_blank' >tyhe daily telegram</a>" ."</br>" ;
          ?>"; }



          function publimetro(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='https://rm.metrolatam.com/pdf/".$año."/".$mes."/".$dia."/".$año."".$mes."".$dia."_publimetro.pdf' target='_blank' >DF</a>" ."</br>" ;
          echo "<a href='https://rm.metrolatam.com/pdf/".$año."/".$mes."/".$dia."/".$año."".$mes."".$dia."_guadalajara.pdf' target='_blank' >GDL</a>" ."</br>" ;
          echo "<a href='https://rm.metrolatam.com/pdf/".$año."/".$mes."/".$dia."/".$año."".$mes."".$dia."_monterrey.pdf' target='_blank' >MTY</a>" ."</br>" ;
          echo "<a href='https://rm.metrolatam.com/pdf/".$año."/".$mes."/".$dia."/".$año."".$mes."".$dia."_morelia.pdf' target='_blank' >MORELIA</a>" ."</br>" ;
          echo "<a href='https://rm.metrolatam.com/pdf/".$año."/".$mes."/".$dia."/".$año."".$mes."".$dia."_leon.pdf' target='_blank' >LEON</a>" ."</br>" ;
          echo "<a href='https://rm.metrolatam.com/pdf/".$año."/".$mes."/".$dia."/".$año."".$mes."".$dia."_puebla.pdf' target='_blank' >PUEBLA</a>" ."</br>" ;
          echo "<a href='https://rm.metrolatam.com/pdf/".$año."/".$mes."/".$dia."/".$año."".$mes."".$dia."_merida.pdf' target='_blank' >MERIDA</a>" ."</br>" ;
          ?>"; }

          function porno(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://xvideos.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://xhamster.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://xnxx.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://pornhub.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://redtube.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://youporn.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://snapdo.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://livejasmin.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://youjizz.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://tube8.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://dmm.co.jp' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://cam4.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://hardsextube.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://e-hentai.org' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://beeg.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://2ch.net' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://kickass.to' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://myfreecams.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://imagefap.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://chaturbate.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://4chan.org' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://drtuber.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://adnxs.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://webalta.ru' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://abril.com.br' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://lxxx.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://largeporntube.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://adultfriendfinder.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://porn.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://perfectgirls.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://xtube.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://nuvid.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://nudevista.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://video-one.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://porntube.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://bravotube.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://yourlust.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://fucked-tube.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://spankwire.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://adam4adam.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://motherless.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://pornerbros.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://batepapo.uol.com.br' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://4tube.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://sunporno.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://eroprofile.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://say-move.org' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://streamcloud.eu' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://pornmd.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://keezmovies.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://h2porn.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://contenko.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://xhamstercams.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://pornhublive.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://ryushare.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://alphaporno.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://anysex.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://adult-empire.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://brazzers.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://sambaporno.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://claro-search.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://tubegalore.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://videosexarchive.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://exhentai.org' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://tnaflix.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://redtubelive.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://vporn.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://fakku.net' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://anitube.se' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://pornoxo.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://freeones.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://youjizzlive.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://petardas.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://woozworld.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://literotica.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://dojki.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://manhunt.net' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://ashemaletube.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://ultrasurf.us' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://gayromeo.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://liveinternet.ru' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://roulettebotplus.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://pornsharía.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://rarbg.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://extremetube.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://dmm.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://juicyads.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://hellporn.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://gonzoxxxmovies.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://cerdas.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://slutload.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://dafiti.com.br' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://exposedwebcams.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://Dlsite.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://cliphunter.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://xdating.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://asg.to' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://super.cz' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://ah-me.com' target='_blank' >click</a>" ."</br>" ;
          echo "<a href='http://fapdu.com' target='_blank' >click</a>" ."</br>" ;
          ?>"; }


          function sintesis(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://www.sintesisdigital.com.mx:8383/".$dia."".$mes."".$año."_AHGO_01.pdf' target='_blank' >HIDALGO</a>" ."</br>" ;
          echo "<a href='http://www.sintesisdigital.com.mx:8383/".$dia."".$mes."".$año."_APUE_01.pdf' target='_blank' >PUEBLA</a>" ."</br>" ;
          echo "<a href='http://www.sintesisdigital.com.mx:8383/".$dia."".$mes."".$año."_ATLAX_01.pdf' target='_blank' >TLAXCALA</a>" ."</br>" ;
          ?>"; }

          function elMananaDeValles(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='http://elmananadevalles.com.mx/principal/articulos/hemeroteca/mes/ver-pdf.php?id=".$dia."".$meses["$mes"]."".$año.".pdf' target='_blank' >EDICION</a>" ."</br>" ;
          echo "<a href='http://elmananadevalles.com.mx/principal/articulos/hemeroteca/2019.php' target='_blank' >EMEROTECA 2019</a>" ."</br>" ;
          ?>"; }


          function twp(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=10472019122000000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function newYork(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1245".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function simonDice(){
          document.getElementById("caja").innerHTML="<?php
         echo "<a href='http://192.168.3.39/juego/SimonDice.html' target='_blank' >Simon Dice</a>" ."</br>" ;
      ?>"; }

      function pressdisplayMexico(){
          document.getElementById("caja").innerHTML="<?php
         echo "<a href='http://192.168.3.39/1/mexico.php' target='_blank' >Listado de mexico</a>" ."</br>" ;
      ?>"; }

      function pressdisplayEstadosUnidos(){
          document.getElementById("caja").innerHTML="<?php
         echo "<a href='http://192.168.3.39/1/estadosUnidos.php' target='_blank' >Listado de usa</a>" ."</br>" ;
      ?>"; }

      function pressdisplayAlemania(){
          document.getElementById("caja").innerHTML="<?php
         echo "<a href='http://192.168.3.39/1/alemania.php' target='_blank' >Listado de alemania</a>" ."</br>" ;
      ?>"; }

      function pressdisplayCanada(){
          document.getElementById("caja").innerHTML="<?php
         echo "<a href='http://192.168.3.39/1/canada.php' target='_blank' >Listado de canada</a>" ."</br>" ;
      ?>"; }

      function pressdisplayFrancia(){
          document.getElementById("caja").innerHTML="<?php
         echo "<a href='http://192.168.3.39/1/francia.php' target='_blank' >Listado de francia</a>" ."</br>" ;
      ?>"; }

      function pressdisplayHolanda(){
          document.getElementById("caja").innerHTML="<?php
         echo "<a href='http://192.168.3.39/1/holanda.php' target='_blank' >Listado de holanda</a>" ."</br>" ;
      ?>"; }

      function listaDePaises(){
          document.getElementById("caja").innerHTML="<?php
         echo "<a href='http://192.168.3.39/1/listaDePaises/listaDePaises.html' target='_blank' >Listado de paises</a>" ."</br>" ;
      ?>"; }

      function journal_news(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7374".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function palmbeach(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=7757".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function citicenvoice(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8108".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function losangelestimes(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=200 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1156".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function houstoncronicle(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=150 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=10842019121900000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function thedallasmorningnews(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=200 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1151".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function themercurypa(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=8484".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function chicagotribune(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=150 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=1055".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function laopinionla(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=100 ; $pag++) {
         echo "<a href='http://www.pressdisplay.com/pressdisplay/es/services/OnlinePrintHandler.ashx?issue=2078".$date."00000000001001&page=".$pag."&paper=A3' target='_blank' >Pag,".$pag."</a>" ."</br>" ;
         }
      ?>"; }

      function diario_de_morelos(){
          document.getElementById("caja").innerHTML="<?php

          for ($pag=1; $pag <=12 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='https://www.diariodemorelos.com/noticias/edicionImpresa/Virtual/".$año."//".$mes."_Junio/Edi_".$dia."-".$mes."-".$año."/Primera/docs/Primera_0".$pag.".pdf' target='_blank' >A.".$pag."</a>" ."</br>" ;
      }
        if ($pag>=10 and $pag<=99) {
          echo "<a href='https://www.diariodemorelos.com/noticias/edicionImpresa/Virtual/".$año."//".$mes."_Junio/Edi_".$dia."-".$mes."-".$año."/Primera/docs/Primera_".$pag.".pdf' target='_blank' >A.".$pag."</a>" ."</br>" ;
        }
      }

      for ($pag=1; $pag <=8 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='https://www.diariodemorelos.com/noticias/edicionImpresa/Virtual/".$año."//".$mes."_Mayo/Edi_".$dia."-".$mes."-".$año."/Pasion/docs/Pasion_0".$pag.".pdf' target='_blank' >B.".$pag."</a>" ."</br>" ;
        }
        if ($pag>=10 and $pag<=99) {
          echo "<a href='https://www.diariodemorelos.com/noticias/edicionImpresa/Virtual/".$año."//".$mes."_Mayo/Edi_".$dia."-".$mes."-".$año."/Pasion/docs/Pasion_".$pag.".pdf' target='_blank' >B.".$pag."</a>" ."</br>" ;
        }
      }

      for ($pag=1; $pag <=4 ; $pag++) {
        if ($pag>=1 and $pag<10) {
          echo "<a href='https://www.diariodemorelos.com/noticias/edicionImpresa/Virtual/".$año."//".$mes."_Mayo/Edi_".$dia."-".$mes."-".$año."/Encuentros/docs/Encuentros_0".$pag.".pdf' target='_blank' >C.".$pag."</a>" ."</br>" ;
        }
        if ($pag>=10 and $pag<=99) {
          echo "<a href='https://www.diariodemorelos.com/noticias/edicionImpresa/Virtual/".$año."//".$mes."_Mayo/Edi_".$dia."-".$mes."-".$año."/Encuentros/docs/Encuentros_".$pag.".pdf' target='_blank' >C.".$pag."</a>" ."</br>" ;
        }
      }


      ?>"; }

      function basta(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=50 ; $pag++)
            {
                echo "<a href='https://s3.amazonaws.com/eid-grupocanton/ediciondigital/".$año."/".$mes."/".$dia."/basta/files/mobile/".$pag.".jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
            }
      ?>"; }

      function campecheHoy(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=40   ; $pag++)
            {
                echo "<a href='https://s3.amazonaws.com/eid-grupocanton/ediciondigital/".$año."/".$mes."/".$dia."/campeche/files/mobile/".$pag.".jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;

            }


      ?>"; }


      function tabascohoy(){
          document.getElementById("caja").innerHTML="<?php
          for ($pag=1; $pag <=60 ; $pag++)
            {
                echo "<a href='https://s3.amazonaws.com/eid-grupocanton/ediciondigital/".$año."/".$mes."/".$dia."/tabascohoy/files/mobile/".$pag.".jpg' target='_blank' >pag".$pag."</a>" ."</br>" ;
            }
      ?>"; }

      function lucesDelSiglo(){
          document.getElementById("caja").innerHTML="<?php
          echo "<a href='https://lucesdelsiglo.com.mx/hemeroteca' target='_blank'>PDF</a>" ."</br>" ;
          ?>"; }

      function PGJ(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='http://192.168.3.154/external/services/mail/pgjcdmx/exportPgjcdmx.php?p=TVE9PQ==&f=".$año."-".$mes."-".$dia."' target='_blank' >Primeras</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/external/services/mail/pgjcdmx/exportPgjcdmx.php?p=T1E9PQ==&f=".$año."-".$mes."-".$dia."' target='_blank' >Ciudad</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/external/services/mail/pgjcdmx/exportPgjcdmx.php?p=TkE9PQ==&f=".$año."-".$mes."-".$dia."' target='_blank' >Cartones</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/external/services/mail/pgjcdmx/ochoColumnas/' target='_blank' >Ocho Columnas</a>" ."</br>" ;
        ?>"; }

        function genteYpoder(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='http://www.diariogenteypoder.com/PDF/".$año."".$mes."".$dia.".pdf' target='_blank' >pdf</a>" ."</br>" ;
        ?>"; }

        function laUnion(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='http://www.launion.com.mx/images/stories/portadas/periodico.pdf' target='_blank' >pdf</a>" ."</br>" ;
        ?>"; }

        function primerasPlanasGallito(){
        document.getElementById("caja").innerHTML="<?php
        echo "<a href='http://192.168.3.154/siscap.la/public/Periodicos/El%20Informador/".$año."-".$mes."-".$dia."/A_1.pdf' target='_blank' >pdf</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/siscap.la/public/Periodicos/El%20Mural/".$año."-".$mes."-".$dia."/A_1.pdf' target='_blank' >pdf</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/siscap.la/public/Periodicos/El%20milenio%20Guadalajara/".$año."-".$mes."-".$dia."/1_A.pdf#view=fit&scrollbar=0' target='_blank' >pdf</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/siscap.la/public/Periodicos/El%20Occidental/".$año."-".$mes."-".$dia."/1_A.pdf#view=fit&scrollbar=0' target='_blank' >pdf</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/siscap.la/public/Periodicos/El%20Diario%20de%20Guadalajara/2019-07-02/1_A.pdf#view=fit&scrollbar=0' target='_blank' >pdf</a>" ."</br>" ;
        echo "<a href='//UBUNTU/Periodicos/Meridiano de Vallarta/2019-07-02/A_1.pdf' target='_blank' >aaaa</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/siscap.la/public/Periodicos/La%20Cronica%20Jalisco/2019-07-02/1_A.pdf' target='_blank' >pdf</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/siscap.la/public/Periodicos/El%20Universal/2019-07-02/A_1.pdf' target='_blank' >paadf</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/siscap.la/public/Periodicos/El%20Reforma/2019-07-02/A_1.pdf' target='_blank' >pd00f</a>" ."</br>" ;
        echo "<a href='http://192.168.3.154/siscap.la/public/Periodicos/Excelsior/2019-07-02/A_1.pdf' target='_blank' >pd00f</a>" ."</br>" ;
        ?>"; }






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
