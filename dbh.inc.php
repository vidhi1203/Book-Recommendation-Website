<?php 
 
$localhost = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "book_recc"; 
 
// create connection 
$conn = new mysqli($localhost, $username, $password, $dbname); 
 
// check connection 
if($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
} else {
    // echo "Successfully Connected";
}
 
?>