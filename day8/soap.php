<?php
include("calc.php");
$s = new SoapServer("http://localhost:10088/phpexp/demo/day8/w2.wsdl");
$s->setClass('calculator');
$s->handle();


$t = new SoapClient("http://soap.amazon.com/schemas2/AmazonWebServices.wsdl");
