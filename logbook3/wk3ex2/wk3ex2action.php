<?php
	if($_POST["txtage"]<21){
		echo "You are under 21 years old <br/>";
	}else{
		echo "You are 21 years old or over<br/>";
	}
	if(($_POST["txtGender"]=="MALE")||($_POST["txtGender"]=="male")||($_POST["txtGender"]=="Male")){
		echo "You are male <br/>";
	}else{
		echo "You are female <br/>";
	}
	// echo "Your name is $_POST[txtname] <br/>";
	// echo "Your gender is $_POST[radsex] <br/>";
	// echo "Your occupation is $_POST[seloccupation] <br/>";
?>