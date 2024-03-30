<?php
	function html_header($pageTitle){
		echo "<html><head><title>$pageTitle</title></head>";
		echo "<body>";
	}
	function html_h1($text){
		echo "<h1>$text</h1>";
	}
	function html_h2($text){
		echo "<h2>$text</h2>";
	}
	function html_footer(){
		echo "</body>";
		echo "</html>";
	}
	//function calculateTax($salary,$rate=40,$exemption){
		//$tax = (($salary-$exemption)*($rate/100));
		//return $tax;
	//}
	function calculateTax($salary,$rate,$exemption){
		$tax = (($salary-$exemption)*($rate/100));
		return $tax;
	}	
?>
