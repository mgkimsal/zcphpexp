<?php
ob_start();
// bootstrap process
// set up anything that needs to be set up here

define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);
define('BASE_DIR', dirname(__FILE__).DS);
set_include_path(BASE_DIR . "lib" . PS . BASE_DIR );

function __autoload($class) 
{ 
  $class = strtolower(str_replace("_",DIRECTORY_SEPARATOR,$class)).".php";
  $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
  include($class);
}

session_start();

