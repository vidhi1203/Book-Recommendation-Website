<html>
    <head>
        <link rel='stylesheet' href='cart1.css'>
        <title> CART </title>
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

    <div class="cart">
        <div class="title">
            <h1>Shopping cart</h1>
        </div>
        <div class="prods">
            <?php 
                $total=0;
                session_start();
                $userid=$_SESSION['u_user_id'];
                require_once 'db2.php';
                $sql = "SELECT * FROM cart WHERE userid='$userid'";
                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);
                if($resultcheck != 0) {
                    while($row = $result->fetch_assoc())
                {
            ?>
                    <article class="product">
                        <header>
                            <img src=<?php echo $row['img'];?> alt="">
                            <form action=remove.php method=post>
                               <input type=text name=tt value=<?php echo $row["img"];?> hidden>
                               <h3> <input type="submit" value="REMOVE" style='font-size:20px; margin-left:10px;'> <h3>
                </form>
                        </header>
                        <div class="content">
                            <a href="">
                                <h1><?php echo $row['bookname']?></h1>
                            </a>
                            <h2><?php echo $row['authorname']?></h2>
                            
                        </div>
                        <footer class="content">
                        
                            <h2 class="full-price"> Rs.
                                <?php 
                                echo $row['price'];
                                $total+=$row['price'];
                                ?>
                            </h2>
                            <h2 class="price">
                        Amount:
                    </h2>
                        </footer>
                    </article>
                    <?php } } ?>
        </div>
    </div>
    <br> <br><br><br><Br>
    <div class="bill">
        <div class="left">
            <h2 class="subtotal"><br> <br><br><br><Br>Subtotal: Rs.<span><?php echo $total ?></span></h2>
            <h3 class="tax">Taxes: Rs.
                <span>
                    <?php 
                    $t=$total*12/100;
                    echo $t;
                    ?>
                    </span>
            </h3>
            <h3 class="shipping">Shipping: Rs.<span>100.00</span></h3>
        </div>
        <div class="right">
            <h1 class="total"><br> <br><br><br><Br>Total: Rs.
            <span>
                <?php
                echo ($total+$t+100);
                ?>
            </span></h1>
            <a class="btn" href='pay1.php'>Checkout</a><br> <br><br><br><Br>
        </div>
    </div>
    <br>

    <?php
    $_SESSION['total']=$total+$t+100;
    ?>
                </body>
                </html>





        
