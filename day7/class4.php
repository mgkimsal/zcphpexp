<?php

class user {

	public $name = "mike";

	function __construct($param) { 
		echo "Constructing with $param\n";
	}

}

$u = new user("Monday");
echo $u->name;
