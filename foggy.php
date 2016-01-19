<html>
<head>C:\Users\Pedro\Dropbox\www\lasvegas\foundation-6\js\vendor
<script type='text/javascript' src='foundation-6/js/vendor/jquery.min.js'></script>
<script type='text/javascript' src='jquery.foggy.min.js'></script>
<style>
header{

	min-height: 100vh;
	max-height: 100vh;
background: url(img/1.jpg) ;

}
</style>
</head>
<body>
<header>
</header>
</body>

<script>

 $('.header').foggy({
   blurRadius: 20,          // In pixels.
   opacity: 0.8,           // Falls back to a filter for IE.
   cssFilterSupport: true  // Use "-webkit-filter" where available.
 });
 </script>
</html>