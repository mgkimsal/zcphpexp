<?php

function __autoload($f) {
	$t = str_replace("\\","/",$f);
  include($t.".php");
}

?>
<?php 
use com\kimsal as lib;

lib\foo::showFoo("my name is mike");
?>
