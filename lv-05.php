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
$index='index-1.php';
$color1=$color1[$hot];
$color2=$color2[$hot];
$color3=$color3[$hot];
$color4=$color4[$hot];
?>

<title id="titulo"><?php echo $hotel[$hot]; ?></title>
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<style>

tbody tr:nth-child(even) {background-color: transparent !important;}

/**/
.negro {background-color: #000; color: #fff; border: none !important;}
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
	min-height: 80vh;
	background: url(img/<?php echo $fondo[$hot]; ?>)  no-repeat center center fixed !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
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
<script src="js/blur.js"></script>


</head>
<body><header>
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

		<nav class="menu" id="menu">
			<!-- MENU MEDIUM Y LARGE -->
			<div id="m" class="rows show-for-medium blanco">
				<div class="medium-2 large-2 columns blanco">
					<a href="<?php echo $index;?>" class="button expanded seleccno">Inicio</a>
				</div>
				<div class="medium-2 large-2 columns blanco">
					<a href="#servicios" class="button expanded seleccno">Servicios</a>
				</div>
				<div class="medium-2 large-2 columns blanco">
					<a href="#slide" class="button expanded seleccno">Galería</a>
				</div>
				<div class="medium-2 large-2 columns blanco">
					<a href="#ubicacion" class="button expanded seleccno">Ubicación</a>
				</div>
				<div class="medium-2 large-2 columns blanco">
					<a href="#consulta" class="button expanded seleccno">Consulta</a>
				</div>
				<div class="medium-2 large-2 columns blanco">
					<a href="#features" class="button expanded seleccno"><i class="socialicon-facebook"></i></a>
				</div>
			</div>
			<!-- MENU SMALL -->
			<div id="ms" class="rows show-for-small-only blanco">
				<div class="small-12">
					<div class="small-2 columns blanco">
					<a href="<?php echo $index;?>" class="button expanded seleccno"><i class="fa fa-home" style="    margin-left: -.5em;"></i></a>
				</div>
				<div class="  small-2 columns blanco">
					<a href="#servicios" class="button expanded seleccno"><i class="fa fa-info-circle" style="    margin-left: -.5em;"></i></a>
				</div>
				<div class="  small-2 columns blanco">
					<a href="#slide" class="button expanded seleccno"><i class="fa fa-camera" style="    margin-left: -.5em;"></i></a>
				</div>
				<div class="  small-2 columns blanco">
					<a href="#ubicacion" class="button expanded seleccno"><i class="fa fa-map-marker" style="    margin-left: -.5em;"></i></a>
				</div>
				<div class="  small-2 columns blanco">
					<a href="#consulta" class="button expanded seleccno"><i class="fa fa-envelope" style="    margin-left: -.5em;"></i></a>
				</div>
				<div class="  small-2 columns blanco">
					<a href="#features" class="button expanded seleccno"><i class="fa fa-facebook-square" style="    margin-left: -.5em;"></i></a>
				</div>
				</div>
			</div>
		</nav>
	</div>
</header>
<div class="fondo <?php echo $color1; ?>">
<div class="contenedor">
<!-- CUERPO -->
<!-- SERVICIOS -->
<a name="servicios"></a>
<div class="row">
<div class="small-12 columns <?php echo $color1; ?>">
<div class="row"><div class="small-9  small-centered columns">
<br class="margensup"/><br class="margensup"/>
<h2 class="centrar">SERVICIOS</h2>
<h4 class="centrar">Hotel Las vegas ofrece los siguientes servicios para que su estadía en nuestra casa sea de su agrado</h4>
</div></div>
<br />
<!-- servicios en tabla -->
<div class="row"><div class="small-10  small-centered columns">
<table class="tablaservicios">
<tbody class="<?php echo $color1; ?>">
<?php
	for ($i=0; $i < count(($serv[$hot])); $i++){
		echo'<tr  class="<?php echo $color1; ?>"><td><i class="fa '.$serv[3][$i][1].' fa-2x '.$color3.'"></i></td><td>'.$serv[3][$i][0].'</td></tr>';
	}
?>
</tbody>
</table>
</div></div>

</div>

</div>
</div>
</div>

<div class="fondo <?php echo $color2; ?>">
<div class="contenedor">
<!-- GALERIA -->
<a name="slide"></a>
<div class="row <?php echo $color2; ?>">
<div class="large-12 columns">
<?php include ("slide.php"); ?>
<br class="margensup"/><br class="margensup"/>
</div>

</div>
</div>
</div>

<div class="fondo <?php echo $color1; ?>">
<div class="contenedor">
<!-- UBICACION -->
<a name="ubicacion"></a>
<div class="row <?php echo $color1; ?>">
<div class="large-12 columns centrar">
<br class="margensup"/><br class="margensup"/>
<h2 >UBICACI&Oacute;N</h2>
<div class="flex-video widescreen">
<iframe src="<?php echo $mapa[$hot];?>" width="1000" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<h6 class="centrar" style="padding-top: 2em; padding-bottom: 3em"> <?php echo $direccion[$hot];?> - Villa Carlos Paz<br />Coordenadas GPS Latitud:<?php echo $coordenadax[$hot];?> Longuitud: <?php echo $coordenaday[$hot];?></h6>
</div>

</div>
</div>
</div>

<div class="fondo <?php echo $color2; ?>">
<div class="contenedor">
<!-- CONSULTA -->
<a name="consulta"></a>
<div class="row <?php echo $color2; ?>">
<div class="small-12 medium-9 columns small-centered centrar">
<br class="margensup"/><br class="margensup"/>
<h2>CONSULTA</h2><h6>Ante cualquier inquietud, complete el formulario de consulta, o<br /> comun&iacute;quese al <?php echo $telefono[$hot];?> o al (0351)15 245 55770</h6>

</div>
</div>
<div class="row <?php echo $color2; ?>">
<div class="small-12 medium-6 columns small-centered medium-centered">
<form method="post" action="enviar.php">

<label class="tblanco">Nombre y Apellido<input type="text" name="nombre"></label>
<label class="tblanco">Direcci&oacute;n de e-mail<input type="email" name="email"></label>
<label class="tblanco">Asunto<input type="text" name="asunto"></label>
<label class="tblanco">Mensaje<textarea name="mensaje"></textarea></label>

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
<script src="<?php echo $rutaFoundation;?>js/foundation.sticky.js"></script>
<script src="<?php echo $rutaFoundation;?>js/foundation.core.js"></script>
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