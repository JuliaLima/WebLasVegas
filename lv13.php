<html>
<head>
<meta name="viewport" content="width=device-width" /> <link rel="shortcut icon" href="img/icono.png">
<style>
/**/.negro {background-color: #000;color: #fff;
}
.amarillo{background-color: #f3c517;
color: #000;}
.enviar{
background-color: #f3c517 !important;
color: #000 !important;
}
.enviar: hover{
background-color: #f5c719 !important;
color: #333 !important;
}
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
header{
background: url(img/fondo.jpg) no-repeat center center fixed !important;
-webkit-background-size: cover !important;
-moz-background-size: cover !important;
-o-background-size: cover !important;
background-size: cover !important;
}
.button{
background: transparent !important;
}
.button:hover{
color: #f7c713 !important;
}
form > .button{	background-color: #f3c517 !important;
color: #000 !important;}
form > .button:hover{background-color: #fff !important;
color: #f00 !important;

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
.fondo {width: 100% !important;}

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
//<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="main.js"></script>
</head>
<body>
<header>
	<div class="contenedor">
		<div class="logo">
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
		</div>
		<nav class="menu" id="menu">
			<!-- MENU MEDIUM Y LARGE -->
			<div id="m" class="rows show-for-medium transparente">
				<div class="small-6 medium-2 large-2 columns transparente">
					<a href="index.php" class="button expanded seleccno">Inicio</a>
				</div>
				<div class="  small-6 medium-2 large-2 columns transparente">
					<a href="#servicios" class="button expanded seleccno">Servicios</a>
				</div>
				<div class="  small-6 medium-2 large-2 columns transparente">
					<a href="#slide" class="button expanded seleccno">Galería</a>
				</div>
				<div class="  small-6 medium-2 large-2 columns transparente">
					<a href="#ubicacion" class="button expanded seleccno">Ubicación</a>
				</div>
				<div class="  small-6 medium-2 large-2 columns transparente">
					<a href="#consulta" class="button expanded selecc">Consulta</a>
				</div>
				<div class="  small-6 medium-2 large-2 columns transparente">
					<a href="#features" class="button expanded seleccno"><i class="socialicon-facebook"></i></a>
				</div>
			</div>
			<!-- MENU SMALL -->
			<div class="rows show-for-small-only">
				<div class="small-12">
				<!--
				<div class="title-bar">
				<div class="title-bar-left">
				<button class="menu-icon" type="button"></button>
				<ul class="menu">
				<li><a href="#">Item 1A Loooong</a></li>
				<li><a href='#'> Item 1 sub</a></li>
				</ul>
				<span class="title-bar-title"></span>
				</div>
				</div>
				-->
				<ul class="dropdown menu" data-dropdown-menu>
				<li><a>Item 1</a>
					<ul class="menu">
						<li><a href="#">Item 1A Loooong</a></li>
						<li><a href='#'> Item 1 sub</a>
							<ul class='menu'>
								<li><a href='#'>Item 1 subA</a></li>
								<li><a href='#'>Item 1 subB</a></li>
								<li><a href='#'> Item 1 sub</a>
									<ul class='menu'>
										<li><a href='#'>Item 1 subA</a></li>
										<li><a href='#'>Item 1 subB</a></li>
									</ul>
								</li>
								<li><a href='#'> Item 1 sub</a>
									<ul class='menu'>
										<li><a href='#'>Item 1 subA</a></li>
									</ul>
								</li>
							</ul>
						</li>
					<li><a href="#">Item 1B</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Item 2</a>
					<ul class="menu">
						<li><a href="#">Item 2A</a></li>
						<li><a href="#">Item 2B</a></li>
					</ul>
				</li>
					<li><a href="#">Item 3</a></li>
					<li><a href='#'>Item 4</a></li>
				</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
<div class="fondo amarillo">
<div class="contenedor">
<!-- CUERPO -->
<!-- SERVICIOS -->
<a name="servicios"></a>
<div class="row">
<div class="small-12 columns amarillo">
<div class="row"><div class="small-9  small-centered columns">
<h2 class="centrar">Servicios</h2>
<h4 class="centrar">Hotel Las vegas ofrece los siguientes servicios para que su estadía en nuestra casa sea de su agrado</h4>
</div></div>
<br />
<div class="row"><div class="small-10  small-centered columns">
<i class="fa fa-coffee fa-2x"></i> Desayuno
<br />
<i class="fa fa-wifi fa-2x"></i> WiFi en todo el Hotel
<br />
<i class="fa fa-life-saver fa-2x"></i> Piscina climatizada
<br />
<i class="fa fa-info-circle fa-2x"></i> Atención al público las 24 hs.
<br />
<i class="fa fa-desktop fa-2x"></i> Television por cable en todas las habitaciones
</div></div>
</div>

</div>
</div>
</div>

<div class="fondo negro">
<div class="contenedor">
<!-- GALERIA -->
<div class="row negro">
<div class="large-12 columns">
<?php include ("slide.php"); ?>
</div>

</div>
</div>
</div>

<div class="fondo amarillo">
<div class="contenedor">
<!-- UBICACION -->
<a name="ubicacion"></a>
<div class="row amarillo">
<div class="large-12 columns centrar">
<h3 >UBICACION</h3>
<div class="flex-video widescreen">
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13620.47755545939!2d-64.49739810676529!3d-31.41083656084015!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1452375197931" width="1000" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<h6 class="centrar"> Ameghino 9 (Frente al Cucú) - Villa Carlos Paz<br />Coordenadas GPS Latitud:-31.414213 Longuitud: -64.5022314</h6>
</div>

</div>
</div>
</div>

<div class="fondo negro">
<div class="contenedor">
<!-- CONSULTA -->
<a name="consulta"></a>
<div class="row negro">
<div class="small-12 medium-9 columns small-centered centrar">
<h3>CONTACTO</h3><h6>Ante cualquier inquitud, compplete el formulario de consulta, o<br /> comunicarse a (03541)429453 a al (03541)1524555770</h6>

</div>
</div>
<form method="post" action="">

<div class="row negro tblanco">
<div class="small-12 medium-6 columns small-centered medium-centered">

<label class="tblanco">Nombre y Apellido<input type="text" name="nombre"></label>
<label class="tblanco">Dirección de e-mail<input type="email" name="email"></label>
<label class="tblanco">Asunto<input type="text" name="asunto"></label>
<label class="tblanco">Mensaje<textarea name="mensaje"></textarea></label>
<button type="button" onclick="cargarContenidoReloj('enviar1.php')" class="alert button float-right">Mandar</button>
<!--<input type="submit" class="button float-" value="Enviar">-->

</div>
</div>
<div class="row amarillo tblanco">

<div id='contenido' class="small-10 medium-5 large-5 columns small-centered medium-centered">

</div>
<div class="small-2 medium-1 large-1 columns small-centered medium-centered">

</div>

</div>
</form>



</div><!-- FIN CONTENEDOR 2 -->
</div>



</body>
<script type='text/javascript'>
    // Funcion para cargar un contenido en un div
    function cargarContenido(pagina)
    {
        // cargamos la pagina pagina.html en el div contenido
        $("#contenido").load(pagina);
    }
    // Funcion para cargar un contenido en un div mostrando un reloj de arena
    function cargarContenidoReloj(pagina)
    {
        // cargamos el icono en el div donde ira el contenido
        $("#contenido").html("<img src='clock.gif' class='clock' border='0' />");
        // cargamos la pagina pagina3.php en el div contenido
        $("#contenido").load(pagina);
    }
    </script>
<!-- Compressed JavaScript -->
<script src="<?php echo $rutaFoundation;?>js/foundation.min.js"></script>
<script src="<?php echo $rutaFoundation;?>js/foundation.sticky.js"></script>
<script src="<?php echo $rutaFoundation;?>js/foundation.core.js"></script>

<script>
function menu(){
	var id = '#m';
    $(id).css('height', $($(id).children()[0]).css('height'));
}
$(document).ready(menu)
</script>

</html>