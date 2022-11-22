
<!DOCTYPE HTML>  
<html>
  
<head>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

<style>
.error {color: black;}
body{
  font-family: Arial, Helvetica, sans-serif;
  height: fit-content;
}
 html {
  font-family: Arial, Helvetica, sans-serif;
  

}



/* Add styles to the form container */
.container {
  position: <center></center>;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: lightgray;
  box-sizing: border-box;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  box-sizing: border-box;
}
/* to provide focus and to change colour of the  */


/* Set a style for the submit button */
.btn {
  background-color: orange;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  box-sizing: border-box;
}

.btn:hover {
  opacity: 1;
}
.dd{
  position: absolute;
  top: 1020px;
  left: 1020px;
}

</style>
</head>


<body style="background-color: coral;"> 

<?php

// define variables and set to empty values
$booknameErr = $authornameErr = $authoridErr= $yopErr= $priceErr= $booksleftErr= $genreErr="";
$bookname = $authorname = $authorid = $yop = $amount= $price= $booksleft= $genre= "" ;
// define error conditions and their respective prompts
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["bookname"])) {
    $booknameErr = "Name is required";
  } else {
    $bookname = test_input($_POST["bookname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$bookname)) {
      $booknameErr = "Only letters , numbers and white space allowed";
    }
  }
  if (empty($_POST["authorname"])) {
    $authornameErr = "Name is required";
  } else {
    $authorname = test_input($_POST["authorname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$authorname)) {
      $authornameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["authorid"])) {
    $authoridErr = "Author's id is required";
  } else {
    $authorid = test_input($_POST["authorid"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[0-9]*$/",$authorid)) {
      $authoridErr = "Invalid authorid format";
    }
  }
  if (empty($_POST["yop"])) {
    $yopErr = "Year of publishing is required";
  } else {
    $yop = test_input($_POST["yop"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[0-9]*$/",$yop)) {
      $yopErr = "Only numbers allowed";
    }
  }
  if (empty($_POST["price"])) {
    $priceErr = "Price of the book is required is required";
  } else {
    $priceErr = test_input($_POST["price"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[0-9]*$/",$price)) {
      $priceErr = "Only numbers allowed";
    }
  }
  

 

  if (empty($_POST["genre"])) {
    $genreErr = "Enter the genre of the book please!";
  } else {
    $genreErr = test_input($_POST["genre"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$genre)) {
        $genreErr = "only text is accepted";
  }
}
  //checks if there is  an input provided for gender

}


//function created to make the data inputs proper
function test_input($data) { 
  $data = trim($data); //trim — Strip whitespace (or other characters) from the beginning and end of a string

  $data = stripslashes($data); //stripslashes — Un-quotes a quoted string
  $data = htmlspecialchars($data); //htmlspecialchars_decode — Convert special HTML entities back to characters


  return $data;
}
?>
<div>
<!-- for displaying labels of the variables and taking their inputs respectively -->
<form method="post" action="" class="container";">  
 <label for="name"><b>Book Name</b></label>
 <br>

   <input type="text" style="color: orange;" name="bookname"  placeholder="Enter Name of the book ">
  <span class="error"> <?php echo $booknameErr;?></span>
  <br><br>

  <label ><b>Author Name</b></label>
  <br>

  <input type="text" style="color: orange;"  name="authorname" placeholder="Enter Name of the author ">
  <span class="error"> <?php echo $authornameErr;?></span>
  <br><br>

  <label ><b>Author Id</b></label>
  <br>

  <input style="color: orange;"  placeholder="Enter Author ID " name="authorid">
  <span class="error"> <?php echo $authoridErr;?></span>
  <br><br>

  <label for="name"><b>Year of Publishing</b></label>
  <br>

  <input  style="color: orange;"  placeholder="Enter The year of publishing " name="yop" >
  <span class="error"> <?php echo $yopErr;?></span>
  <br><br>

  <label ><b>Price</b></label>
  <br>

  <input  style="color: orange;"  placeholder="Enter the price of the book " name="price" >
  <span class="error"> <?php echo $priceErr;?></span>
  <br><br>

  <label ><b>Genre</b></label> 
  <br>
  <input type="text" style="color: orange;"  placeholder="Enter genre of the book " name="genre">
  <span class="error"> </span>
  <br><br> 
  
  <input type="submit" name="submit" value="Make an Entry"  class="btn">  
</form>
</div>
<div class="dd">
<label for="dt" style="color: blue; font-size:large;"><b>Payment details.</b></label>
<br>

</div>

</body>
</html>
<?php 
require_once 'db2.php';
 
if (isset($_POST['bookname']) || isset($_POST['authorname']) || isset($_POST['authorid']) || isset($_POST['yop']) || isset($_POST['price']) || isset($_POST['genre'])) {
    {
   
$bookname =($_POST['bookname']);
$authorname = ($_POST['authorname']);
$authorid = ($_POST['authorid']);
$yop = ($_POST['yop']);
$price = ($_POST['price']);
$genre = ($_POST['genre']);

    }
 


 
    $s = "INSERT INTO Recommendation (bookname,authorname,authorid,yop,price,genre ) VALUES ( '$bookname','$authorname','$authorid','$yop','$price','$genre')";
    if($conn->query($s) === TRUE) {

         } else {
        echo "Error " . $s . ' ' . $conn->connect_error;
    }
 
    
}
 ?>