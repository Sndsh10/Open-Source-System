<?php 
	include("class_lib.php"); 
?>
<?php 
	$stefan = new Person("Stefan Mischook");
	$jimmy = new Person("Nick Waddles");
	//$stefan->set_name("Stefan Mischook");
	//$jimmy->set_name();
	echo "Stefan's full name: " . $stefan->get_name().'<br/>';
	echo "Nick's full name: " . $jimmy->get_name().'<br/>'; 
	$james = new Employee("Johnny Fingers");
	echo "--> " . $james->get_name().'<br/>';
?>