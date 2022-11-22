<html>
    <head>
    <link rel='stylesheet' href='header.css'>
    <link rel='stylesheet' href='4css.css'>
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
      
<h1><center>Here are some top recommendations!</center></h1>
        <div class=abc>
<?php

	include_once 'dbh.inc.php';
  include_once 'db2.php';
	$bkname = mysqli_real_escape_string($conn, $_POST['book']);
	$authname = mysqli_real_escape_string($conn,$_POST['author']);
  $genname = mysqli_real_escape_string($conn,$_POST['gen']);

  $sql = "SELECT * FROM recommendation WHERE bookname='$bkname'";
  $result = mysqli_query($conn, $sql);
  $resultcheck = mysqli_num_rows($result);
  $row = $result->fetch_assoc();
  $gen = $row['genre'];
  $sql = "SELECT * FROM recommendation WHERE genre='$gen'";
  $result = mysqli_query($conn, $sql);
  $resultcheck = mysqli_num_rows($result);
  echo "<br><br>";
  if($resultcheck > 0) 
  {
      $c=0;
            while($row = $result->fetch_assoc())
            {
                if ($c<3 && $c>0)
                {
                  ?>
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
                }
                $c=$c+1;
            }
  } 


        
  if ($gen!=$genname)
    {
          $sql = "SELECT * FROM recommendation WHERE genre='$genname'";
          $result = mysqli_query($conn, $sql);
          $resultcheck = mysqli_num_rows($result);
          if($resultcheck > 0) 
          {
            $c=0;
            while($row = $result->fetch_assoc())
            {
              if ($c<3)
              {
                ?>
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
              }
              $c=$c+1;
            }
        } 
  }

  $sql = "SELECT * FROM recommendation WHERE authorname='$authname'";
  $result = mysqli_query($conn, $sql);
  $resultcheck = mysqli_num_rows($result);
  if($resultcheck > 0) 
  {
      $c=0;
            while($row = $result->fetch_assoc())
            {
                if ($c<3 )
                {
                  ?>
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
                }
                $c=$c+1;
            }
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