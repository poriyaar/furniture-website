<?php

$serverName = "db";
$userName = 'user';
$password = 'password';

// create connection
$conn = new mysqli($serverName, $userName, $password,"furnituredb");
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
