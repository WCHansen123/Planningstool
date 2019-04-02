<?php 
require '../DataLayers/DataLayers.php';
include 'resources/include/Header.html';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="resources/css/style.css">
</head>
<body>

	<div class="col-10 offset-1 border">
		<form  action="index.php" method="post"> 
			<select name="spel">
				<option value="Counterfeiters">Counterfeiters</option>
				<option value="7 Wonders">7 Wonders</option>
				<option value="Camel Up">Camel Up</option>
				<option value="Roborally">Roborally</option>
				<option value="Codenames: Picturesa">Codenames: Picturesa</option>
				<option value="Dale of Merchants">Dale of Merchants</option>
				<option value="Dixit: Odyssey">Dixit: Odyssey</option>
				<option value="Concept">Concept</option>
				<option value="10 minuten kraak">10 minuten kraak</option>
				<option value="Ghost Fightin' Treasure Hunters">Ghost Fightin' Treasure Hunters</option>
				<option value="Downforce">Downforce</option>
				<option value="City of Horror">City of Horror</option>
				<option value="Fantasy Realms">Fantasy Realms</option>
				<option value="The Estates">The Estates</option>
				<option value="Lemming Maffia">Lemming Maffia</option>
				<option value="Micropolis">Micropolis</option>
				<option value="Mysterium">Mysterium</option>
				<option value="Spyfall">Spyfall</option>
				<option value="Keep Talking and Nobody Explodes">Keep Talking and Nobody Explodes</option>
				<option value="Not Alone">Not Alone</option>
				<option value="The Climbers">The Climbers</option>
				<option value="Gizmos">Gizmos</option>
				<option value="The Dragon & Flagon">The Dragon & Flagon</option>
				<option value="Pandemic">Pandemic</option>
				<option value="Everyone is John">Everyone is John</option>
			</select>
			<br>
			<input required type="text" name="spelers" placeholder="Bijv: Wilco, Bjorn, Justin en Nick" value="<?php echo $_POST['spelers'];?>"> <span class="error">* <?php echo $dataErr["spelers"];?></span>
			<br>
			<input required type="text" name="spelleider" value="<?php echo $_POST['spelleider'];?>"> <span class="error">* <?php echo $dataErr["spelleider"];?></span>
			<br>
			<input required type="time" name="starttijd" value="<?php echo $_POST['starttijd'];?>"> <span class="error">* <?php echo $dataErr["starttijd"];?></span>
			<br>
			<input required type="date" name="datum" value="<?php echo $_POST['datum'];?>"> <span class="error">* <?php echo $dataErr["datum"];?></span>
			<br>

			<input type="submit" name="submit">
		</form>
	</div>

</body>
</html>