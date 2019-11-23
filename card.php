<!DOCTYPE html>
<html lang="es" style="background-color: #f8f8f8;">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Gran BINGO - Mao Linares</title>
	<link rel="stylesheet" href="assets/helpers.min.css">
	<link rel="stylesheet" href="assets/spectre.min.css">
	<link rel="stylesheet" href="assets/custom.css">
</head>
<body style="max-width:400px;" class="align-center">	

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v5.0"></script>
	
	<img src="/cards/<?= $_GET['id'] ?>.jpg" width="350px">			
	<?php 
		for ($i=1; $i < 26; $i++) { 
			echo '<div class="marker m'.$i.'">👍</div>';
		}
	?>
	<div class="p-10">
		<p class="mb-0"><strong>¡Gracias por participar!</strong> Carton #<?= $_GET['id'] ?>.</p>
		<p class="mb-20"><em>Haga click para marcar su número.</em></p>
		<a href="#" onclick="window.location.reload()">Borrar todo y empezar de nuevo</a>
	</div>

	<div class="container grid-xs px-0 text-center py-20">

		<h5 class="bold">1. ¡Mira el Bingo en Vivo!</h5>
		<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook%2Fvideos%2F10153231379946729%2F&width=500&show_text=false&appId=663854497115733&height=280" width="100%" height="230px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="false"></iframe>
		
		<h5 class="bold mt-20">2. Comenta para cantar el bingo</h5>
		<p>Si ganas escribe tu comentario acá</p>
		<div class="fb-comments" data-href="https://bingo.smart4.com.co" data-width="100%" data-numposts="10"></div>
	</div>	
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script>
	  $('.marker').click(function(e){
		  $(this).toggleClass('on');
	  })
  </script>  
</body>
</html>

<!-- https://developers.facebook.com/docs/plugins/embedded-video-player/ -->