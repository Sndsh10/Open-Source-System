<html>
<body>
	<?php 
		$hourlyrate = 5.75;
		$hoursperweek = 40;
		$gross = $hourlyrate * $hoursperweek;
		echo "gross wage is ".$gross.".";
		echo "<br/>";
		$taxTotal = 0.22 * $gross;
		echo "tax is ".$taxTotal;
		echo "<br/>";
		$netIncome = $gross - $taxTotal;
		echo "net tax is ".$netIncome;
	?>
</body>
</html>