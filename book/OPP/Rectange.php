<?php 
	class Rectange{
		private $cao;
		private $rong;
	
		/* 
		var $field_list = array();
		public function __set($fieldName,$value)
		{
			$this->field_list[$fieldName] = $value;	
		}
		public function __get($fieldName)
		{
			return $this->field_list[$fieldName];	
		}	
		public function chuVi(){
			return (2*(($this->cao)+($this->rong)));	
		}
		public function dienTich(){
			return (($this->cao)*($this->rong));	
		} */
		//--- tao getter setter dong
	/* 	public function __call($method,$arg){
				$prefix = strtolower(substr($method,0,3));
				$property = strtolower(substr($method,3));
				if(empty($prefix) || empty($property))
				return;
				if($prefix=="get" && isset($this->$property))
				return $this->$property;
				if($prefix=="set" )
				$this->$property = $arg[0];	
		} */
		//-----------------------
		public function chuVi(){
			return (2*(($this->cao)+($this->rong)));	
		}
		public function dienTich(){
			return (($this->cao)*($this->rong));
		}
		public function ve(){
			$st = "";
			$st .= "<br/>cao: ".$this->cao;
			$st .= "<br/>rong: ".$this->rong;
			return $st;	
		}	
	}
	$hcn = new Rectange();
	$hcn->setCao(5);
	$hcn->setRong(5);
	echo "<br/>chu vi:".$hcn->chuVi();
	echo "<br/>dien tich:".$hcn->dienTich();
	echo "<br/>Hinh chu nhat:".$hcn->ve();
	
?>