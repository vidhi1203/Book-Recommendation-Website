<!DOCTYPE html>

<?php
include_once 'dbh.inc.php';
session_start();
$userid=$_SESSION['u_username'];
?>

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
                <span class=item><a href='shopcart.php' class='menu'>Cart</a></span>
                <span class=item><a href='header.html' class='menu'>Log Out</a></span>
            </div>
        </div>
        <div style='text-align:center; font-size:30px; color:aqua; -webkit-text-stroke: 1px black;'>
        WELCOME,
        <?php echo $userid ?>!
        </div>

        <div id=slideset1>
          <div>
            This above all : To thine own self be true, And it must follow, as the night the day, Thou canst not then be false to any man. <br><span class='au'> - William Shakespeare, Hamlet</span>
          </div>
          <div>
            It is only with the heart that one can see rightly ; what is essential is invisible to the eye.<br><span class='au'> - Antoine de Saint-Exupery, The Little Prince</span>
          </div>
          <div>
            I am no bird ; and no net ensnares me : I am a free human being with an independent will, which I now exert to leave you.<br><span class='au'> - Charlotte Bronte, Jane Eyre</span>
          </div>
        </div>

        <br><br><br>

        
        <br><br><br>
      
        <div id=genre>
          <div class=g1>
            RomComs
          </div>
          <div class=g2>
            SciFi
          </div>
          <div class=g3>
            Auto-Biography
          </div>
          <div class=g4>
            Biography
          </div>
          <div class=g5>
            Non Fiction
          </div>
          <div class=g6>
            Fiction
          </div>
          <div class=g7>
            Narrative
          </div>
          <div class=g8>
            Children
          </div>
        </div>

        <div id=discount>
          <div class=d1><span class=number>10%</span> off<br> on Indian classics <br>Hardcover books</div>
          <div class=d2><span class=number>20%</span> off<br> on a Gross Total of<br>Rs. 2000 or above</div>
          <div class=d3><span class=number>50%</span> off<br> on a Gross total of<br>Rs. 4000 or above</div>
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