
<?php

$questions = ["spel", 'spelers', 'spelleider', 'starttijd', 'datum'];


	$data = [];
	$dataErr = [];
	$canProcess = true;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		foreach ($questions as $value) {

			$data[$value] = "";
			$dataErr[$value] = "";

			
			if (empty($_POST[$value])) {
				$canProcess = false;
			}
			else{
				$data[$value] = test_input($_POST[$value]);
			}
		}
		// var_dump($data);
		// var_dump($canProcess);
		if($canProcess){
			InsertAppointment($data);
		}
	}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



	function MakeSQLConnection(){
		$servername = "localhost";
		$database = "games";
		$username = "root";
		$password = "mysql";

	try {
    $conn = new PDO("mysql:host=".$servername.";dbname=" . $database, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

		// Create connection
		return $conn;
	}


	function InsertAppointment(){
	// prepare and bind
		$conn = MakeSQLConnection();

		$stmt = $conn->prepare("INSERT INTO Planning (spel, spelers, spelleider, starttijd, datum) VALUES (:spel, :spelers, :spelleider, :starttijd, :datum)");
		$stmt->execute([':spel' => $_POST['spel'], ':spelers' => $_POST['spelers'], ':spelleider' => $_POST['spelleider'],  ':starttijd' => $_POST['starttijd'], ':datum' => $_POST['datum']]);
		$conn = null;

	}


	// function GetAllGames(){

	// 	$conn = MakeSQLConnection();

	// 	$sql = "SELECT * FROM games";

	// 	$result = $conn->query($sql);

	// 	$games = [];

	// 	if ($result->num_rows > 0) {
	// 	    // output data of each row
	// 	    while($row = $result->fetch_assoc()) {
	// 	      $games[]= $row;
	// 	    }
	// 	} else {
	// 	    echo "0 results";
	// 	}
	// 	$conn->close();

	// 	return $games;
	// }

	// $players = [];

	// function AddPlayer(){
	// 	$conn = MakeSQLConnection();
	// 	$sql = "INSERT INTO planning (id, spelers) VALUES (null, 'wilco en bjorn')";
	// 	$result = $conn->query($sql);
		
	// 	$conn->close();

	// }


	// $players = AddPlayer();





