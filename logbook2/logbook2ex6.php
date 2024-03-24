<?php
	$marks[0] = 65;
	$marks[3] = 55;
	$marks[] = 76;
	echo "Index 0 = $marks[0] <br/>";
	echo "Index 1 = $marks[1] <br/>";
	echo "Index 2 = $marks[2] <br/>";
	echo "Index 3 = $marks[3] <br/>";
	echo "Index 4 = $marks[4] <br/>";
	echo "Index 5 = $marks[5] <br/>";

	// if we do not specify a position of index, then it adds value to the next index.
	// for example above we specified an index 3 with $marks[3]=55. Then using 
	// $marks[]=76 added value to index 4

?>

