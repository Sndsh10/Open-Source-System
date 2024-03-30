<?php


	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$database_name = "sandy_works";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$database_name);
	$image = $_FILES['monsterimage']['tmp_name'];
	$audio = $_FILES['monsteraudio']['tmp_name'];

	// Get the file binary data
	$imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
	$audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));

	$sql = "INSERT INTO monster";
	$sql = $sql."(name, image, audio)";
	$sql = $sql."VALUES ('".$_POST['txtname']."','".$imagedata."','".$audiodata."');";

	// $result = mysqli_query($sql,$conn);
	//echo $sql;
	$result = $conn->query($sql);
	echo $result;

?>