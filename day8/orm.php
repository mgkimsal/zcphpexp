<?php

class foo {
	
	public function __construct()
	{
		// connect to db
		// write out data to file
		// determine child types
		// load child types
		// email debug info
		// populate $_SESSION
		
	}
	
}




$p = new Person();
$p->name = "mike";
$p->save();

$a = new Address();
$p->addToAddresses($a);
$p->save();

echo $p->address[0]->city;
