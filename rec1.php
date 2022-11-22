<html>
    <head>
    <link rel='stylesheet' href='header.css'>
        <link rel='icon' href='Novel-O-Clock.jpg'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <style>
            form img
            {
                width:200px;
                height:300px;
                margin-right:38px;
                box-shadow: -5px -5px 20px #a7aab4, 5px 5px 20px #BABECC;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
            }
            form span
            {
                color: #A64AC9;
    text-shadow: 1px 1px 1px #FFF;
    font-size:40px;
            }
            .g
            {
                font-size:25px;
                color:black;
                margin-right:149px;
            }
            .sub
            {
                font-size:40px;
                color:#A64AC9;
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
<form action="db7.php" method="post">
    <center>
    <span>Books you've read </span><br><br>
<input type=radio name=book value='To Kill a Mockingbird'> <img src='book-cover-To-Kill-a-Mockingbird-many-1961.jpg'>
<input type=radio name=book value='Life of Pi'> <img src='life-of-pi.jpg'>
<input type=radio name=book value='Pride and Prejudice'> <img src='pandp.jpg'>
<input type=radio name=book value='Such a Fun Age'> <img src='safa.jpg'>
<input type=radio name=book value='The Fault in Our Stars'> <img src='fios.jpg'>
<br><br><br><br><br><br>
<span>An Author you adore </span><br><br>
<input type=radio name=author value='1'> <img src='lavryle.jpg'>
<input type=radio name=author value='Jack London'> <img src='jack london.jpg'>
<input type=radio name=author value='Jenny Offill'> <img src='Jenny_Offill.jpg'>
<input type=radio name=author value='Lois Lowry'> <img src='lois.jpg'>
<input type=radio name=author value='Gillian Flyn'> <img src='Gillian-Flynn-American.jpg'>
<br><br><br><br><br><br>
<span>A Genre you'd like to explore more </span><br><br>
<input type=radio name=gen value='Thriller'> <span class=g>Thriller</span>
<input type=radio name=gen value='Romance'> <span class=g>Romance</span>
<input type=radio name=gen value='Fiction'> <span class=g>Fiction</span>
<input type=radio name=gen value='Young Adults'> <span class=g>Young Adults</span>
<input type=radio name=gen value='Action And Adventure'> <span class=g>Action</span>
<br><br><br><br><br>
<input type="submit" class=sub name = "submit" value = "RECOMMEND!">
        </center>
</form>

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