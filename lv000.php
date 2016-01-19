<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>lv000</title>
</head>
<body>
&lt;html&gt;<br>
&lt;head&gt;&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-16" /&gt;<br>
&lt;link rel="shortcut icon" href="img/icono.png"&gt;<br>
<br>
&lt;!-- ÑÑÑÑ --&gt;<br>
&lt;?PHP<br>
if (isset($_GET["hot"])) {<br>
	$hot = $_GET["hot"];}<br>
else {<br>
	$hot = 1;}<br>
include ("variables.php");<br>
// PAGINA DE INICIO INDEX<br>
$index='index-1.php';<br>
$color1=$color1[$hot];<br>
$color2=$color2[$hot];<br>
$color3=$color3[$hot];<br>
$color4=$color4[$hot];<br>
?&gt;<br>
<br>
&lt;title id="titulo"&gt;&lt;?php echo $hotel[$hot]; ?&gt;&lt;/title&gt;<br>
&lt;meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/&gt;<br>
<br>
&lt;style&gt;<br>
/**/<br>
.negro {background-color: #000; color: #fff;}<br>
.amarillo{background-color: #f3c517; color: #000;}<br>
.rojo{background-color: #9b1b20; color: #fff;}<br>
.blanco{background-color: #fff; color: #000;}<br>
.tamarillo{color: #f3c517;}<br>
.tblanco{color: #fff;}<br>
.tnegro{color: #000; z-index:10;}<br>
.trojo{color: #9b1b20;}<br>
<br>
<br>
.margensup {height:50px;}<br>
.enviar{<br>
background-color: #f3c517 !important;<br>
color: #000 !important;<br>
}<br>
.enviar: hover{<br>
background-color: #f5c719 !important;<br>
color: #333 !important;<br>
}<br>
.enviar1{<br>
background-color: #000 !important;<br>
color: #f3c517 !important;<br>
}<br>
.enviar1: hover{<br>
background-color: #9b1b20 !important;<br>
color: #333 !important;<br>
}<br>
<br>
.expande{width:100%; height: 4px;}<br>
.centrar{text-align:center;}<br>
.seleccionado{<br>
color: #f3c517;<br>
background-color: #000;}<br>
.noseleccionado{<br>
color: #000;<br>
background-color: #f3c517;}<br>
.fijo {<br>
position: fixed;<br>
bottom: 0;<br>
//right: 0;<br>
width: 100%;<br>
//background-color: white;<br>
}<br>
header{<br>
	min-height: 100vh;<br>
background: url(img/&lt;?php echo $fondo[$hot]; ?&gt;)  no-repeat center center fixed !important;<br>
-webkit-background-size: cover !important;<br>
-moz-background-size: cover !important;<br>
-o-background-size: cover !important;<br>
background-size: cover !important;<br>
}<br>
.button{<br>
background: transparent !important;/**/<br>
color: #000;<br>
}<br>
.menu a{color:#000;}<br>
.button:hover{<br>
color: #f7c713 !important;<br>
}<br>
form &gt; .enviar{	background-color: #f3c517 !important;<br>
color: #000 !important;}<br>
form &gt; .enviar:hover{background-color: #fff !important;<br>
color: #f00 !important;}<br>
<br>
form &gt; .enviar1{	background-color: #000 !important;<br>
color: #f3c517 !important;}<br>
form &gt; .enviar1:hover{background-color: #f00 !important;<br>
color: #fff !important;<br>
}<br>
/**/<br>
.selecc{<br>
color: #f7c713 !important;<br>
border-bottom-style: solid !important;<br>
border-bottom-color: #f7c713 !important;<br>
border-bottom-width: 5px !important;<br>
}<br>
.seleccno{<br>
color: #fff;<br>
}<br>
.transparente{background: transparent !important;}<br>
.contenedor {<br>
//width: 100% !important;<br>
max-width: 1000px;<br>
margin:auto !important;<br>
}<br>
.fondo {width: 100% !important;<br>
		min-height: 100vh;}<br>
<br>
&lt;/style&gt;<br>
&lt;?php<br>
$rutaFoundation='foundation-6/';<br>
<br>
?&gt;<br>
&lt;!-- Compressed CSS --&gt;<br>
&lt;link rel="stylesheet" href="&lt;?php echo $rutaFoundation;?&gt;css/foundation.min.css"&gt;<br>
&lt;link rel="stylesheet" href="css/general_foundicons.css"&gt;<br>
&lt;link rel="stylesheet" href="css/social_foundicons.css"&gt;<br>
&lt;link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css"&gt;<br>
&lt;link rel="stylesheet" href="css/app.css"&gt;<br>
<br>
&lt;link rel="stylesheet" href="estilos1.css"&gt;<br>
&lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt;<br>
&lt;script src="main.js"&gt;&lt;/script&gt;<br>
&lt;/head&gt;<br>
&lt;body&gt;&lt;header&gt;<br>
	&lt;div class="contenedor"&gt;<br>
		&lt;div class="logo"&gt;<br>
			&lt;!-- CABECERA --&gt;<br>
			&lt;div class="row"&gt;<br>
				&lt;div class="large-12 columns"&gt;<br>
					&lt;p align="center"&gt;<br>
					&lt;?php<br>
					echo '&lt;br /&gt;&lt;img src="img/logoLasVegas'.$hot.'.png"&gt;';<br>
					?&gt;<br>
					&lt;/p&gt;<br>
				&lt;/div&gt;<br>
			&lt;/div&gt;<br>
		&lt;/div&gt;<br>
		&lt;nav class="menu" id="menu"&gt;<br>
			&lt;!-- MENU MEDIUM Y LARGE --&gt;<br>
			&lt;div id="m" class="rows show-for-medium transparente"&gt;<br>
				&lt;div class="medium-2 large-2 columns transparente"&gt;<br>
					&lt;a href="&lt;?php echo $index;?&gt;" class="button expanded seleccno"&gt;Inicio&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class="medium-2 large-2 columns transparente"&gt;<br>
					&lt;a href="#servicios" class="button expanded seleccno"&gt;Servicios&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class="medium-2 large-2 columns transparente"&gt;<br>
					&lt;a href="#slide" class="button expanded seleccno"&gt;Galería&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class="medium-2 large-2 columns transparente"&gt;<br>
					&lt;a href="#ubicacion" class="button expanded seleccno"&gt;Ubicación&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class="medium-2 large-2 columns transparente"&gt;<br>
					&lt;a href="#consulta" class="button expanded seleccno"&gt;Consulta&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class="medium-2 large-2 columns transparente"&gt;<br>
					&lt;a href="#features" class="button expanded seleccno"&gt;&lt;i class="socialicon-facebook"&gt;&lt;/i&gt;&lt;/a&gt;<br>
				&lt;/div&gt;<br>
			&lt;/div&gt;<br>
			&lt;!-- MENU SMALL --&gt;<br>
			&lt;div id="ms" class="rows show-for-small-only"&gt;<br>
				&lt;div class="small-12"&gt;<br>
					&lt;div class="small-2 columns tnegro"&gt;<br>
					&lt;a href="&lt;?php echo $index;?&gt;" class="button expanded seleccno"&gt;&lt;i class="fa fa-home"&gt;&lt;/i&gt;&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class="  small-2 columns transparente"&gt;<br>
					&lt;a href="#servicios" class="button expanded seleccno"&gt;&lt;i class="fa fa-info-circle"&gt;&lt;/i&gt;&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class="  small-2 columns transparente"&gt;<br>
					&lt;a href="#slide" class="button expanded seleccno"&gt;&lt;i class="fa fa-camera"&gt;&lt;/i&gt;&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class="  small-2 columns transparente"&gt;<br>
					&lt;a href="#ubicacion" class="button expanded seleccno"&gt;&lt;i class="fa fa-map-marker"&gt;&lt;/i&gt;&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class="  small-2 columns transparente"&gt;<br>
					&lt;a href="#consulta" class="button expanded seleccno"&gt;&lt;i class="fa fa-envelope"&gt;&lt;/i&gt;&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class="  small-2 columns transparente"&gt;<br>
					&lt;a href="#features" class="button expanded seleccno"&gt;&lt;i class="fa fa-facebook-square"&gt;&lt;/i&gt;&lt;/a&gt;<br>
				&lt;/div&gt;<br>
				&lt;/div&gt;<br>
			&lt;/div&gt;<br>
		&lt;/nav&gt;<br>
	&lt;/div&gt;<br>
&lt;/header&gt;<br>
&lt;div class="fondo &lt;?php echo $color1; ?&gt;"&gt;<br>
&lt;div class="contenedor"&gt;<br>
&lt;!-- CUERPO --&gt;<br>
&lt;!-- SERVICIOS --&gt;<br>
&lt;a name="servicios"&gt;&lt;/a&gt;<br>
&lt;div class="row"&gt;<br>
&lt;div class="small-12 columns &lt;?php echo $color1; ?&gt;"&gt;<br>
&lt;div class="row"&gt;&lt;div class="small-9  small-centered columns"&gt;<br>
&lt;br class="margensup"/&gt;&lt;br class="margensup"/&gt;<br>
&lt;h2 class="centrar"&gt;SERVICIOS&lt;/h2&gt;<br>
&lt;h4 class="centrar"&gt;Hotel Las vegas ofrece los siguientes servicios para que su estadía en nuestra casa sea de su agrado&lt;/h4&gt;<br>
&lt;/div&gt;&lt;/div&gt;<br>
&lt;br /&gt;<br>
&lt;div class="row"&gt;&lt;div class="small-10  small-centered columns"&gt;<br>
&lt;?php<br>
	for ($i=0; $i &lt; count(($serv[$hot])); $i++){<br>
		echo'&lt;i class="fa '.$serv[3][$i][1].' fa-2x '.$color3.'"&gt;&lt;/i&gt; '.$serv[3][$i][0].'&lt;br /&gt;';<br>
	}<br>
?&gt;<br>
&lt;/div&gt;&lt;/div&gt;<br>
&lt;/div&gt;<br>
<br>
&lt;/div&gt;<br>
&lt;/div&gt;<br>
&lt;/div&gt;<br>
<br>
&lt;div class="fondo &lt;?php echo $color2; ?&gt;"&gt;<br>
&lt;div class="contenedor"&gt;<br>
&lt;!-- GALERIA --&gt;<br>
&lt;a name="slide"&gt;&lt;/a&gt;<br>
&lt;div class="row &lt;?php echo $color2; ?&gt;"&gt;<br>
&lt;div class="large-12 columns"&gt;<br>
&lt;?php include ("slide.php"); ?&gt;<br>
&lt;/div&gt;<br>
<br>
&lt;/div&gt;<br>
&lt;/div&gt;<br>
&lt;/div&gt;<br>
<br>
&lt;div class="fondo &lt;?php echo $color1; ?&gt;"&gt;<br>
&lt;div class="contenedor"&gt;<br>
&lt;!-- UBICACION --&gt;<br>
&lt;a name="ubicacion"&gt;&lt;/a&gt;<br>
&lt;div class="row &lt;?php echo $color1; ?&gt;"&gt;<br>
&lt;div class="large-12 columns centrar"&gt;<br>
&lt;br class="margensup"/&gt;&lt;br class="margensup"/&gt;<br>
&lt;h2 &gt;UBICACI&amp;Oacute;N&lt;/h2&gt;<br>
&lt;div class="flex-video widescreen"&gt;<br>
&lt;iframe src="&lt;?php echo $mapa[$hot];?&gt;" width="1000" height="550" frameborder="0" style="border:0" allowfullscreen&gt;&lt;/iframe&gt;<br>
&lt;/div&gt;<br>
&lt;h6 class="centrar"&gt; &lt;?php echo $direccion[$hot];?&gt; - Villa Carlos Paz&lt;br /&gt;Coordenadas GPS Latitud:&lt;?php echo $coordenadax[$hot];?&gt; Longuitud: &lt;?php echo $coordenaday[$hot];?&gt;&lt;/h6&gt;<br>
&lt;/div&gt;<br>
<br>
&lt;/div&gt;<br>
&lt;/div&gt;<br>
&lt;/div&gt;<br>
<br>
&lt;div class="fondo &lt;?php echo $color2; ?&gt;"&gt;<br>
&lt;div class="contenedor"&gt;<br>
&lt;!-- CONSULTA --&gt;<br>
&lt;a name="consulta"&gt;&lt;/a&gt;<br>
&lt;div class="row &lt;?php echo $color2; ?&gt;"&gt;<br>
&lt;div class="small-12 medium-9 columns small-centered centrar"&gt;<br>
&lt;br class="margensup"/&gt;&lt;br class="margensup"/&gt;<br>
&lt;h2&gt;CONSULTA&lt;/h2&gt;&lt;h6&gt;Ante cualquier inquitud, complete el formulario de consulta, o&lt;br /&gt; comunicarse a &lt;?php echo $telefono[$hot];?&gt; o al (0351)15 245 55770&lt;/h6&gt;<br>
<br>
&lt;/div&gt;<br>
&lt;/div&gt;<br>
&lt;div class="row &lt;?php echo $color2; ?&gt;"&gt;<br>
&lt;div class="small-12 medium-6 columns small-centered medium-centered"&gt;<br>
&lt;form method="post" action="enviar.php"&gt;<br>
<br>
&lt;label class="tblanco"&gt;Nombre y Apellido&lt;input type="text" name="nombre"&gt;&lt;/label&gt;<br>
&lt;label class="tblanco"&gt;Direcci&amp;oacute;n de e-mail&lt;input type="email" name="email"&gt;&lt;/label&gt;<br>
&lt;label class="tblanco"&gt;Asunto&lt;input type="text" name="asunto"&gt;&lt;/label&gt;<br>
&lt;label class="tblanco"&gt;Mensaje&lt;textarea name="mensaje"&gt;&lt;/textarea&gt;&lt;/label&gt;<br>
<br>
&lt;input type="submit" class="button float-right &lt;?php echo $color4; ?&gt;" value="Enviar"&gt;<br>
&lt;span id='contenido'&gt;&lt;/span&gt;<br>
&lt;!--&lt;button type="button" onclick="cargarContenido('enviar1.php')" class="alert button float-right"&gt;Enviar&lt;/button&gt;--&gt;<br>
    <br>
<br>
&lt;/form&gt;<br>
<br>
&lt;/div&gt;<br>
&lt;/div&gt;<br>
&lt;/div&gt;&lt;!-- FIN CONTENEDOR 2 --&gt;<br>
&lt;/div&gt;<br>
<br>
<br>
<br>
&lt;/body&gt;<br>
&lt;script type='text/javascript'&gt;<br>
    // Funcion para cargar un contenido en un div<br>
    function cargarContenido(pagina)<br>
    {<br>
		$("#contenido").html("Enviando . . .");<br>
        // cargamos la pagina pagina.html en el div contenido<br>
        $("#contenido").load(pagina);<br>
    }<br>
    // Funcion para cargar un contenido en un div mostrando un reloj de arena<br>
<br>
    &lt;/script&gt;<br>
&lt;!-- Compressed JavaScript --&gt;<br>
&lt;script src="&lt;?php echo $rutaFoundation;?&gt;js/foundation.min.js"&gt;&lt;/script&gt;<br>
&lt;script src="&lt;?php echo $rutaFoundation;?&gt;js/foundation.sticky.js"&gt;&lt;/script&gt;<br>
&lt;script src="&lt;?php echo $rutaFoundation;?&gt;js/foundation.core.js"&gt;&lt;/script&gt;<br>
&lt;script&gt;<br>
function menu(){<br>
	var id = '#m';<br>
    $(id).css('height', $($(id).children()[0]).css('height'));<br>
	//var id1 = '#ms';<br>
    //$(id1).css('height', $($(id1).children()[1]).css('height'));<br>
}<br>
$(document).ready(menu)<br>
&lt;/script&gt;<br>
<br>
&lt;/html&gt;<br></body>
</html>
