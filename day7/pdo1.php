<?php 

$pdo = new PDO("sqlite:./sqlite.db");

$rows = 
$pdo->query("select * from user ")->fetchAll();

print_r($rows);

?>