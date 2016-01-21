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
	<br class="margensup"/><br class="margensup"/>
	<h1 class="centrar">GALERÍA DE FOTOS</h1>
		<div id="sync1" class="owl-carousel">
		<!-- slide grande -->
		<?php
			for ($i=0; $i < count(($foto[$hot])); $i++){
				echo '<div class="item"><span class="show-for-medium"><img src="img/lv'.$hot.'/'.$foto[$hot][$i].'"></span><span class="show-for-small-only"><img src="img/lv'.$hot.'/cel/'.$foto[$hot][$i].'"></span><br />'.$i.'-'.$text[$hot][$i].'</div>';
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
