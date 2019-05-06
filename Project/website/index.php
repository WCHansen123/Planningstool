

<?php 
require '../DataLayers/DataLayers.php';





// foreach (GetAppointments() as $array) {
// 	echo $array["spel"];}


?>
<!DOCTYPE html>
<html>
<head>
	<title> Plan je dag! </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" href="resources/css/style.css">
</head>
<body>
	<?php
		include 'resources/include/Header.html';
		header('content-Type: text/html; charset=utf-8');
	?>
		
	
		<?php 
			foreach (GetAppointments() as $array) {
		?>
			<div class=" row col-md-10 col-lg-5 offset-md-1 offset-lg-3 bg-white border space ">
				<div class="col-lg-4 col-md-4 ">
					<h5 class="filler"><strong> Datum: <?php echo $array["datum"];?> </strong></h5>
					<hr>
					<p class="filler"><i class="fas fa-dice"></i> <?php echo $array["name"];?></p>
					<p class="filler"><i class="far fa-clock"></i> <?php echo $array["starttijd"];?></p>
					<p class="filler"><i class="fas fa-user"></i> <?php echo $array["spelleider"];?></p>
					<p class="filler"><i class="fas fa-users"></i> <?php echo $array["spelers"];?></p>
				</div>
				<div class="col-lg-8 col-md-8 border d-block">
					<img class="gamepic" src="../website/resources/img/<?php echo $array['image']?>">
					<a class="float-left" href="edit.php?id=<?php echo $array['id']; ?>">Planning aanpassen</a>
					<a class="float-right" href="game_detail.php?id=<?php echo $array['spel']; ?>">Meer info</a>
				</div>
			</div>

		<?php
			};
 		?>
</body>
</html>