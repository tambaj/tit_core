<?php

class Val {

	public function __construct(){

	}

	public function minlength($data, $arg){

		if (strlen($data) < $arg) {
			
			return "Your String can only be $arg logn ";
		}
	}

	public function maxlength($data, $arg){

		if (strlen($data) > $arg) {
			
			return "Your String can only be $arg logn ";
		}
	}
	public function digit($data){

		if (ctype_digit($data == false)) {
			
			return "Your String must be a digit";
		}
	}
	public function __call($name, $arguments){
		throw new Exception("$name does not exist inside of:" .__CLASS__);
		
	}
}