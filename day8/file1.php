<?php 

class customException extends Exception { } 

try {
	// connect to db
	// if can't connect
	throw new customException("Can't connect to db");
	// do queries
	// show results
	//etc
} catch (customException $t) {
	
} catch (Exception $r) {
	echo $r->getMessage();
	echo "\n";
	print_r($r);
	echo $r->getTraceAsString();
}

?>