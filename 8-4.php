<?php
class employee{
	var $details,$desig;
	function __construct($g,$d){
		$this->details = $g;
		$this->desig = $d;}
    function display(){
    	
    	if($this->desig=="programmer"|| $this->desig=="team leader" || $this->desig=="project lead"){
    		echo $this->details;
    	}
    	else{
    		throw new Exception("Employee is not a programmer or Team leader or Project Lead");
    	}   	
}
    }
/*class employee1 extends employee{
	function displaydetails(){
		parent::display();
    	
}
}*/
$a = $_POST["id"];;
$b = "sagar";
$c = "male";
$d = "emp";
$e = "2555555555555555";
$g = "ID = $a<br>"."Name=$b<br>"."Gender=$c<br>"."Designation=$d<br>"."Salary=$e<br>";
$q = new employee1($g,$d);
try{
$q->display();}
catch(Exception $e){echo $e->getMessage();}
?>