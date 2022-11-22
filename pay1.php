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
				box-shadow: 5px 5px 5px 5px #BBBBBB;
				box-sizing: border-box; 
				background-color: #f9f9f9;
				padding: 20px 30px;
                margin-left:170px;
                margin-top:30px;
				border-radius: 18px;
				font-family: Sans-serif;
				text-align: center;
				font-size: 16px;
				color: #4d4d4d;
                float:left;
			}
			
			h1{
			font-family: 'Lato', sans-serif;
			text-align: center;
			font-size: 26px;
			color: #404040;
			}
			
			textarea, input[type=text]{
			background: #e6e6e6; 
			border: 3px solid; 
			border-color: #b3b3b3;
			border-radius: 15px; 
			padding: 13px 13px; 
			box-sizing: border-box; 
			font-size: 16px; 
			color: #000000;
			}
			
			textarea:hover, input:hover[type=text]{
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
        <?php 
        session_start();
        $username=$_SESSION['u_name'];
        $email=$_SESSION['u_email'];
        $total=$_SESSION['total'];
        ?>
    <form action="pay_back.php"  method='POST' name='ContactForm'>
		<div class="form-wrap2">
		
		<h3> Shipping Details </h3>
        <i>Name:</i><br> <?php echo $username; ?> <br><br>
        <i>Email:</i><br> <?php echo $email; ?> <br><br>
        
		<textarea name="sadd" rows="4" col="80" placeholder='Shipping Address'></textarea><br><br>
        
        <textarea name="badd" rows="4" col="80" placeholder='Billing Adress'></textarea>
        <br><br><input type=text name=number placeholder='Contact Number'>

		
		</div>

        <div class="form-wrap2">
	
        
        <h3> Payment Details </h3>
        <i>Total Amount: <br></i>
        Rs. <?php echo $total;?><br><br>
        <i>Payment method:<br></i>
                    <input type="radio" name="pay" value="cod" > Cash On delivery<br>
                    <input type="radio" name="pay" value="gpay" > GPay <br>
        			<input type="radio" name="pay" value="paytm"> PayTM <br>
					<input type="radio" name="pay" value="credit"> Credit Card <br>
                    <input type="radio" name="pay" value="debit"> Debit Card <br>
                    <input type="radio" name="pay" value="wapay"> Whatsapp Pay <br>
                    <input type="radio" name="pay" value="gift"> Gift Cards <br>
<br><br>
       <input type=submit value='Generate Bill'>
                   <br><br><br>
                   Want to make changes?<br>
       <a id=cart href=shopcart.php> VIEW CART </a>
		</div>

		</form>

        

	</body>
</html>