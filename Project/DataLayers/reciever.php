<?php

require 'DataLayers.php';

$result = GetPic();

printf("<img class=\"gamepic\" src=\"../website/resources/img/%s\">", $result["image"]);
// als het niet werkt voeg dan een <p> toe met teksts
printf ("<a href='game_detail.php?id=".$_POST['value']."'>"."meer weten?</a>");
?>

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