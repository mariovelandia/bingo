<html>
<head><title>PDF of Cards</title></head>
<body>
	<div style="position: absolute;  left: 0;  top: 0;  bottom: 0;  right: 0;">
		<?php
			for ($i=100; $i < 110; $i++) { 
				echo '<img style="width: 100%; height: 100%;" src="/cards/'.$i.'.jpg">';
				echo '<div class="stamp">Carton #'.$i.'</div>';
			}
		?>
	</div>
	<style>
		.stamp {
			position: relative;
			background-color: #fff;
			top: -120px;
			text-align: center;
			font-family: Helvetica, sans-serif;
			font-weight: bold;
			font-size: 40px;
			color: #888;
			heigth: 0px;
		}
	</style>
</body>
</html>