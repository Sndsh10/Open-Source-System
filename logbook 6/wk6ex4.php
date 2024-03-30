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

		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deleteData']))
	    {
	        //deleteData();
	        $temporaryId=$_POST['txtId'];
	        $sql = "DELETE from test where ID=$temporaryId";
			$result = $conn->query($sql);
			if($result){
				echo "Deleted successfully";
			}
	    }

?>