<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Bingo</title>
	<link rel="stylesheet" href="assets/helpers.min.css">
	<link rel="stylesheet" href="assets/spectre.min.css">
	<link rel="stylesheet" href="assets/custom.css">

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>	
	<script src="/assets/random.js"></script>
</head>
<body class="p-20 bg-gray">
	<div class="wrapper"></div>
	<div class="container grid-xl">
		<div class="columns">
			<div class="column col-4">
				<div class="card">
					<div class="card-body">
						<table class="table bingo-results">
							<thead>
								<th>M</th>
								<th>A</th>
								<th>U</th>
								<th>R</th>
								<th>O</th>
							</thead>
							<tbody>
								<?php
									for ($i=1; $i < 16; $i++) { 
										echo '<tr>
											<td id="r'.$i.'">'. $i .'</td>
											<td id="r'.($i+15).'">'. ($i+15) .'</td>
											<td id="r'.($i+30).'">'. ($i+30) .'</td>
											<td id="r'.($i+45).'">'. ($i+45) .'</td>
											<td id="r'.($i+60).'">'. ($i+60) .'</td>
										</tr>';
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="column col-8">
				<div class="card mb-30 text-center">
					<div class="card-body">
						<h1 class="mb-0">Bingo #3 de 3</h1>
						<h3>Gran premio: <strong>Tarjeta Yeko 2 años ($891k)</strong></h3>
					</div>
				</div>
				<div class="card">
					<div class="card-body text-center">
						<div class="my-30">
							<div class="output" id="output">--</div>
						</div>
						<div class="mega-button">
							<a href="#" id="play">Agitar & Revolver</a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<script src="/assets/confetti.js"></script>
	<script>
		var data = { 'results': [] };	

		$('#play').click(e => {
			e.preventDefault()
			generateNumber()
			setTimeout(() => {				
				key = $('#output').text()
				$('#r'+key).addClass('active')
				saveData(key)
			}, 3200);
		})

		const saveData = (key) => {
			data.results.push( key )
			localStorage.setItem('data', JSON.stringify(data));
		}
			
		// var retrievedObject = localStorage.getItem('testObject');
		// console.log('retrievedObject: ', JSON.parse(retrievedObject));
	</script>
</body>
</html>