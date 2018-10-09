<?php

$databaseHost = "localhost";
$databaseName ="kidstoy";
$databaseUsername ="root";
$databasePassword ="";

$mysqli = new mysqli ($databaseHost, $databaseUsername, $databasePassword, $databaseName );
 if (!$mysqli) {
 	echo "fail";
 }
 else {
 	echo "databases connected";
 }

?>
