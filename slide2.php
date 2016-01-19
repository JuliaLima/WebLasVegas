<html>
  <head>
  <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link rel="stylesheet" href="foundation-6/css/foundation.min.css">
  <link rel="stylesheet" href="css/general_foundicons.css">
  <link rel="stylesheet" href="css/social_foundicons.css">
  
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="owl/owl-carousel/owl.carousel.css">
<!-- Default Theme -->
<link rel="stylesheet" href="owl/owl-carousel/owl.theme.css">
<!--  jQuery 1.7+  -->
<script src="owl/assets/js/jquery-1.9.1.min.js"></script>
<!-- Include js plugin -->
<script src="owl/owl-carousel/owl.carousel.js"></script>

  <title>Galería Las Vegas</title>
  
  <style type="text/css">
body {
	background-color: #444;
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
<?php
$foto=array("lv3-001.jpg","lv3-002.jpg","lv3-003.jpg","lv3-004.jpg","lv3-005.jpg","lv3-006.jpg","lv3-007.jpg","lv3-008.jpg","lv3-009.jpg","lv3-010.jpg","lv3-011.jpg","lv3-012.jpg","lv3-013.jpg","lv3-014.jpg","lv3-015.jpg","lv3-016.jpg","lv3-017.jpg");
$text=array("lv3-001.jpg","lv3-002.jpg","lv3-003.jpg","lv3-004.jpg","lv3-005.jpg","lv3-006.jpg","lv3-007.jpg","lv3-008.jpg","lv3-009.jpg","lv3-010.jpg","lv3-011.jpg","lv3-012.jpg","lv3-013.jpg","lv3-014.jpg","lv3-015.jpg","lv3-016.jpg","lv3-017.jpg");
?>
</head>
<body>

<div class="row">
	<div class="twelve column" >
	<br />
	<h2 class="centrar">GALERÍA DE FOTOS</h2>
			<div id="sync1" class="owl-carousel">

			<?php
				for ($i=0; $i < count($foto); $i++){
					echo '<div class="item"><img src="img/lv3/'.$foto[$i].'"><br />'.$i.'-'.$text[$i].'</div>';
				}
			?>
		<!--		-->


		</div>
		<div id="sync2" class="owl-carousel">

			<?php
				for ($i=0; $i < count($foto); $i++){
					echo '<div class="item"><img src="img/lv3/'.$foto[$i].'"></div>';
				}
			?>
		<!--		-->


		</div>
	</div>
</div>
<div class="row">
	<div class="twelve column" >
	<br />
	<h2 class="centrar">GALERÍA DE FOTOS 2</h2>
			<div id="sync1" class="owl-carousel1">

			<?php
				for ($i=0; $i < count($foto); $i++){
					echo '<div class="item"><img src="img/lv3/'.$foto[$i].'"><br />'.$i.'-'.$text[$i].'</div>';
				}
			?>
		<!--		-->


		</div>
		<div id="sync2" class="owl-carousel1">

			<?php
				for ($i=0; $i < count($foto); $i++){
					echo '<div class="item"><img src="img/lv3/'.$foto[$i].'"></div>';
				}
			?>
		<!--		-->


		</div>
	</div>
</div>

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
	     sync1.owlCarousel1({
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
	    sync2.owlCarousel1({
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
	        function syncPosition(el){
        var current = this.currentItem;
        $("#sync2")
          .find(".owl-item")
          .removeClass("synced")
          .eq(current)
          .addClass("synced")
        if($("#sync2").data("owlCarousel1") !== undefined){
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
		
		var sync2visible = sync2.data("owlCarousel1").owl.visibleItems;

        var num = number;
        var found = false;
        for(var i in sync21visible){
          if(num === sync21visible[i]){
            var found = true;
          }
        }

        if(found===false){
          if(num>sync21visible[sync21visible.length-1]){
            sync2.trigger("owl.goTo", num - sync21visible.length+2)
          }else{
            if(num - 1 === -1){
              num = 0;
            }
            sync2.trigger("owl.goTo", num);
          }
        } else if(num === sync21visible[sync2visible.length-1]){
          sync2.trigger("owl.goTo", sync21visible[1])
        } else if(num === sync21visible[0]){
          sync2.trigger("owl.goTo", num-1)
        }
		
      }

    });
    </script>


<!-- Included JS Files (Compressed)-->
<!--<script src="java/modernizr.foundation.js"></script>
<script src="java/jquery.js"></script>
<script src="java/foundation.min.js"></script>-->
<script>
$(document).ready(function() {
 
  $("#owl-example").owlCarousel();
  $("#owl-example").owlCarousel1();
 
});
</script>
  </body>
  
</html>