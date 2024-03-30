<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$database_name = "sandy_works";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$database_name);

	$sql = "SELECT id,Name from monster;";
	$result = $conn->query($sql);
	echo "<table align='center' border='1'>";
	echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["Name"]."</td>";
		echo '<td><a href="getwav.php?id='.$row["id"].'">Click to play</a></td>';
		echo "<td><img src='getjpg.php?id=".$row["id"]."'height='100' width='100'/></td>";
		echo "</tr>";
	}
	// echo "<td>".$
	// echo "";
	echo "</table>";
?>
