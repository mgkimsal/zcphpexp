<?php 
$x = 5;
$y =7;

/**
 * This is the say function which will say your name
 * @param $name Name to br printed.
 * @return String
 */
function say($name){
	static $count;
	$x .= "Hello there ";
	$x.= $name;
	$x.= "\n";
	$x.= date("m/d/Y", now());
	++$count;
	return $x;
}
function now(){
	return time();
}


echo say("foo");

say("randy");
$z = $x+$y;
echo $z;



?>