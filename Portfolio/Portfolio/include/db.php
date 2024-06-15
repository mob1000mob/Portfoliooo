<?php
// Database connection details
$servername = "group6server.mysql.database.azure.com";
$username = "group6";
$password = "ThePortfolioHub6";
$dbname = "group6portfolio";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Database is connected!";
?>
