<html>
<head>
<meta name="viewport" content="width=device-width" /> <link rel="shortcut icon" href="img/icono.png">
<style>
/**/.negro {background-color: #000;color: #fff;
}
.amarillo{background-color: #f3c517;
color: #000;}
.tamarillo{color: #f3c517;}
.tblanco{color: #fff;}
.tnegro{color: #000;}
.expande{width:100%; height: 4px;}
.centrar{text-align:center;}
.seleccionado{
	color: #f3c517;
	background-color: #000;}
.noseleccionado{
	color: #000;
	background-color: #f3c517;}
.fijo {
  position: fixed;
  bottom: 0;
  //right: 0;
  width: 100%;
  //background-color: white;
}
body{
background: url(img/fondo.jpg) no-repeat center center fixed !important;
-webkit-background-size: cover !important;
-moz-background-size: cover !important;
-o-background-size: cover !important;
background-size: cover !important;
}
.button {
    background: transparent !important;
}
.button:hover{

	filter: alpha(opacity=30) !important; /* internet explorer */
	-khtml-opacity: 0.3 !important;      /* khtml, version anterior de safari */
	-moz-opacity: 0.3 !important;       /* firefox, mozilla, netscape */
	opacity: 0.3 !important;           /* safari, chrome, opera */
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)" !important; /*internet explorer 8 - gracias Andres */ 
	background-color: #FFFFdd !important;
	color: #066 !important;
	}
.selecc{
	border-bottom-style: solid !important;
	border-bottom-color: #f3c517 !important;
	border-bottom-width: 5px !important;	
}
.transparente{background: transparent !important;}
</style>
<?php
$rutaFoundation='foundation-6/';

?>
<!-- Compressed CSS -->
<link rel="stylesheet" href="<?php echo $rutaFoundation;?>css/foundation.min.css">
<link rel="stylesheet" href="css/general_foundicons.css">
<link rel="stylesheet" href="css/social_foundicons.css">
<link rel="stylesheet" href="css/app.css">
</head>
<body>
<!-- 
<!-- CABECERA -->
<div class="row">
	<div class="large-12 columns">
		<p align="center">
			<?php
				echo '<img src="img/logoLasVegas1.png">';
			?>
		</p>
	</div>
</div>
<div class="row">
<div class="columns small-12 " data-sticky-container>
<div class="sticky" data-sticky>
    <img class="thumbnail" src="img/menu.jpg">
  </div>
		<!-- MENU MEDIUM Y LARGE -->
		<div class="rows show-for-medium transparente">
		<div class="small-6 medium-4 large-2 columns transparente">
			<a href="index.php" class="button expanded">Inicio</a>
		</div>
		<div class="  small-6 medium-4 large-2 columns">
			<a href="#servicios" class="button expanded">Servicios</a>
			</div>
		<div class="  small-6 medium-4 large-2 columns">
			<a href="#slide" class="button expanded">Galería</a>
			</div>
		<div class="  small-6 medium-4 large-2 columns">
			<a href="#ubicacion" class="button expanded">Ubicación</a>
			</div>
		<div class="  small-6 medium-4 large-2 columns">
			<a href="#consulta" class="button expanded selecc">Consulta</a>
			</div>
		<div class="  small-6 medium-4 large-2 columns">
			<a href="#features" class="button expanded"><i class="socialicon-facebook"></i></a>
		</div>
		</div>
		<!-- MENU SMALL -->
		<div class="rows show-for-small-only">
		<div class="small-12">
		<div class="title-bar">
		  <div class="title-bar-left">
			<button class="menu-icon" type="button"></button>
			<span class="title-bar-title"></span>
		  </div>
		</div>
		</div>
		</div>
<!-- CUERPO -->
<!-- SERVICIOS -->
<a name="servicios"></a>
<div class="row">
	<div class="large-12 columns negro">
		<br />SERVICIOS<br /><br /><br /><br /><br />
	</div>
	
</div>
<!-- GALERIA -->
<div class="row amarillo">
	<div class="large-12 columns">
		<?php include ("slide.php"); ?>
	</div>
	
</div>
<!-- UBICACION -->
<a name="ubicacion"></a>
<div class="row negro">
	<div class="large-12 columns">
		<br />UBICACION<br /><br /><br /><br />
	</div>
	
</div>
<!-- CONSULTA -->
<a name="consulta"></a>
<div class="row amarillo">
	<div class="large-12 columns">
		<br />CONSULTA<br /><br /><br /><br />
	</div>
</div>
</div></div>
<br /><br /><br /><br /><br />
<div class="fijo"></div>
<!-- SEPARADOR -->
<div class="row">
	<div class="small-12 columns">
		<img src="img/lineas.png" class="expande">
	</div>
</div>
<!-- PIE -->
<div class="row">
	<div class="large-12 columns tblanco text-center" >
		Hotel Las Vegas - Villa Carlos paz - Año 2016<br />Cel: (0351) 152455770 - email: info@hotellasvegas.com.ar
	</div>
</div>
<?php
?>

</body>

<!-- Compressed JavaScript -->
<script src="<?php echo $rutaFoundation;?>js/foundation.min.js"></script>
<script src="<?php echo $rutaFoundation;?>js/foundation.sticky.js"></script>
<script src="<?php echo $rutaFoundation;?>js/foundation.core.js"></script>
</html>