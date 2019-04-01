
<?php

	function MakeSQLConnection(){
		$servername = "localhost";
		$database = "games";
		$username = "root";
		$password = "mysql";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $database);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}


	function GetAllGames(){

		$conn = MakeSQLConnection();

		$sql = "SELECT * FROM games";

		$result = $conn->query($sql);

		$games = [];

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		      $games[]= $row;
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();

		return $games;
	}

	$players = [];

	function AddPlayer(){
		$conn = MakeSQLConnection();
		$sql = "INSERT INTO planning (id, spelers) VALUES (null, 'wilco en bjorn')";
		$result = $conn->query($sql);
		
		$conn->close();

	}


	$players = AddPlayer();





// INSERT INTO planning (id, spelers, spel, starttijd, datum) VALUES (null, 'Wilco, Bjorn, Justin en Nicky', 'Everyone is John', '09:09:00', '1-4-2019') // 