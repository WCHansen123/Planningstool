<?php 
require '../DataLayers/DataLayers.php';

$data = [];
$dataErr = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST[$value])) {
			$dataErr[$value] = "Vul dit veld ook in";
			$canProcess = false;
		}
		else{}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Project </title>
</head>
<body>

	<form> 
		<input type="text" name="namen" value="<?php echo $_POST['question1'];?>"> <span class="error">* <?php echo $dataErr["question1"];?></span>
		<input type="submit" name="submit">
	
	</form>

</body>
</html>