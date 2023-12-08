<?php
// Database configuration
$dbHost = "localhost";
$dbUsername = "luiziane";
$dbPassword = "Co)zd*b8bFlA1q*l";
$dbName = "teaStore";


// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


// Check connection
if ($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}
?>