<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="img/icono.png">
<!-- ÑÑÑÑ -->


<title id="titulo">Grupo Las Vegas</title>
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<style>
.negro {background-color: #292222;}
.amarillo{background-color: #f3c517;}
.tamarillo{color: #f3c517;}
.tblanco{color: #fff;}
.expande{width:100%; height: 4px;}
.centrar{text-align:center;
}

.fondo1{
background: url(img/lv1/lv1-001.jpg) no-repeat center center fixed !important;
-webkit-background-size: cover !important;
-moz-background-size: cover !important;
-o-background-size: cover !important;
background-size: cover !important;
}
.fondo2{
background: url(img/lv2/lv2-001.jpg) no-repeat center center fixed !important;
-webkit-background-size: cover !important;
-moz-background-size: cover !important;
-o-background-size: cover !important;
background-size: cover !important;
}
.fondo3{
background: url(img/lv3/lv3-001.jpg) no-repeat center center fixed !important;
-webkit-background-size: cover !important;
-moz-background-size: cover !important;
-o-background-size: cover !important;
background-size: cover !important;
}

.fijo {
  position: fixed;
  bottom: 0;
  //right: 0;
  width: 100%;

}
.radio { 
/* Firefox 3.5 */
-moz-border-radius-topleft: 0px;
-moz-border-radius-topright: 60px 120px;
-moz-border-radius-bottomright: 0px;
-moz-border-radius-bottomleft: 60px 120px;
 
/* Google Chrome y Safari */
-webkit-border-top-left-radius: 0px;
-webkit-border-top-right-radius: 60px 120px;
-webkit-border-bottom-right-radius: 0px;
-webkit-border-bottom-left-radius: 60px 120px;
 
/* CSS3 (Opera 10.5 e Internet Explorer 9) */
border-top-left-radius: 0px;
border-top-right-radius: 60px 120px;
border-bottom-right-radius: 0px;
border-bottom-left-radius: 60px 120px;
}

.radio1 { 
/* Firefox 3.5 */
-moz-border-radius-topleft: 20px;
-moz-border-radius-topright: 20px;
-moz-border-radius-bottomright: 20px;
-moz-border-radius-bottomleft: 20px;
 
/* Google Chrome y Safari */
-webkit-border-top-left-radius: 20px;
-webkit-border-top-right-radius: 20px;
-webkit-border-bottom-right-radius: 20px;
-webkit-border-bottom-left-radius: 20px;
 
/* CSS3 (Opera 10.5 e Internet Explorer 9) */
border-top-left-radius: 20px;
border-top-right-radius: 20px;
border-bottom-right-radius: 20px;
border-bottom-left-radius: 20px;
}
.margen{margin-top: 2em;
margin-bottom: 2em;}

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




</head>
<body class="negro" id="body" onload="cuerpo();">
<header id="header">

<!-- CABECERA -->
<div class="row">
	<div class="large-12 columns tblanco"><br />
	<p align="center">
		<?php
			echo '<img src="img/hotelLasVegas.png">';
		?>
	</p>
	</div>
		
</div>

<!-- SEPARADOR -->
<div class="row">
	<div class="small-12 columns">
		<img src="img/lineas.png" class="expande">
	</div>
</div>

<!-- CUERPO -->
<div class="row">
	<div class="small-12 small-centered large-7 columns centrar tblanco">
	
	
		<!--<h1>Bienvenidos</h1>
		<h5>Aquí podrá encontrar hoteles con la mejor atención y excelente ubicación en Villa Carlos Paz. No dude en consultarnos, estamos a su disposición!</h5>
	</div>-->

</div>
</header>
<div class="row show-for-medium" id="cuerpo">
	<a href="lv-05.php?hot=1"><div class="small-12 medium-4 columns centrar fondo1 radio" id="col1">
		<img src="img/logoLasVegas1.png" id="im1">
	</div></a>
	<a href="lv-05.php?hot=2"><div class="small-12 medium-4 columns centrar fondo2 radio" id="col2">
		<img src="img/logoLasVegas2.png" id="im2">
	</div></a>
	<a href="lv-05.php?hot=3"><div class="small-12 medium-4 columns centrar fondo3 radio" id="col3">
		<img src="img/logoRefugioDeLuna.png" id="im3">
	</div></a>
</div>
<div class="row show-for-small-only">
	<a href="lv-05.php?hot=1"><div class="small-12 columns centrar fondo1 radio1">
		<img src="img/logoLasVegas1.png" class="margen">
	</div></a>
	<a href="lv-05.php?hot=2"><div class="small-12 columns centrar fondo2 radio1">
		<img src="img/logoLasVegas2.png" class="margen">
	</div></a>
	<a href="lv-05.php?hot=3"><div class="small-12 columns centrar fondo3 radio1">
		<img src="img/logoRefugioDeLuna.png" class="margen">
	</div></a>
</div>
<footer class="fijo amarillo show-for-medium" id="footer"> 
<!-- PIE-->
<div class="row">
	<div class="large-12 columns text-center" >
		Hotel Las Vegas - Villa Carlos paz - Año 2016<br />Cel: (0351) 152455770 - email: info@hotellasvegas.com.ar
	</div>
</div>
</footer>
<footer class="amarillo show-for-small-only" id="footer"> 
<!-- PIE-->
<div class="row">
	<div class="large-12 columns text-center" >
		Hotel Las Vegas - Villa Carlos paz - Año 2016<br />Cel: (0351) 152455770 - email: info@hotellasvegas.com.ar
	</div>
</div>
</footer>


</body>
<!-- Compressed JavaScript -->
<script src="<?php echo $rutaFoundation;?>js/foundation.min.js"></script>
<!--
<script src="<?php echo $rutaFoundation;?>js/foundation.sticky.js"></script>
<script src="<?php echo $rutaFoundation;?>js/foundation.core.js"></script>
-->
<script>
function cuerpo(){

alturabody=(document.getElementById("body").clientHeight);
alturaheader=(document.getElementById("header").clientHeight);
alturafooter=(document.getElementById("footer").clientHeight);
altura=(alturabody - alturaheader - alturafooter);
alturapx=altura+'px';
document.getElementById("cuerpo").style.height= alturapx ;
document.getElementById("col1").style.height= alturapx ;
document.getElementById("col2").style.height= alturapx ;
document.getElementById("col3").style.height= alturapx ;

alturaim1=document.getElementById("im1").clientHeight;
document.getElementById("im1").style.marginTop= ((altura - alturaim1)/2)+'px';
alturaim2=document.getElementById("im2").clientHeight;
document.getElementById("im2").style.marginTop= ((altura - alturaim2)/2)+'px';
alturaim3=document.getElementById("im3").clientHeight;
document.getElementById("im3").style.marginTop= ((altura - alturaim3)/2)+'px';


}

</script>

</html>