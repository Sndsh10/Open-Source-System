<?php 
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
	$sql = "SELECT * from test";
	$result = $conn->query($sql);
?>
<html>
<body>
<?php
	$countTemporary=1;
	while($row = mysqli_fetch_assoc($result)){
		echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name]</a><br/>";
		$countTemporary++;
	}
?>
</body>
</html>