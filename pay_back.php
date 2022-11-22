<?php 

require_once 'dbh.inc.php';

$dbname='book_recc';
mysqli_select_db ($conn,$dbname);

$table = "CREATE TABLE IF NOT EXISTS payment ( 
    orderid INT(6) AUTO_INCREMENT PRIMARY KEY,
    userid INT (6),
    user VARCHAR (20),
    email VARCHAR(30) ,
    shipadd VARCHAR(30),
    billadd INT(6),
    contact VARCHAR(255),
    amount INT(6),
    mode VARCHAR(255)
    )";

if ($conn->query($table) === TRUE) {
       
} else {
  echo "Error creating table: " . $conn->error;
}

session_start();
$uid=$_SESSION['u_user_id'];
$name=$_SESSION['u_name'];
$email=$_SESSION ['u_email'];
$shipadd=mysqli_real_escape_string($conn, $_POST['sadd']);
$billadd=mysqli_real_escape_string($conn, $_POST['badd']);
$cont=mysqli_real_escape_string($conn, $_POST['number']);
$mode=$_POST ['pay'];
$amt=$_SESSION['total'];

$sql = "INSERT INTO payment (userid, user, email, shipadd, billadd, contact, amount, mode) VALUES ('$uid','$name', '$email', '$shipadd', '$billadd', '$cont','$amt','$mode')";
$result=$conn->query($sql);
?>
 
<!DOCTYPE html>
<html>
<head>
<link rel='icon' href='logo1.png'>
<link rel="stylesheet" type="text/css" href="header.css">
    <title>Bill</title>
 
    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }
 
        table {
            width: 100%;
            margin-top: 20px;
        }

        @media print
{
.noprint {display:none;}
}

button 
{
	font-size:20px;
	margin-right:120px;
    border-radius: 15px;
    color: #a64ac9;
    background-color: #FCCD04;
    padding:5px;
}

button:hover
{
	color:white;
	background-color: yellow;
}
    </style>
 
</head>
<body>
    <div class=noprint>
<div id=header>
            <a href='header.html'>
            <img id=logo src="Novel-O-Clock.jpg"></a>
            <div id=options>
                <span class=item><a href='home_login.html' class='menu'>Home</a></span>
                <span class=item><a href='rec1.php' class='menu'>Recommendation</a></span>
                <span class=item><a href='bookform.php' class='menu'>Shelves</a></span>
                <span class=item><a href='shopcart.php' class='menu'>Cart</a></span>
                <span class=item><a href='header.html' class='menu'>Log Out</a></span>
            </div>
        </div></div>
        <div style='text-align:center;font-size:20px;'>
          
            <br><br>
            Name:<?php echo $name; ?>
            <br><br>
            Email: <?php echo $email; ?>
            <br><br>
            Shipping Address: <?php echo $shipadd; ?>
            <br><br>
            Billing Address: <?php echo $billadd; ?>
            <br><br>
            Contact: <?php echo $cont;?>
            <br><br>
            Amount: <?php echo $amt;?>
            <br><br>
            Payment Mode: <?php echo $mode; ?>
        </div>
        <br><br>
        <center>
        <div class=noprint><button onClick="window.print()" style='margin-left:10%'>Print this page
</button>
<br><br><br><br><br><br>

        <div id=footer>
          <div id=s1>
            <span>Social Media</span><br>
            Facebook<br>
            Twitter<br>
            Instagram<br>
            LinkedIn
          </div>
          <div id=s2>
            <span>Popular Geners</span><br>
            Sci-Fi<br>
            RomComs <br>
            Children<br>
            Auto-Biography
          </div>
          <div id=s3>
            <span>Our Stores</span><br>
            Mumbai<br>
            Jaipur <br>
            Bhopal<br>
            Delhi 
          </div>
          <div id=s4>
            <span>Store Items</span><br>
            Gifts<br>
            Stationery <br>
            Accessories<br>
            Board Games
          </div>
          <div id=s5>
            <span>Contact us</span><br>
            Email: noveloclock@book.com<br>
            Ph. No.: 9876543210<br>
            WhatsApp: +91 9876509873<br>
            <a href="TnC.html">Terms and Conditions</a>
          </div>
        </div>
</div>
        
 
</body>
</html>