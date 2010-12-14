<?php

function __autoload($f) {
	$t = str_replace("\\","/",$f);
	echo "include $t.php";
	die();
}

//$name = new User();

//include("ns.php");
?>
<div id="33">
<?php 
use com\kimsal as lib;

lib\foo::showFoo("my name is mike");
?>
</div>