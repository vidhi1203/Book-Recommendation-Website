<?php
$localhost = "127.0.0.1";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($localhost, $username, $password);
// Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
$d = "CREATE DATABASE IF NOT EXISTS book_recc";
if ($conn->query($d) === TRUE) {
 } else {
   echo "Error creating database: " . $conn->error;
 }
?>

