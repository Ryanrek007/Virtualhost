<?php
$databaseHost = "localhost";
$databaseUsername = "ryan";
$databasePassword = "RYAN007";
$databaseName = "gis";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName)  or die("failed connected");
?>