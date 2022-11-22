<!DOCTYPE html>

<html>
    <head>
        <link rel='stylesheet' href='header.css'>
        <link rel='icon' href='Novel-O-Clock.jpg'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <style>
            .form-wrap2
			{
				width: 400px;
				height: 525px;
				box-shadow: 10px 10px 20px #BBBBBB;
				box-sizing: border-box; 
				background-color: #f9f9f9;
				padding: 20px 30px;
                position:absolute;
				
				border-radius: 18px;
				font-family: Sans-serif;
				text-align: center;
				font-size: 16px;
				color: #4d4d4d;
                float:left
			}
			
			h1{
			font-family: 'Lato', sans-serif;
			text-align: center;
			font-size: 26px;
			color: #404040;
			}
			
			input[type=text]{
			width: 100%; 
			background: #e6e6e6; 
			border: 3px solid; 
			border-color: #b3b3b3;
			border-radius: 15px; 
			padding: 13px 13px; 
			box-sizing: border-box; 
			font-size: 16px; 
			color: #000000;
			}
			
			input:hover[type=text]{
				border-color: #FFB449; 
				transition: 0.2s;
			}
			
			input[type=password]{
			width: 100%; 
			background: #e6e6e6; 
			border: 3px solid; 
			border-color: #b3b3b3;
			border-radius: 15px; 
			padding: 13px 13px; 
			box-sizing: border-box; 
			font-size: 16px; 
			color: #000000;
			}
			input:hover[type=password]{
				border-color: #FFB449;
				transition: 0.2s;
			}
			
			input[type="submit"]{
			  background-color: #ec0b00;
			  box-shadow: 0.5px 0.5px 10px #EEEEEE;
			  border: none;
			  border-radius: 15px;
			  font-family: lato;
			  font-size: 20px;
			  font-weight: bold;
			  color: #fff;
			  padding: 12px 24px;
			  text-decoration: none;
			  margin: 4px 2px;
			  cursor: pointer;
			}
			input:hover[type="submit"]{
				background-color: #b30900;
				transition: 0.2s;
			}

</style>
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
            session_start();
            $total=$_SESSION['total'];
        ?>
        

        <div class="form-wrap2">
		
		<form>
		<a href="index.php">
			<img src="Novel-O-Clock.jpg" style="width:100px">
		</a>
		
		<h3> Confirm Order </h3>
		<br><br><br><textarea name="add" rows="5" col="80" placeholder='Shipping Address'></textarea>
		<br><br><textarea name="add" rows="5" col="80" placeholder='Billing Address'></textarea>
        <br><br><input type=text name=number placeholder='Contact Number'>
		<br><br><br><input type="Submit" value = "Log in" name="loginbutton">

		<br><br><br>New here and excited? <a href="Registration.php">Join Now</a>
		</form>
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