<?php $hoteles='lv.php'; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="img/icono.png">
<!-- ÑÑÑÑ -->


<title id="titulo">Grupo Las Vegas</title>
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<style>

body{
background: url(img/vcp.jpg) no-repeat center center fixed !important;
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
  padding: 1rem;
}
.fijo1 {
  position: fixed;
  bottom: -.4rem;
  //right: 0;
  width: 100%;
  padding: -2rem;
}

.margen{
	margin-top: 2em;
	margin-bottom: 2em;
}

span {
	/*border: white solid 2px;*/
	/*padding-top: 2.5rem;*/
	//margin: 3rem;
		text-shadow: 2px 2px 3px rgba(0, 0, 0, 1);
	//text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;

	color: #fff;
	//background-color: rgba(255, 255, 255, 0.5);
}

span:hover {
	color: #f3c517;
	//border-color: #f3c517;
	//background-color: rgba(0, 0, 0, 0.5);
	//text-shadow: 2px 2px 2px rgba(255, 255, 255, 1);
}

span i{
	text-align: center;
	padding-bottom: 1rem;
}

span h5{
	text-align: center;
	padding-top: 1.5rem;
}

span i:hover{
	color: #f3c517;
}

.margensup{
	margin-top: 1em;
	margin-bottom: 1em;
}

div h4{
	margin-top: 12vh;
	border-bottom: white dashed 1px;
	padding-bottom: 1rem;
}

div div p img{
	margin-top: 6vh;
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
<!--
<link rel="stylesheet" href="estilos1.css">
-->
<script src="http://code.jquery.com/jquery-latest.js"></script>




</head>
<body class="negro" id="body" onload="cuerpo();">
<header id="header">

<!-- CABECERA -->
<div class="row">
	<div class="small-12 columns tblanco show-for-medium"><br />
	<p align="center">
		<?php
			echo '<img src="img/hotelLasVegas.png">';
		?>
	</p>
	</div>
	
</div>

<!-- CUERPO -->
<div class="row">
	<div class="small-12 small-centered medium-7 columns centrar tblanco">
		<h4 class="show-for-medium">Seleccione el hotel que desee</h4>
		<h4 class="show-for-small-only" style="margin-top: 1em;">Seleccione el hotel que desee</h4>
	</div>

</div>
</header>
<div class="row show-for-medium" id="cuerpo">
	<div class="medium-2 columns">&nbsp;</div>
	<div class="medium-2 columns centrar" id="col1">
		<div id="im1">
		<a href="<?php echo $hoteles; ?>?hot=1"><span><i class="fa fa-h-square fa-5x tblanco centrar"><br /><h5>Las Vegas</h5></i></span></a>
		</div>
	</div>
	<div class="medium-1 columns">&nbsp;</div>
	<div class="medium-2 columns centrar" id="col2">
		<div id="im2">
		<a href="<?php echo $hoteles; ?>?hot=2"><span><i class="fa fa-h-square fa-5x tblanco centrar"><br /><h5>Las Vegas 2</h5></i></span></a>
		</div>
	</div>
	<div class="medium-1 columns">&nbsp;</div>
	<div class="medium-2 columns centrar " id="col3">
		<div id="im3">
		<a href="<?php echo $hoteles; ?>?hot=3"><span><i class="fa fa-h-square fa-5x tblanco centrar"><br /><h5>Refugio de Luna</h5></i></span></a>
		</div>
	</div>
	<div class="medium-2 columns">&nbsp;</div>
</div>

<div class="row show-for-small-only">
	<div class="small-12 columns centrar">
		<div class="margensup">
		<a href="<?php echo $hoteles; ?>?hot=1">
			<span>
				<i class="fa fa-h-square fa-5x tblanco centrar"></i>
				<br />
				<h5 style="padding-top: 0rem;">Las Vegas</h5>
			</span>
		</a>
		</div>
	</div>
	<div class="small-12 columns centrar">
		<div class="margensup">
		<a href="<?php echo $hoteles; ?>?hot=2"><span><i class="fa fa-h-square fa-5x tblanco centrar"></i><br /><h5 style="padding-top: 0rem;">Las Vegas 2</h5></span></a>
		</div>
	</div>
	<div class="small-12 columns centrar">
		<div class="margensup">
		<a href="<?php echo $hoteles; ?>?hot=3"><span><i class="fa fa-h-square fa-5x tblanco centrar"></i><br /><h5 style="padding-top: 0rem;">Refugio de Luna</h5></span></a>
		</div>
	</div>
	<div class="margensup">&nbsp;<br />&nbsp;<br />&nbsp;</div>
</div>

<footer class="fijo amarillo show-for-medium" id="footer"> 
<!-- PIE-->
<div class="row">
	<div class="medium-2 columns" >&nbsp;</div>
	<div class="medium-8 columns text-center" >
		Grupo Las Vegas - Villa Carlos paz - 2016<br />Cel: (0351) 152455770 - email: info@hotellasvegas.com.ar
	</div>
	<div class="medium-2 columns" >&nbsp;</div>
</div>

</footer>
<div class="row fijo1">
<div class="medium-2 columns" >&nbsp;</div>
<div class="medium-8 columns text-center" ></div>
	<div class="medium-2 columns text-center" ><a href="#"><h6><img src="img/isologo_4.png">&nbsp;<small><small style="color:#333;">Diseño&nbsp;Web</small></small></h6></a></div>
</div>
<footer class="amarillo show-for-small-only fijo"> 
<!-- PIE-->
<div class="row">
	<div class="small-12 columns text-center" >
		Grupo Las Vegas - Villa Carlos paz<br />Cel: (0351) 152455770<br />email: info@hotellasvegas.com.ar
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
//alert(alturabody+' -- '+alturaheader+' -- '+alturafooter+' -- '+altura+' -- '+alturaim1+' --- '+((altura - alturaim1 - 35)/2));

}

</script>

</html>