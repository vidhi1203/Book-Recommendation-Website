<?php
require_once'db1.php';
$dbname='book_recc';
mysqli_select_db ($conn,$dbname);
$table = "CREATE TABLE IF NOT EXISTS cart ( 
    userid INT (6),
    username VARCHAR (20),
    bookname VARCHAR(30) ,
    authorname VARCHAR(30) NOT NULL,
    yop INT(6) NOT NULL,
    price INT(6) NOT NULL,
    img VARCHAR(255)
    )";
    
  if ($conn->query($table) === TRUE) {
       
     } else {
       echo "Error creating table: " . $conn->error;
     }
?>