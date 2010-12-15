<?php 

//$client = new SoapClient("http://soap.amazon.com/schemas2/AmazonWebServices.wsdl");
//$client->BrowseNodeSearchRequest();

$data = file_get_contents("http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20local.search%20where%20query%3D%22pizza%22%20and%20location%3D%22New%20Haven%2C%20CT%22%20and%20Rating.AverageRating%3E%224.0%22&format=json&callback=");

$x = json_decode($data);

print_r($x);
?>