
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
				$dataErr[$value] = "!";
			}
			else{
				$data[$value] = test_input($_POST[$value]);
			}
		}
		if($canProcess){
			InsertAppointment($data);
			header("Location: index.php");

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
    // echo "Connected successfully";
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

	function GetAppointments(){
		$conn = MakeSQLConnection();

		$query = "SELECT planning.*, games.image FROM `planning` INNER JOIN `games` ON `planning`.`spel`=`games`.`id ";

		$stmt = $conn->prepare($query);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		$planning= $stmt-> fetchAll();
		$conn = null;
		return $planning;
	}

	function GetGames(){
    $conn = MakeSQLConnection();

    $query = "SELECT * FROM games";

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $games= $stmt-> fetchAll();
    $conn = null;
    return $games;
  }


