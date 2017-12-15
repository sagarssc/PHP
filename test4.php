<?php
class book{
	private $title;
	private $price;
   function __construct($title,$price){
   	$this->title=$title;
   	$this->price=$price;
   }
   function gettitle(){
   	echo "Book Title = $this->title"."<br>";
   }
   function getprice(){
   	echo "Book Price = $this->price"."<br>";
   }
}
$a=new book("sagar","500");
$a->gettitle();
$a->getprice();
?>
