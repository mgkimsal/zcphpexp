<?php
//$client = new SoapClient("http://soap.amazon.com/schemas2/AmazonWebServices.wsdl");
//$client->SellerSearchRequest();
$u = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20flickr.photos.search%20where%20text%3D%22Kimsal%22%20limit%2010&format=json&callback=";
$p = file_get_contents($u);

$t = json_decode($p);
print_r($t->query->results);