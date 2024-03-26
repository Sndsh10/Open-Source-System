<?php
	$mymarks["Module 1"]=60;
	$mymarks["Module 2"]=62;
	$mymarks["Module 3"]=63;
	$mymarks["Module 4"]=64;
	$mymarks["Module 5"]=65;
	$mymarks["Module 6"]=66;
	$total=0;
	foreach($mymarks as $index=>$value)
	{
		echo "I got $value marks in subject $index <br/>";
		$total=$total+$value;
	}
	$average = $total/6;
	echo "Total average for all subjects is $average";

?>
