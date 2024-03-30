<?php

	//header("Content-type: image/jpeg");
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$database_name = "sandy_works";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$database_name);
	//echo $_GET['id'];

	$sql = "SELECT Image FROM monster WHERE id=".$_GET['id'].";";
	//echo $sql;
	$result = $conn->query($sql);
	while($row = mysqli_fetch_assoc($result)){
		$jpg = $row["Image"];
		echo $jpg;
	}
	

?>
