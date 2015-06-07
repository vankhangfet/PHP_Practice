<?php 
	class PhanSo
	{
		var $field_list = array();
		public function __set($fieldName,$value)
		{
			$this->field_list[$fieldName] = $value;	
		}
		public function __get($fieldName)
		{
			return $this->field_list[$fieldName];	
		}	
		
		public function inMang()
		{
			print_r($field_list);
		}
	}
	$ps = new PhanSo();
	$ps->tuso=5;
	$ps->mauso=10;
	echo "tu:".$ps->tuso;
	echo "mau:".$ps->mauso;
	
	
	
?>