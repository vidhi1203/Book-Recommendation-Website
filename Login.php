<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<title>Login Page</title>
		
		<style>
		
			body{
			background-image: url('background.png');
			height: 100%;
			background-repeat: no-repeat;
			background-size: cover;
			color: #39004d;
			}
			.form-wrap2
			{
				width: 400px;
				height: 525px;
				box-shadow: 10px 10px 20px #BBBBBB;
				box-sizing: border-box; 
				background-color: #f9f9f9;
				padding: 20px 30px;
				position: fixed; 
				left: 50%; top:50%;
				transform: translate(-50%, -50%);
				border-radius: 18px;
				font-family: Sans-serif;
				text-align: center;
				font-size: 16px;
				color: #4d4d4d;
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
		
		<div class="form-wrap2">
		
		<form action="login.inc.php" method="POST" name="loginform">
		<a href="index.php">
			<img src="Novel-O-Clock.jpg" style="width:100px">
		</a>
		
		<h3> Welcome Back </h3>
		The best of books with added features awaits your login.
		<br><br><br><input type="text" placeholder = "Username/Email" name="usernamebox" required oninvalid="this.setCustomValidity('Please enter a username/email')" oninput="setCustomValidity('')">
		<br><br><input type="password" placeholder = "Password" name="passwordbox" required="" oninvalid="this.setCustomValidity('Please enter a password')" oninput="setCustomValidity('')">
		<br><br><br><input type="Submit" value = "Log in" name="loginbutton">

		<br><br><br>New here and excited? <a href="Registration.php">Join Now</a>
		</form>
		</div>



	</body>
</html>