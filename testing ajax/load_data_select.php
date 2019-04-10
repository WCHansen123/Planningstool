<?php   
 //load_data_select.php  
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



