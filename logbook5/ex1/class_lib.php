<?php 
	class Person {
 		var $name;
 		// var $height;  
		// var $social_insurance;  
		// var $pinn_number;
 		function __construct($persons_name) {		
			$this->name = $persons_name;		
		}
		
 		function set_name($new_name) {
			$this->name = $new_name;
		}
		function get_name() {
			return $this->name;
		}
	}
	class Employee extends person 
	{
		function __construct($employee_name) {
			$temporaryName = "Employee ".$employee_name;
			$this->set_name($temporaryName);
		}
	}
?>