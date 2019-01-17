<?php 

class Car{

	public $color="yellow";

	public $price=7000000;
	
	public static function show(){

		echo "this is a new Car <br/>";
	}

	public function sale(){
		echo "please pay   ".$this->price."<br/>";
	}
}