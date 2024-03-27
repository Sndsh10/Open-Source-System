<html>
	<head>
		<title>Select colour page</title>

	<?php
		//  filter_input(INPUT_POST, 'selqty', FILTER_SANITIZE_STRING); 
		$qtyAmount = $_POST['selqty'];
		$qtySize=$_POST['selsize'];
		$qtyPrice=$qtySize*$qtyAmount;
	?>
	</head>
	<body>
		<form action="confirmation.php" method="post">
		Select the color for the <?php echo $qtyAmount; ?> widgets you are ordering
		<input type="hidden" name="selqty" id="selqty" value="<?php echo $qtyAmount; ?>"/>
		<input type="hidden" name="selsize" id="selsize" value="<?php echo $qtyAmount; ?>"/>
		<input type="hidden" name="qtyPrice" id="qtyPrice" value="<?php echo $qtyPrice; ?>"/>
		<select name="selcolour" id="selcolour">
			<option>white</option>
			<option>red</option>
			<option>yellow</option>
			<option>green</option>
			<option>blue</option>
		</select>
		<br/><br/>
		<input type="submit" value="Buy" />
		</form>
	</body>
</html>
