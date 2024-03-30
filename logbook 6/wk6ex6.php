<?php
	include('myfunctions.inc');
	html_header("My second function demo");
	//echo "I pay $".calculateTax(15000)." tax";
	//echo "I pay $".calculateTax(15000,22)." tax";
	echo "I pay $".calculateTax(15000,22,5000)." tax";
	html_footer();
?>