<?php

$host = "localhost";
$user = "root";
$password = "admin";
$dbname = "images";

// Create a connection to the database
$con = mysqli_connect($host, $user, $password, $dbname);

// Check the connection to the database
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

