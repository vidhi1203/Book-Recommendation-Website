<?php
require_once'db1.php';
$dbname='book_recc';
mysqli_select_db ($conn,$dbname);
$table = "CREATE TABLE IF NOT EXISTS Recommendation ( 
    bookid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    bookname VARCHAR(30) NOT NULL,
    authorname VARCHAR(30) NOT NULL,
    authorid INT(6) UNSIGNED,
    yop INT(6) NOT NULL,
    price INT(6) NOT NULL,
    booksleft INT(6),
    genre TEXT(30) NOT NULL,
    img VARCHAR(255)
    )";
    
  if ($conn->query($table) === TRUE) {
       
     } else {
       echo "Error creating table: " . $conn->error;
     }
?>