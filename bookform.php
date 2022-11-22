<?php
session_start();
if (isset($_POST['sub']))
{
	include_once 'db2.php';

	$author = mysqli_real_escape_string($conn, $_POST['authorname']);

	$_SESSION['author']= $author;
  header('Location: ../project/db4.php');
}
?>

<!DOCTYPE html>
<body>
<head>
    <title>Search</title>
    <style>
      @import url("https://fonts.googleapis.com/css?family=Fjalla+One&display=swap");
* {
  margin: 0;
  padding: 0;
}

.bg-img{
  background: url('C:\\xampp\\htdocs\\bg.jpg') center no-repeat;
  background-size: cover;
  width: 100vw;
  height: 100vh; 
  display: grid;
  align-items: center;
  justify-items: center;
}

.contact-us {
  background: #f5e6cc;
  padding: 50px 100px;
  border: 2px solid black;
  box-shadow: 15px 15px 1px #ffb48f, 15px 15px 1px 2px black;
}

input {
  display: block;
  width: 100%;
  font-size: 14pt;
  line-height: 28pt;
  font-family: "Fjalla One";
  margin-bottom: 28pt;
  border: none;
  border-bottom: 5px solid black;
  background: #f5e6cc;
  min-width: 250px;
  padding-left: 5px;
  outline: none;
  color: black;
}

input:focus {
  border-bottom: 5px solid #ffb48f;
}

#button {
  display: block;
  margin: 0 auto;
  line-height: 28pt;
  padding: 0 20px;
  background: #ffb48f;
  letter-spacing: 2px;
  transition: 0.2s all ease-in-out;
  outline: none;
  border: 1px solid black;
  box-shadow: 3px 3px 1px #17e9e0, 3px 3px 1px 1px black;
}
#button:hover {
  background: black;
  color: white;
  border: 1px solid black;
}

::selection {
  background: #A64AC9;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus {
  border-bottom: 5px solid #95a4ff;
  color: #2A293E;
  box-shadow: 0 0 0px 1000px #f8f4e5 inset;
  transition: background-color 5000s ease-in-out 0s;
}
</style>
</head>
<div class="bg-img">
<div class="contact-us">
    <form method='POST' action='db4.php'> 
  <input type="text"  name="authorname"  placeholder="Search By Author " >
  
  <br><br>
  <input type="text"  name="genre"  placeholder="Search By Genre ">
 
  <br><br>  
  <input id='button' type="submit" value = "Search" name="sub">
  

      
    </form>
  </div>
</body>
</html>
