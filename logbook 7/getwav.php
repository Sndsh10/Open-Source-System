<?php

	header("Content-type: audio/wav");
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$database_name = "sandy_works";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$database_name);

	$sql = "SELECT Audio FROM monster WHERE id=".$_GET[id].";";
	$result = $conn->query($sql);
	while($row = mysqli_fetch_assoc($result)){
		$audio = $row["Audio"];
		echo $audio;
	}
	

