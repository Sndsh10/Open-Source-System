<html>
<head>
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
			echo "Connected successfully"."<br/><br/>";
		}
		$newName = $_POST['txtName'];
		$newEmail = $_POST['txtEmail'];
		$newPhoneNumber = $_POST['txtPhoneNumber'];
		$newId = $_POST['txtId'];
		$sql = "UPDATE test";
		$sql = $sql." SET name='".$newName."', email='".$newEmail."', phone_number='".$newPhoneNumber."'";
		$sql = $sql." WHERE ID=$newId";
		//echo $sql;

		//test where ID=$_GET[id]";
		$result = $conn->query($sql);
		if($result){
			echo "Updated successfully <br/>";
		}else{
			echo "Not updated. try again. <br/>";
		}
		

	?>
</head>
<body>
	<a href="wk6ex2.php">go back</a>
</body>
</html>