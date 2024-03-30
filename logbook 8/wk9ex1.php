<?php
	$lottodate=date("Y-m-d");
	echo "The lottery numbers for $lottodate are ";
	for($n=1;$n<7;$n++){
		$number[$n]=rand(1,49);
		echo "<br/>$number[$n]";
	}
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$database_name = "sandy_works";
	//$formattedLottoDate = date('Y-m-d', strtotime(date("dd-mm-yyyy")));

	// Create connection
	$conn = new mysqli($servername, $username, $password,$database_name);

	$sql = "INSERT INTO lotto(lottodate,number1,number2,number3,number4,number5,number6)";
	$sql = $sql ." VALUES ('".$lottodate."',$number[1],$number[2],$number[3],$number[4],$number[5],$number[6]);";
	//echo $sql;
	$result = $conn->query($sql);
	echo "<br/>This weeks numbers have been saved";

?>