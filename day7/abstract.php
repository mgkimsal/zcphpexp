<?php

abstract class phone {
	function showManufacturerId() { 
		echo $this->id;
	}
	protected abstract function makeCall();
	protected abstract function receiveCall();
}

class mobilePhone extends phone {
	public $id ="MD1239";
	function makeCall() { }
	function receiveCall() { }	
}
$d = new mobilePhone();
$d->showManufacturerId();
