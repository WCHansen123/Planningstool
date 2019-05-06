<?php 
	require '../DataLayers/DataLayers.php';
	$conn = MakeSQLConnection();

	 $sql = "DELETE FROM planning WHERE id= :id";

	 $stmt = $conn->prepare($sql);
	 $stmt->execute([':id' => $_GET['id']]);
	 $conn = null;

	 header("Location: index.php");
	 return true;
