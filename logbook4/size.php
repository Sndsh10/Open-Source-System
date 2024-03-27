<html>
	<head>
		<title>Select size</title>
		<?php
			$qtyAmount = $_POST['selqty'];
		?>
	</head>
	<body>
		<form action="selectcolour.php" method="post">
		Select the size of widgets you require
		<select name="selsize" id="selsize">
			<option value="15.75">Small (£15.75)</option>
			<option value="16.75">Medium (£16.75)</option>
			<option value="17.75">Large (£17.75)</option>
			<option value="18.75">Extra Large (£18.75)</option>
		</select>
		<br/><br/> 
		<input type="hidden" name="selqty" id="selqty" value="<?php echo $qtyAmount; ?>"/>
		<input type="submit" value="Buy" />
		</form>
	</body>
</html>
