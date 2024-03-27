<?php
	switch($_POST["radcourse"]){
		case "HNC": echo "You have selected an HNC course";break;
		case "HND": echo "You have selected an HND course";
			break;
		case "BSC": echo "You have selected a BSC course";
			break;
		case "Part-BSC": echo "You have selected a part-time BSC course";
			break;
		default: echo "No courses selected";

		// If the break lines are removed, all the other cases are //displayed.
	}
?>
