<html>
    <head>
    <link rel='stylesheet' href='header.css'>
        <link rel='icon' href='Novel-O-Clock.jpg'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        </head>
        <body>
        <div id=header>
            <a href='header.html'>
            <img id=logo src="Novel-O-Clock.jpg"></a>
            <div id=options>
            <span class=item><a href='home_login.html' class='menu'>Home</a></span>
                <span class=item><a href='rec1.php' class='menu'>Recommendation</a></span>
                <span class=item><a href='bookform.php' class='menu'>Shelves</a></span>
                <span class=item><a href='header.html' class='menu'>Cart</a></span>
                <span class=item><a href='header.html' class='menu'>Log Out</a></span>
            </div>
        </div>
<?php
    require_once 'db2.php';
    session_start();
    $userid=$_SESSION['u_user_id'];
    $username=$_SESSION['u_username'];
    $tt = mysqli_real_escape_string($conn, $_POST['tt']);

    
    $sql = "SELECT * FROM recommendation WHERE bookid='$tt'";
    $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
 

        if($resultcheck > 0) {
            $row = $result->fetch_assoc();
            $img = $row['img'];
        $aname = $row['authorname'];
        $bname = $row['bookname'];
        $price = $row['price'];
            echo "<center>";
            echo "<div style='font-size:50px; color:#a64ac9'> The following book has been added to cart<br><br> </div>";
                echo'<div class="card">
                        <div class="image">
                            <img src='.$row["img"].' width=200px>
                        </div>
                    <div class="details">
                        <div class="center">
                            <h1>'.$row["bookname"].'<br><span>Rs.'.$row["price"].'</span></h1>
                            <form action=db4.php method=post>
                            <input type=text name=tt value='.$row["bookid"].' hidden>
                                <input type="submit" value="Go back">
                                </form>
                                <form action=shopcart.php method=post>
                                <input type=text name=tt value='.$row["bookid"].' hidden>
                                <input type="submit" value="View Cart">
                                </form>
                        </div>
                    </div>
                </div><br><br><br>';

               

                if (!$conn -> query("INSERT INTO cart (userid,username,authorname,bookname,price,img) 
                VALUES ('$userid','$username','$aname','$bname','$price','$img')")) {
                    echo("Error description: " . $conn -> error);
                  }

                  
        }
        

?>

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
    </body>
</html>