<?php
class person{
	private $name;
	function set_name($data){
	$this->name=$data;	
	}
	private function get_name(){
		return $this->name;
	}
	function get(){
		$this->get_name();
	}
}
$a=new person;
$a->set_name("sagar");
$x= $a->get();
echo $x;
?>