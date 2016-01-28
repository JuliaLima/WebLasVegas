<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="img/icono.png">
<!-- ÑÑÑÑ -->
<?PHP
if (isset($_GET["hot"])) {
	$hot = $_GET["hot"];}
else {
	$hot = 1;}
include ("variables.php");
// PAGINA DE INICIO INDEX
$index='index.php';
$color1=$color1[$hot];
$color2=$color2[$hot];
$color3=$color3[$hot];
$color4=$color4[$hot];
$color5=$color5[$hot];
?>

<title id="titulo"><?php echo $hotel[$hot]; ?></title>
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<style>

tbody tr:nth-child(even) {background-color: transparent !important;}

/**/
.negro {background-color: #292222; color: #fff; border: none !important;}
.amarillo{background-color: #f3c517; color: #000; border: none !important;}
.rojo{background-color: #9b1b20; color: #fff; border: none !important;}
.blanco{background-color: #fff; color: #000;}
.tamarillo{color: #f3c517;}
.tblanco{color: #fff;}
.tnegro{color: #000; z-index:10;}
.trojo{color: #9b1b20;}

.margensup {height:50px;}
.enviar{
	background-color: #f3c517 !important;
	color: #000 !important;
}
.enviar: hover{
	background-color: #f5c719 !important;
	color: #333 !important;
}
.enviar1{
	background-color: #000 !important;
	color: #f3c517 !important;
}
.enviar1: hover{
	background-color: #9b1b20 !important;
	color: #333 !important;
}

.expande{width:100%; height: 4px;}
.centrar{text-align:center;}
.seleccionado{
	color: #f3c517;
	background-color: #000;
}
.noseleccionado{
	color: #000;
	background-color: #f3c517;
}

header{
	margin-top: -1.5em;

	background: url(img/<?php echo $fondo[$hot]; ?>)  no-repeat center center fixed !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
}
@media screen and (min-width: 500px){
	header {min-height: 100vh;}
}
	
@media handheld {
header{
	min-height: 40vh;
}
}

.vcentrar{
	margin-top:calc(40vh - 140px);
	text-align: center;
}
.button{
	background: #fff !important;/**/
	color: #000;
}
.menu a{color:#000;
background: #fff !important;
}
.button:hover{
	color: #f7c713 !important;
}
form > .enviar{
	background-color: #f3c517 !important;
	color: #000 !important;
}
form > .enviar:hover{
	background-color: #fff !important;
	color: #f00 !important;
}
form > .enviar1{
	background-color: #000 !important;
	color: #f3c517 !important;
}
form > .enviar1:hover{
	background-color: #f00 !important;
	color: #fff !important;
}

.selecc{
	color: #f7c713 !important;
	border-bottom-style: solid !important;
	border-bottom-color: #f7c713 !important;
	border-bottom-width: 5px !important;
}
.seleccno{
	color: #fff;
}
.transparente{background: transparent !important;}
.contenedor {
	//width: 100% !important;
	max-width: 1000px;
	margin:auto !important;
}
.fondo {
	width: 100% !important;
	min-height: 80vh;
}
.fondo1 {
	width: 100% !important;
}

.fondo2 {
	width: 100% !important;
	min-height: 100vh;
}

nav{
	position: fixed;
	width: 100vw;
	z-index: 1000;
	box-shadow:0px 4px 3px rgba(0,0,0,.5);
}

#flechitaHeader{
	color: white;
	text-align: center;
	padding-top: 30vh;
	text-shadow: 0px 1px 1px rgba(0, 0, 0, 1);
}
.margenTituloSmall{padding-top:3em;}
.fijo {
  position: fixed;
  bottom: 0;
  //right: 0;
  width: 100%;
  padding: 1rem;
}
</style>
<?php
$rutaFoundation='foundation-6/';

?>
<!-- Compressed CSS -->
<link rel="stylesheet" href="<?php echo $rutaFoundation;?>css/foundation.min.css">
<link rel="stylesheet" href="css/general_foundicons.css">
<link rel="stylesheet" href="css/social_foundicons.css">
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/app.css">

<link rel="stylesheet" href="estilos1.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="main.js"></script>
<!--
<script src="js/blur.js"></script>
-->


</head>
<body>

<header class="show-for-medium">

	<nav class="menu" id="menu">
			<!-- MENU MEDIUM Y LARGE -->
			<div id="m" class="rows show-for-medium blanco">
				<div class="medium-2 large-2 columns blanco">
					<a href="<?php echo $index;?>" class="button expanded seleccno">INICIO</a>
				</div>
				<div class="medium-2 large-2 columns blanco">
					<a href="#servicios" class="button expanded seleccno">SERVICIOS</a>
				</div>
				<div class="medium-2 large-2 columns blanco">
					<a href="#slide" class="button expanded seleccno">GALER&Iacute;A</a>
				</div>
				<div class="medium-2 large-2 columns blanco">
					<a href="#ubicacion" class="button expanded seleccno">UBICACI&Oacute;N</a>
				</div>
				<div class="medium-2 large-2 columns blanco">
					<a href="#consulta" class="button expanded seleccno">CONSULTA</a>
				</div>
				<div class="medium-2 large-2 columns blanco">
					<a href="https://www.facebook.com/Hotel-Las-Vegas-157509644277461/?ref=aymt_homepage_panel" class="button expanded seleccno"><i class="socialicon-facebook"></i></a>
				</div>
			</div>
		</nav>
	</div>
	
	<div class="contenedor">
		<div class="logo">
			<!-- CABECERA -->
			<div class="row">
				<div class="large-12 columns vcentrar">
					<!--<p align="center"></p>-->
					<?php
					echo '<br /><img src="img/'.$logo[$hot].'">';
					?>
					
				</div>
			</div>
			<div id="flechitaHeader" class="show-for-medium">
					<h5>Bienvenido!</h5>
					<a href="#servicios" class="tblanco"><i class="fa fa-chevron-down fa-2x"></i></a>
				</div>
		</div>
	</div>
</header>
<header class="show-for-small-only" style="min-heigt:60vh !important;">
<nav class="menu" id="menu">
			<!-- MENU SMALL -->
			<div id="ms" class="rows blanco">
				<div class="small-12">
					<div class="small-2 columns blanco">
					<a href="<?php echo $index;?>" class="button expanded seleccno" style="margin-left:-0.4687rem"><i class="fa fa-home" style="    margin-left: -.5em;"></i></a>
				</div>
				<div class="  small-2 columns blanco">
					<a href="#servicios" class="button expanded seleccno" style="margin-left:-0.4687rem"><i class="fa fa-info-circle" style="    margin-left: -.5em;"></i></a>
				</div>
				<div class="  small-2 columns blanco">
					<a href="#slide" class="button expanded seleccno" style="margin-left:-0.4687rem"><i class="fa fa-camera" style="    margin-left: -.5em;"></i></a>
				</div>
				<div class="  small-2 columns blanco">
					<a href="#ubicacion" class="button expanded seleccno" style="margin-left:-0.4687rem"><i class="fa fa-map-marker" style="    margin-left: -.5em;"></i></a>
				</div>
				<div class="  small-2 columns blanco">
					<a href="#consulta" class="button expanded seleccno" style="margin-left:-0.4687rem"><i class="fa fa-envelope" style="    margin-left: -.5em;"></i></a>
				</div>
				<div class="  small-2 columns blanco">
					<a href="https://www.facebook.com/Hotel-Las-Vegas-157509644277461/?ref=aymt_homepage_panel" class="button expanded seleccno" style="margin-left:-0.4687rem"><i class="fa fa-facebook-square" style="    margin-left: -.5em;"></i></a>
				</div>
				</div>
			</div>
		</nav>
			<div class="contenedor">
		<div class="logo">
			<!-- CABECERA -->
			<div class="row">
				<div class="large-12 columns vcentrar">
					<!--<p align="center"></p>-->
					<?php
					echo '<br /><img src="img/'.$logo[$hot].'">';
					?>
					
				</div>
			</div>
		</div>
	</div>
</header>
<a name="servicios"></a>
<div class="fondo <?php echo $color1; ?>">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>
<!-- CUERPO -->
<!-- SERVICIOS -->

<div class="row">
<div class="small-12 columns <?php echo $color1; ?>">
<div class="row"><div class="small-9  small-centered columns">
<!--<br class="margensup"/><br class="margensup"/>-->
<h1 class="centrar">SERVICIOS</h1>
<h5 class="centrar">El hotel ofrece los siguientes servicios para que su estadía en nuestra casa sea de su agrado</h5>
</div></div>
<br />
<!-- servicios en tabla -->
<div class="row medium-unstack">
	<div class="medium-6 columns">
		<table class="tablaservicios">
			<tbody class="<?php echo $color1; ?>">
				<tr>
					<th>
						<h4>En el hotel</h4>
					</th>
				</tr>
				<?php
					for ($i=0; $i < count(($serv[$hot]['general'])); $i++){
						echo '<tr><td class="<?php echo $color1; ?>"><i class="fa '.$serv[$hot]['general'][$i][1].' fa-3x '.$color3.'"></i></td>'.
						'<td>'.$serv[$hot]['general'][$i][0].'</td></tr>';
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="medium-6 columns">
		<table class="tablaservicios">
			<tbody class="<?php echo $color1; ?>">
				<tr>
					<th>
						<h4>Habitaciones</h4>
					</th>
				</tr>
				<?php
					for ($i=0; $i < count(($serv[$hot]['habitaciones'])); $i++){
						echo '<tr><td class="<?php echo $color1; ?>"><i class="fa '.$serv[$hot]['habitaciones'][$i][1].' fa-3x '.$color3.'"></i></td>'.
						'<td>'.$serv[$hot]['habitaciones'][$i][0].'</td></tr>';
					}
				?>
			</tbody>
		</table>
	</div>

</div></div>

</div>

</div>
</div>
</div>
<a name="slide"></a>
<div class="fondo <?php echo $color2; ?>">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>
<!-- GALERIA -->

<div class="row <?php echo $color2; ?>">
<div class="large-12 columns">
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="owl/owl-carousel/owl.carousel.css">
<!-- Default Theme -->
<link rel="stylesheet" href="owl/owl-carousel/owl.theme.css">


<!-- Include js plugin -->
<script src="owl/owl-carousel/owl.carousel.js"></script>


  
  <style type="text/css">
body {
	background-color: #000;
	width: 100%;
	height: 100%;	
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	margin: 0;
	padding: 0;
	border: 0;
}
.marco1{
	width: 100%;
	height: 253px;
	margin: 0 auto;
	background-color: #fff;
	padding: 5px;
	}
.marco2{
	width: 334px;
	height: 273px;
	margin: 0 auto;
	background-color: #fff;
	padding: 5px;
	}
.marco2-1{
	width: 324px;
	height: 285px;
	margin: 0 auto;
	//background-color: #fff;
	//padding: 5px;
	}
.marco2-2{ //marco de la imagen
	width: 324px;
	height: 253px;
	margin: 0 auto;
	background-color: #fff;
	padding: 5px;
	}
	
.marco3{
	width: 324px;
	height: 63px;
	margin: 0 auto;
	background-color: #fff;
	padding: 5px;
	}
.marconav{
	//width: 120px;
	//margin-left: 10px;
	//margin-right: 5px;
	background-color: #fff;
		padding: 2px;
	
}
.marconav1{

	background-color: transparent
		padding: 2px;
	
}
.centrar{text-align:center;
}

</style>

<!-- <div class="row">
	<div class="twelve column" >-->
	<!--<br class="margensup"/><br class="margensup"/>-->
	<h1 class="centrar">GALERÍA DE FOTOS</h1>
		<div id="sync1" class="owl-carousel">
		<!-- slide grande -->
		<?php
			for ($i=0; $i < count(($foto[$hot])); $i++){
				echo '<div class="item"><span class="show-for-medium"><img src="img/lv'.$hot.'/'.$foto[$hot][$i].'"></span><span class="show-for-small-only"><img src="img/lv'.$hot.'/cel/'.$foto[$hot][$i].'"></span></div>';
				/*<br />'.$i.'-'.$text[$hot][$i].''*/
			}
		?>
		</div>
		<!-- slide menu -->
		<div id="sync2" class="owl-carousel">
			<?php
				for ($i=0; $i < count($foto[$hot]); $i++){
					echo '<div class="item"><span class="show-for-medium"><img src="img/lv'.$hot.'/'.$foto[$hot][$i].'"></span><span class="show-for-small-only"><img src="img/lv'.$hot.'/cel/'.$foto[$hot][$i].'"></span></div>';
				}
			?>
		</div>
<!--	</div>
</div>-->

<style>
#sync1 .item{
	background: transparent; //transparent #077;
	padding: 0px 0px;
	margin: 0px;
	color: #FFF;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	text-align: center;
}
#sync2 .item{
	background: #C9C9C9;
	padding: 10px 0px;
	margin: 5px;
	color: #FFF;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	text-align: center;
	cursor: pointer;
}
#sync2 .item h1{
  font-size: 18px;
}
#sync2 .synced .item{
  background: #f3c517;
}
</style>

<script>
$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");

  sync1.owlCarousel({
	singleItem : true,
	slideSpeed : 1000,
	navigation: false,
	
	//navigationText : ["anterior","siguiente"],
	rewindNav : true,
	
	pagination:false,
	afterAction : syncPosition,
	responsiveRefreshRate : 200,

	

  });

  sync2.owlCarousel({
	items : 15,
	itemsDesktop      : [1199,10],
	itemsDesktopSmall     : [979,10],
	itemsTablet       : [768,8],
	itemsMobile       : [479,4],
	pagination:true,
	responsiveRefreshRate : 100,
	afterInit : function(el){
	  el.find(".owl-item").eq(0).addClass("synced");
	}
  });

  function syncPosition(el){
	var current = this.currentItem;
	$("#sync2")
	  .find(".owl-item")
	  .removeClass("synced")
	  .eq(current)
	  .addClass("synced")
	if($("#sync2").data("owlCarousel") !== undefined){
	  center(current)
	}

  }

  $("#sync2").on("click", ".owl-item", function(e){
	e.preventDefault();
	var number = $(this).data("owlItem");
	sync1.trigger("owl.goTo",number);
  });

  function center(number){
	var sync2visible = sync2.data("owlCarousel").owl.visibleItems;

	var num = number;
	var found = false;
	for(var i in sync2visible){
	  if(num === sync2visible[i]){
		var found = true;
	  }
	}

	if(found===false){
	  if(num>sync2visible[sync2visible.length-1]){
		sync2.trigger("owl.goTo", num - sync2visible.length+2)
	  }else{
		if(num - 1 === -1){
		  num = 0;
		}
		sync2.trigger("owl.goTo", num);
	  }
	} else if(num === sync2visible[sync2visible.length-1]){
	  sync2.trigger("owl.goTo", sync2visible[1])
	} else if(num === sync2visible[0]){
	  sync2.trigger("owl.goTo", num-1)
	}
  }

});
</script>

<script>
$(document).ready(function() {
 
  $("#owl-example").owlCarousel();
 
});
</script>

<br class="margensup"/><br class="margensup"/>
</div>

</div>
</div>
</div>
<a name="ubicacion"></a>
<div class="fondo <?php echo $color1; ?>">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>
<!-- UBICACION -->

<div class="row <?php echo $color1; ?>">
<div class="large-12 columns centrar">
<!--<br class="margensup"/><br class="margensup"/>-->
<h1>UBICACI&Oacute;N</h1> </br>
<div class="flex-video widescreen">
<iframe src="<?php echo $mapa[$hot];?>" width="1000" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<h6 class="centrar" style="padding-top: 2em; padding-bottom: 3em"> <?php echo $direccion[$hot];?> - Villa Carlos Paz<br />Coordenadas GPS Latitud:<?php echo $coordenadax[$hot];?> Longuitud: <?php echo $coordenaday[$hot];?></h6>
</div>

</div>
</div>
</div>
<a name="consulta"></a>
<div class="fondo2 <?php echo $color2; ?>">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>
<!-- CONSULTA -->

<div class="row <?php echo $color2; ?>">
<div class="small-12 medium-9 columns small-centered centrar">
<!--<br class="margensup"/><br class="margensup"/>-->
<h1>CONSULTA</h1><h5>Ante cualquier inquietud, complete el formulario de consulta, o<br /> comun&iacute;quese al <?php echo $telefono[$hot];?> o al (0351)15 245 5770</h5>

</div>
</div>
<div class="row <?php echo $color2; ?>">
<div class="small-12 medium-6 columns small-centered medium-centered">
<form method="post" action="enviar.php">

<label class="<?php echo $color5; ?>">Nombre y Apellido<input type="text" name="nombre"></label>
<label class="<?php echo $color5; ?>">Direcci&oacute;n de e-mail<input type="email" name="email"></label>
<label class="<?php echo $color5; ?>">Asunto<input type="text" name="asunto"></label>
<label class="<?php echo $color5; ?>">Mensaje<textarea name="mensaje"></textarea></label>
<input type="hidden" name="hot" value="<?php echo $hot; ?>">
<input type="submit" class="button float-right <?php echo $color4; ?>" value="Enviar">
<span id='contenido'></span>
<!--<button type="button" onclick="cargarContenido('enviar1.php')" class="alert button float-right">Enviar</button>-->
    

</form>

</div>
</div>
</div><!-- FIN CONTENEDOR 2 -->
</div>



</body>
<script type='text/javascript'>
    // Funcion para cargar un contenido en un div
    function cargarContenido(pagina)
    {
		$("#contenido").html("Enviando . . .");
        // cargamos la pagina pagina.html en el div contenido
        $("#contenido").load(pagina);
    }
    // Funcion para cargar un contenido en un div mostrando un reloj de arena

    </script>
<!-- Compressed JavaScript -->
<script src="<?php echo $rutaFoundation;?>js/foundation.min.js"></script>
<!--
<script src="<?php echo $rutaFoundation;?>js/foundation.sticky.js"></script>
<script src="<?php echo $rutaFoundation;?>js/foundation.core.js"></script>
-->
<script>
function menu(){
	var id = '#m';
    $(id).css('height', $($(id).children()[0]).css('height'));
	//var id1 = '#ms';
    //$(id1).css('height', $($(id1).children()[1]).css('height'));
}
$(document).ready(menu)

</script>

</html>