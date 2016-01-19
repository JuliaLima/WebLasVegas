<html>
<head>
<link rel="shortcut icon" href="img/icono.png">
<title> Grupo Las Vegas</title>
<style>
body{
background: url(img/fondo-index-1.jpg) no-repeat center center fixed !important;
-webkit-background-size: cover !important;
-moz-background-size: cover !important;
-o-background-size: cover !important;
background-size: cover !important;
}
.negro {background-color: #000;}
.amarillo{background-color: #f3c517;}
.tamarillo{color: #f3c517;}
.tblanco{color: #fff;}
.expande{width:100%; height: 4px;}
.centrar{text-align:center;
}

.fijo {
  position: fixed;
  bottom: 0;
  //right: 0;
  width: 100%;
  //background-color: white;
}

</style>
<?php
$rutaFoundation='foundation-6/';

?>
</head>
<!-- Compressed CSS -->
<link rel="stylesheet" href="css/app3.css">
<link rel="stylesheet" href="<?php echo $rutaFoundation;?>css/foundation.min.css">
<body class="negro">


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
	
	
		<h2>Bienvenidos</h2>
		<h4>Aquí podrá encontrar hoteles con la mejor atención y excelente ubicación en Villa Carlos Paz. No dude en consultarnos, estamos a su disposición!</h4>
	</div>

</div>
<div class="row">
	<div class="small-12 large-4 columns centrar">
		<a href="lv-05.php?hot=1"><img src="img/lasVegas1.png"></a>
	</div>
	<div class="small-12 large-4 columns centrar">
		<a href="lv-05.php?hot=2"><img src="img/lasVegas2.png"></a>
	</div>
	<div class="small-12 large-4 columns centrar">
		<a href="lv-05.php?hot=3"><img src="img/refugioDeLuna.png"></a>
	</div>
</div>
<!-- SEPARADOR-->
<div class="row">
<br/>
	<div class="small-12 columns">
		<img src="img/lineas.png" class="expande">
	</div>
</div> 
<!-- PIE-->
<div class="row">
	<div class="large-12 columns tblanco text-center" >
		<small>Hotel Las Vegas - Villa Carlos paz - Año 2016<br />Cel: (0351) 152455770 - email: info@hotellasvegas.com.ar</small>
	</div>
</div><!-- PIE
</div>-->
<?php




?>
</body>
<!-- Compressed JavaScript -->
<script src="<?php echo $rutaFoundation;?>js/foundation.min.js"></script>
</html>