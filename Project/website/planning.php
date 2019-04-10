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

	<img src="../website/resources/img/banner.png" class=" row col-10 offset-1 ">
	<div class="row col-10 offset-1 border planning">
		<form method="post" class="col-6 "> 
			<select id="button" name="spel">
  				<?php 
  					foreach (GetGames() as $array) {
    				printf('<option value="'. $array["id"].'">'. $array["name"] . '</option>');
  					}
  				?>
			</select>
			<br>
			<input type="text" name="spelers" placeholder="Bijv: Wilco, Bjorn, Justin en Nick" value="<?php echo $_POST['spelers'];?>"> <span class="error">* <?php echo $dataErr["spelers"];?></span>
			<br>
			<input type="text" name="spelleider" value="<?php echo $_POST['spelleider'];?>"> <span class="error">* <?php echo $dataErr["spelleider"];?></span>
			<br>
			<input type="time" name="starttijd" value="<?php echo $_POST['starttijd'];?>"> <span class="error">* <?php echo $dataErr["starttijd"];?></span>
			<br>
			<input type="date" name="datum" value="<?php echo $_POST['datum'];?>"> <span class="error">* <?php echo $dataErr["datum"];?></span>
			<br>

			<input type="submit" name="submit">
		</form>

		<div class="col-6 gamepic bg-white">
			

		</div>
	</div>


</body>
</html>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
</script>

<script type="text/javascript">
  


 $(document).ready(function(){
    $('select#button').change(function(){
      console.log(this.value);
        $.ajax({
            url: '../DataLayers/reciever.php',
            type: 'POST',
            data: {value:this.value},
            dataType: 'html',
            success: function (data) {
                $('.gamepic').html(data);
            }
        });

    });
});


</script>