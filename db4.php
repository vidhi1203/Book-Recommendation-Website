<html>
    <head>
    <link rel='stylesheet' href='header.css'>
    <link rel='stylesheet' href='db4css.css'>
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
        
        <div class=abc>
<?php
        session_start();
                if (isset($_POST['sub']))
        {
            include_once 'db2.php';

            $author = mysqli_real_escape_string($conn, $_POST['authorname']);
            $genre = mysqli_real_escape_string($conn, $_POST['genre']);
            $_SESSION['author']= $author;
            $_SESSION['genre']=$genre;
        
        }
        include_once 'db2.php';
        
        $author=$_SESSION['author'];
        $genre = $_SESSION['genre'];
        
        $sql = "SELECT * FROM recommendation WHERE authorname='$author' OR genre='$genre'";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0) {
            while($row = $result->fetch_assoc())
           {?>
                <div class="card">
            <div class="image">
                <img src=<?php echo $row['img'];?> >
            </div>
            <div class="details">
                    <div class="center">
                        <h1><?php echo $row['bookname'];?><br>
                        <span>Rs.<?php echo $row['price'];?></span></h1>
                        <form action=cart.php method=post>
                        <input type=text name=tt value=<?php echo $row["bookid"];?> hidden>
                                <input type="submit" value="Add to cart">
                                </form>
                    </div>
                </div>
            </div>
            <?php
            }}

            else{
              ?>
              <div style='font-size:50px; text-align:center'> NO   DATA  <br>  AVAILABLE </div>
              <?php
            }
        ?>
</div>
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