<?php

class user {

	public $name = "mike";

	function __construct($param) { 
		$this->name = $param;
	}

}

$u = new user("sam");
echo $u->name;
