<?php

require 'load_data_select.php';



$result = GetPic();

printf("<img class=\"gamepic\" src=\"%s\"", $result["image"]);

?>
 <p>leuk spel?</p>
<?php



  function GetPic(){
      $conn = MakeSQLConnection();

      $query = "SELECT image FROM games WHERE id= " . $_POST['value'];

      $stmt = $conn->prepare($query);
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);

      $pic= $stmt-> fetch();
      $conn = null;
      return $pic;
  }

 ?>

 <style type="text/css">
 	.gamepic{
 		width: 250px;
 		height: auto;
 	}
 </style>

 