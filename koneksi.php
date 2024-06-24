<?php
// Define the database connection variables.
$host = "localhost";
$dbname = "taylor-crud";
$username = "root";
$password = "";

// Create a new PDO object.
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Set the PDO error mode to exception.
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "Connected successfully";
