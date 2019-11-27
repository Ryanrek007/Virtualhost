<?php
$databaseHost = "localhost";
$databaseUsername = "ryan";
$databasePassword = "RYAN007";
$databaseName = "mail";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName)  or die("failed connected");
?>