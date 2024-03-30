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
		$sql = "SELECT * from test where ID=$_GET[id]";
		$result = $conn->query($sql);
			
		while($row = mysqli_fetch_assoc($result)){
			//echo "$row[name] $row[email] $row[phone_number] <br/>";
			$name = $row['name'];
			$email = $row['email'];
			$phoneNumber = $row['phone_number'];
			$temporaryId = $row['ID'];
		}

	?>
</head>
<body>
	<form action='wk6ex2action2.php' method="post">
		Enter name
		<input type='text' name='txtName' value="<?php echo $name ?>"/><br/>
		Enter email:
		<input type='text' name='txtEmail' value="<?php echo $email ?>"/><br/>
		Enter tel number :
		<input type='text' name='txtPhoneNumber' value="<?php echo $phoneNumber ?>"/><br/><br/>
		<input type="hidden" name='txtId' value="<?php echo $temporaryId ?>"/>
		<input type='submit' value='Save Data' />
	</form>
	<form action="wk6ex4.php" method="post">
    	<input type="submit" name="deleteData" value="Delete data??" />
    	<input type="hidden" name='txtId' value="<?php echo $temporaryId ?>"/>
    </form>
</form>
</body>