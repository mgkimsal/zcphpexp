<?php

class user {

	public $name = "mike";

	function user() { 
		
	}
	function __construct() { 
		$args = func_get_args();
		echo "I received ".count($args)." arguments\n";
		echo "I'm being constructed!\n";
	}
	
	function __destruct() { 
		echo "Don't destroy me!\n";
	}
	function sayMyName() { 
		echo "My name is ".$this->name."\n";
		
	}
	function saySomething($text) { 
		echo "hello $text\n";
	}
}

$u = new user();

$u->sayMyName();

$u2 = new user();
$u2->name ="sam";
$u2->sayMyName();;

//$u->saySomething("mike");

 