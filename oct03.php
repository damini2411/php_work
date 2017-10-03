<?php

class EMPLOYEE
{
	var $empID;
	var $empName;
	function call()
	{
		echo "<h1> Hi There<h1>";
	}
	function setData($id, $name) 
	{

		$this -> empID -> $Id;
		$this -> empName -> $name;

	}

	function getData()
	{
		echo "<br>". $this-> empID;
		echo "<br>". $this-> name;
	}

	function toString() {
		
		return($this->empID. "," .$this->empName);

	}
}





 ?>