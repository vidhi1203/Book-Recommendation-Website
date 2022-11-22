<?php
session_start();
?>

<html>

<head>
    <title>Shopping Cart</title>
    <link rel='stylesheet' href='header.css'>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            overflow-x: hidden;
        }

        .cart {
            width: 80%;
            padding: 2%;
            height: 80%;
            margin: auto;
        }

        .title {
            background: #fff;
            padding: 1%;
        }

        .bill {
            background: #fff;
            width: 60%;
            padding: 1%;
            height: 23%;
            margin: auto;
            margin-top: 1%;
        }

        .title h1 {
            font-size: 31px;
            font-weight: 300;
            padding: 10px 0;
            position: relative;
            margin: 0;
        }

        .cart h1 {
            font-weight: 300;
        }

        .product a {
            color: #53b5aa;
            text-decoration: none
        }

        .product.remove {
            margin-left: 980px !important;
            opacity: 0;
        }

        .prods {
            background: #eee;
            padding: 1%;
        }

        .product {
            border: 1px solid #eee;
            margin: 20px 0;
            width: 100%;
            height: 195px;
            position: relative;
        }

        .product img {
            width: 100%;
            height: 100%;
        }

        .product header,
        .product .content {
            background-color: #fff;
            border: 1px solid #ccc;
            border-style: none none solid none;
            float: left;
        }

        .product .content {
            font-size: 18px;
        }

        .product header {
            background: #000;
            margin: 0 1% 20px 0;
            overflow: hidden;
            padding: 0;
            position: relative;
            width: 24%;
            height: 195px;
        }

        .product header:hover img {
            opacity: .7;
        }

        .product header:hover h3 {
            bottom: 73px;
        }

        .product header h3 {
            background: #53b5aa;
            color: #fff;
            font-size: 22px;
            font-weight: 300;
            line-height: 49px;
            margin: 0;
            padding: 0 30px;
            position: absolute;
            bottom: -50px;
            right: 0;
            left: 0;
            -webkit-transition: bottom .2s linear;
        }

        .remove {
            cursor: pointer;
            color: #000;
        }

        .product .content {
            box-sizing: border-box;
            height: 140px;
            padding: 0 20px;
            width: 75%;
        }

        .product h1 {
            color: #53b5aa;
            font-size: 25px;
            font-weight: 300;
            margin: 17px 0 5px 0;
        }

        .product h2 {
            color: #53b5aa;
            margin-top: 0;
            margin-bottom: 0;
            font-size: 20px;
            font-weight: 300;
        }

        .product footer.content {
            height: 50px;
            margin: 6px 0 0 0;
            padding: 0;
        }

        .product footer .price {
            background: #fcfcfc;
            color: #000;
            float: right;
            font-size: 15px;
            font-weight: 300;
            line-height: 49px;
            margin: 0;
            padding: 0 30px;
        }

        .product footer .full-price {
            background: #53b5aa;
            color: #fff;
            float: right;
            font-size: 22px;
            font-weight: 300;
            line-height: 49px;
            margin: 0;
            padding: 0 30px;
        }

        .qt,
        .qt-plus,
        .qt-minus {
            display: block;
            float: left;
        }

        .qt {
            font-size: 19px;
            line-height: 50px;
            width: 70px;
            text-align: center;
        }

        .qt-plus,
        .qt-minus {
            background: #fcfcfc;
            border: none;
            font-size: 30px;
            font-weight: 300;
            height: 100%;
            padding: 0 20px;
        }

        .qt-plus:hover,
        .qt-minus:hover {
            background: #53b5aa;
            color: #fff;
            cursor: pointer;
        }

        .qt-plus {
            line-height: 50px;
        }

        .qt-minus {
            line-height: 47px;
        }

        .bill h1 {
            border: 1px solid #ccc;
            border-style: none none solid none;
            font-size: 24px;
            font-weight: 300;
            margin: 0 0 7px 0;
            padding: 14px 40px;
            text-align: center;
        }

        .bill h2 {
            font-size: 24px;
            font-weight: 300;
            margin: 10px 0 0 0;
        }

        .bill h3 {
            font-size: 19px;
            font-weight: 300;
            margin: 15px 0;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .btn {
            background: #53b5aa;
            border: 1px solid #999;
            border-style: none none solid none;
            cursor: pointer;
            display: block;
            color: #fff;
            font-size: 20px;
            font-weight: 300;
            padding: 16px 0;
            width: 290px;
            text-align: center;
        }

        .btn:hover {
            color: #fff;
            background: #429188;
        }
    </style>




</head> 

<?php
$userid=$_SESSION['u_user_id'];
require_once 'db2.php';
$sql = "SELECT * FROM cart WHERE userid='$userid'";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
if($resultcheck > 0) {
    while($row = $result->fetch_assoc())
   {
       $a1=$row['bookname'];
?>
      <center>
    <div class="card">
            <div class="image">
                <img src=<?php echo $row["img"]?>  width=200px>
                </div>
            <div class="details">
                <div class="center">
                    <h1><?php echo $row["bookname"]?><br><span>Rs.<?php echo $row["price"]?></span></h1>
                    
                </div>
            </div>
        </div><br><br><br>

    <?php
    }}
?>
<body>
<div id=header>
            <a href='header.html'>
            <img id=logo src="Novel-O-Clock.jpg"></a>
            <div id=options>
            <span class=item><a href='home_login.php' class='menu'>Home</a></span>
                <span class=item><a href='rec1.php' class='menu'>Recommendation</a></span>
                <span class=item><a href='bookform.php' class='menu'>Shelves</a></span>
                <span class=item><a href='shopping_cart.php' class='menu'>Cart</a></span>
                <span class=item><a href='header.html' class='menu'>Log Out</a></span>
            </div>
        </div>
    <div class="cart">
        <div class="title">
            <h1>Shopping cart</h1>
        </div>
        <div class="prods">
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/3.jpg" alt="">
                        <h3>Remove product</h3>
                    </a>
                </header>
                <div class="content">
                    <a href="">
                        <h1><?php echo $a1?></h1>
                    </a>
                    <h2>Author Name</h2>
                    Description
                </div>
                <footer class="content">
                    <span class="qt-minus">-</span>
                    <span class="qt">1</span>
                    <span class="qt-plus">+</span>
                    <h2 class="full-price">
                        Rs. 399
                    </h2>
                    <h2 class="price">
                        Rs. 399
                    </h2>
                </footer>
            </article>
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/3.jpg" alt="">
                        <h3>Remove product</h3>
                    </a>
                </header>
                <div class="content">
                    <a href="">
                        <h1>Book Name</h1>
                    </a>
                    <h2>Author Name</h2>
                    Description
                </div>
                <footer class="content">
                    <span class="qt-minus">-</span>
                    <span class="qt">1</span>
                    <span class="qt-plus">+</span>
                    <h2 class="full-price">
                        Rs. 399
                    </h2>
                    <h2 class="price">
                        Rs. 399
                    </h2>
                </footer>
            </article>
        </div>
    </div>
    <div class="bill">
        <div class="left">
            <h2 class="subtotal">Subtotal: Rs.<span>500</span></h2>
            <h3 class="tax">Taxes: Rs.<span>8.2</span></h3>
            <h3 class="shipping">Shipping: Rs.<span>0.00</span></h3>
        </div>
        <div class="right">
            <h1 class="total">Total: Rs.<span>600</span></h1>
            <a class="btn">Checkout</a>
        </div>
    </div>
    <br>
    <div>
        ndeinjew
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
</body>

</html>