<html>

    <head>

        <title>Registration Page</title>

        <style type="text/css">
         
         body
		{
      background-size: cover;
			font-family: Tahoma, Geneva, sans-serif;
      margin: 0px;
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



         .form-wrap2
         {
            width: 33%;
            height: 90%;
            box-shadow: 10px 10px 60px #666666;
            box-sizing: border-box;
            background-color: #ffffff;
            padding: 1% 2%;
            margin-bottom:30px;
            float:right;
            right: 0%; 
            text-align: left;
			      font-family: Tahoma, Geneva, sans-serif;
            font-size: 16px;
            color: #4d4d4d;
            align:center;

         }

         input[type=password]{
            width: 80%;
            
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: groove;
            background-color: #ffffff;
            padding: 7px 7px;
            box-sizing: border-box;
            font-size: 15px;
            color: #000000;
            display: block;
         }
         input:hover[type=password]{
            border-color: #9933ff;
            transition: 0.3s;
         }

         input[type=text]{
            width: 80%;
            margin-bottom:5px;
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: groove;
            border-color: #b3b3b3;
            padding: 7px 7px;
            box-sizing: border-box;
            font-size: 15px;
            color: #000000;
         }

         input[type=number]{
            width: 80%;
            margin-bottom:5px;
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: groove;
            border-color: #b3b3b3;
            padding: 7px 7px;
            box-sizing: border-box;
            font-size: 15px;
            color: #000000;
         }

         input[type="submit"]{
        background-color: #ec0b00;
        box-shadow: 0.5px 0.5px 10px #EEEEEE;
        border: none;
        border-radius: 15px;
        font-family: lato;
        font-size: 15px;
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
       label{
        font-size: 14px;
       }

       
#footer
{
  width:100%;
  height:170px;
  background-color: #f1dbb3;
  bottom:0;
  float:bottom;
  margin-top:45%;
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

      <script>         
         function FormValidation()
            {
                var Input_name = document.Forms.name;
				var Age = document.Forms.age;
                var Emails = document.Forms.emails;
                var User = document.Forms.user;
                var Pass = document.Forms.pass;

                if (Input_name.value == "" || Input_name.value == null)
        				{
        					alert("Please enter a valid name");
        					Input_name.focus();
        					return false;
        				}
        			
        			else if (Age.value == "" || Age == null)
        				{
        					alert("Please enter a valid age");
        					Age.focus();
        					return false;
        				}
        				
        			else if (Age.value < 18)
                        {
        					alert("Sorry, you must be 18 or older to join")
        					Age.focus();
        					return false;
                        }

                    else if (Emails.value == "" || Emails.value.indexOf('@', 0) < 0 || Emails.value.indexOf('.', 0) < 0)
                        {
                            alert("Please enter a valid email");
                            Emails.focus();
                            return false;
                        }

                    else if (User.value == "" || User.value === null)
                        {
                            alert("Please enter a Username!");
                            User.focus();
                            return false;
                        }
        			
        			else if (User.value.length < 6 || User.value.length > 30)
        				{
        					alert("Username must be 6-30 characters!");
        					User.focus();
        					return false;
        				}

                    else if (isinteger(document.GetElementByName['user'][0].value) == true)
                        {
                            alert("Username must start from a letter")
                            User.focus();
                            return false;
                        }
        			
              else if (Pass.value == "" || Pass.value === null)
                        {
                            alert("Please Enter Password!");
                            Pass.focus();
                            return false;
                        }

                    
                    else
                    {
                       return true;
                    }

                 }
      </script>
   </head>

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
       
      <div class = "form-wrap2">

         <form method = "post" name = "Forms" onsubmit="return FormValidation();" action = "signup.inc.php">
            <p style="font-size: 25px"> <strong>Sign-up Today!</strong></p>
            <label for="name">Name</label><br>
            <input type="text" name="name" placeholder="Enter your name"><br><br>
            <label for="gender">Gender</label><br>
        		<input type="radio" name="gender" value="Male" checked> Male&nbsp;
        		<input type="radio" name="gender" value="Female"> Female&nbsp;
            <input type="radio" name="gender" value="Other"> Other<br><br>
            <label for="age">Age</label><br>
            <input type="number" name="age" size=20 placeholder="Enter your age"> <br><br>
            <label for="email">Email</label><br>
            <input type="text" name="emails" size=20 placeholder="abc@example.com"><br><br>
            <label for="user">Username</label><br>
            <input type="text" name="user" size=20 placeholder="Must be  at least 6 characters"><br><br>
            <label for="name">Password</label><br>
            <input type="password" name="pass" size=20 placeholder="Enter password"><br>
            <input type="submit" name = "submit" value = "Register Now!">

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