<?php

	ini_set('display_errors',1);

	$sql = "INSERT INTO test(name,email,phone_number)";
	$sql = $sql."values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$database_name = "sandy_works";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$database_name);

	// Check connection
	if ($conn->connect_error) {
	  echo("Connection failed: " . $conn->connect_error."<br/>");
	}else{
		echo "Connected successfully"."<br/>";
	}

	if ($conn->query($sql) === TRUE) {
	  echo "Successfully inserted new values "."<br/>";
	} else {
	  echo "Error inserting " . $conn->error."<br/>";
	}

	$sql = "SELECT * from test";
	$result = $conn->query($sql);
	while($row = mysqli_fetch_assoc($result)){
		echo "$row[name] $row[email] $row[phone_number] <br/>";
	}

	
?>