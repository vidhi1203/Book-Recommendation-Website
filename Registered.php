<!doctype html>
<html lang="en">
<head>
	<title>Registered</title>
</head>

	<style>
		
		body,html
		{
				background-image: url('background.png');
				margin:0;
		}
		#header
{
  height:200px;
  width:100%;
}
#logo
{
    float:left;
    height: 130px;
    padding-top:10px;
    padding-left:10px;
}

#options
{
    margin:30px;
    padding:20px;
    float:right;
}


.menu
{
    text-decoration: none;
    font-size: 25px;
    margin:10px;
    padding: 8px;
    border:1px solid #FFB48F;
    border-radius: 15px;
    color: #a64ac9;
    background-color: #FCCD04;
}

#header a:hover
{
    background-color: #a64ac9;
    color:#FCCD04;
}

form img 
{
	width:150px;
	height:150px;
	left:45%;
	position:relative;
}
		.form-wrap3
		{
				width: 400px;
				height: 180px;
				box-shadow: 10px 10px 10px #bfbfbf;
				box-sizing: border-box; 
				background-color: #f9f9f9;
				padding: 25px 30px;
				position: fixed; 
				left: 50%; top:50%;
				transform: translate(-50%, -50%);
				border-radius: 18px;
				font-family: Sans-serif;
				text-align: center;
				font-size: 16px;
				color: #4d4d4d;
				margin-bottom:100px;
				
		}
		
		h1
		{
			font-family: 'Lato', sans-serif;
			text-align: center;
			font-size: 26px;
			color: #404040;
		}

	
		#footer
{
	margin:top:90%;
  width:100%;
  height:170px;
  background-color: #f1dbb3;
  bottom:0%;
  position:fixed;
}

#footer >*
{
  width:auto;
  line-height: 30px;
  font-size:20px;
  padding: 0 20px;
  color:rgb(77, 85, 85);
}

#footer span
{
  color:rgb(31, 34, 34);
}

#s1
{
  float:left;
  text-align: center;
}
#s2, #s3, #s4
{
  float:left;
  margin-left:120px;
  text-align: center;
}

#s5
{
  float:right;
  text-align: center;
}
		
	</style>
<body>
<div id=header>
            <a href='header.html'>
            <img id=logo src="Novel-O-Clock.jpg"></a>
            <div id=options>
                <span class=item><a href='header.html' class='menu'>Home</a></span>
                <span class=item><a href='header.html' class='menu'>Login</a></span>
                <span class=item><a href='header.html' class='menu'>Shelves</a></span>
            </div>
        </div>

		<form action = 'header.html'>
			 <img src="tick.png" width="50" height="50"> 
			 
			<h1> You've registered successfully! </h1>
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