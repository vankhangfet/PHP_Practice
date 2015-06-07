<?php 
class People
{
	var $name;
	var $age;
	var $country;
	
	/*
	public function People()
	{
		$this->age= 1;
		$this->name="no name";
		$this->country="unknown";
	}
	*/
	/*
	public function __construct($name, $age, $country)
	{
		$this->age = $age;
		$this->name = $name;
		$this->country = $country;
	}
	*/
	public function __construct($name="no name", $age= 1, $country="unknown")
	{
		$this->age = $age;
		$this->name = $name;
		$this->country = $country;
	}
	
	public function greeting()
	{
		echo "Hello !";
	}
	
	
	
	
	public function introduction()
	{		
		echo "<br/>My name is ".$this->name;
      	echo "<br/>This year, I'm ".$this->age." years old";
        echo "<br/>I live in  ".$this->country;
	}
}


?>