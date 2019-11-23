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

	<?php
		$ids = explode(',', $_GET['id']);
		$n = 0;
		foreach ($ids as $id) {
			echo '<img src="/cards/'.$id.'.jpg" width="350px">';
			echo '<div class="markers group'.$n.'">';
			for ($i=1; $i < 26; $i++) { 
				echo '<div class="marker m'.$i.'">👍</div>';
			}
			echo '</div>';
			$n++;
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
  <style>
		.marker.m1 { top: 97px; left: 31px; }
		.marker.m2 { top: 97px; left: 32px; }
		.marker.m3 { top: 97px; left: 33px; }
		.marker.m4 { top: 97px; left: 35px; }
		.marker.m5 { top: 97px; left: 39px; }
		.marker.m6 { top: 156px; left: -249px; }
		.marker.m7 { top: 98px; left: 91px; }
		.marker.m8 { top: 98px; left: 90px; }
		.marker.m9 { top: 98px; left: 95px; }
		.marker.m10 { top: 98px; left: 98px; }
		.marker.m11 { top: 159px; left: -194px; }
		.marker.m12 { top: 157px; left: -191px; }
		.marker.m13 { top: 103px; left: 147px; }
		.marker.m14 { top: 102px; left: 148px; }
		.marker.m15 { top: 103px; left: 152px; }
		.marker.m16 { top: 161px; left: -136px; }
		.marker.m17 { top: 162px; left: -137px; }
		.marker.m18 { top: 162px; left: -137px; }
		.marker.m19 { top: 105px; left: 206px; }
		.marker.m20 { top: 104px; left: 209px; }
		.marker.m21 { top: 164px; left: -79px; }
		.marker.m22 { top: 164px; left: -79px; }
		.marker.m23 { top: 164px; left: -77px; }
		.marker.m24 { top: 164px; left: -75px; }
		.marker.m25 { top: 107px; left: 264px; }		

		.markers {
			position: absolute;
			width: 350px;
		}

		.marker { position: relative }

		
		.markers.group0 { top: 0px; }
		<?php
			for ($i=1; $i < 15; $i++) { 
				echo '.markers.group'.$i.' { top: '.($i*425).'px; } ';
			}
		?>
  </style>	
</body>
</html>

<!-- https://developers.facebook.com/docs/plugins/embedded-video-player/ -->