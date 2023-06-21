<?php
$databaseHost     = 'localhost';
$databaseName     = 'login';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$q1 = "select * from allproducts";
$query = mysqli_query($conn,$q1);
?>


<?php
	session_start();
	if(!ISSET($_SESSION['email'])){
		header('location:index1.php');
	}
?>





















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css" integrity="sha512-+oRH6u1nDGSm3hH8poU85YFIVTdSnS2f+texdPGrURaJh8hzmhMiZrQth6l56P4ZQmxeZzd2DqVEMqQoJ8J89A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">


</head>

<body>

    <section id="header">
        <a href="#"><img src="img1/Logo1.png" class="logo" alt=""></a>
        
        <div>
            <ul id="navbar">
                <li><a href="index1.php">Home</a></li>
                <li><a class="active" href="shop1.php">Shop</a></li>
                <li><a href="blog1.php">Blog</a></li>
                <li><a href="about1.php">About</a></li>
                <li><a href="contact1.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
                <?php
				require'db.php';
 
 
				$query1 = mysqli_query($conn, "SELECT * FROM `user` WHERE `Email`='$_SESSION[email]'") or die(mysqli_error());
				$fetch1 = mysqli_fetch_array($query1);
 
				echo "<h4 class='text-success'>".$fetch1['Email']."</h4>";
			    ?>
                <li><a href="Cart1.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
            </ul>
        </div>

    
    </section>

    <section id="page-header">
        <h2>Thousands of Products & 5000+ Brands.</h2>
        <p>Lusso is now in India. Save more with coupons & get upto 70% off with exciting offers.</p>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Modern Collection</h2>
        <p>Exclusively selected by Lusso</p>

        <div class="pro-container">
       
            <div class="pro">
                <img src="img1/products/f1.jpg" alt="">
                <div class="des">
                    <span>Lusso's Special</span>
                    <?php
        $r=mysqli_fetch_array($query)

               ?>
                    <h5><?php echo $r['pname'];?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.<?php echo $r['price'];?></h4>
       
                </div>
                <form action="shop1.php?action=add&id=<?php echo $r["id"];?>" method="POST">
                    <input type="hidden" name="pname" value="<?php  echo $r['pname'];?>"/>
                    <input type="hidden" name="price" value="<?php  echo $r['price'];?>"/>
                    <input type="hidden" name="pcode" value="<?php  echo $r['pcode'];?>"/>
                    <input type="hidden" name="userid" value="<?php echo $fetch1['Email'];?>"/>
                    <input type="submit" value="Add to cart" name="Add">
                    <input type="number" value="1" name="quantity">Quantity
                </form>
                <!-- <a href="sproduct1.php"><i class="fal fa-shopping-cart cart"></i></a> -->
            </div>

       
            <div class="pro">
                <img src="img1/products/f2.jpg" alt="">
                <div class="des">
                    <span>Lusso's Special</span>
                    <?php
                 $r=mysqli_fetch_array($query)
                   ?>
                    <h5><?php echo $r['pname'];?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.<?php echo $r['price'];?></h4>
                    <?php
        ?>
                </div>
                <form action="shop1.php?action=add&id=<?php echo $r["id"];?>" method="POST">
                    <input type="hidden" name="pname" value="<?php  echo $r['pname'];?>"/>
                    <input type="hidden" name="price" value="<?php  echo $r['price'];?>"/>
                    <input type="hidden" name="pcode" value="<?php  echo $r['pcode'];?>"/>
                    <input type="hidden" name="userid" value="<?php echo $fetch1['Email'];?>"/>
                    <input type="submit" value="Add to cart" name="Add">
                    <input type="number" value="1" name="quantity">Quantity
                </form>
            </div>
       
            <div class="pro">
                <img src="img1/products/f3.jpg" alt="">
                <div class="des">
                    <span>Lusso's Special</span>
                    <?php
         $r=mysqli_fetch_array($query)
               ?>
                    <h5><?php echo $r['pname'];?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.<?php echo $r['price'];?></h4>

                </div><form action="shop1.php?action=add&id=<?php echo $r["id"];?>" method="POST">
                    <input type="hidden" name="pname" value="<?php  echo $r['pname'];?>"/>
                    <input type="hidden" name="price" value="<?php  echo $r['price'];?>"/>
                    <input type="hidden" name="pcode" value="<?php  echo $r['pcode'];?>"/>
                    <input type="hidden" name="userid" value="<?php echo $fetch1['Email'];?>"/>
                    <input type="submit" value="Add to cart" name="Add">
                    <input type="number" value="1" name="quantity">Quantity
                </form>
                <!---<a href="#"><i class="fal fa-shopping-cart cart"></i></a>-->
            </div>
   
            <div class="pro">
                <img src="img1/products/f4.jpg" alt="">
                <div class="des">
                    <span>Lusso's Special</span>
                    <?php
         $r=mysqli_fetch_array($query)
               ?>
                    <h5><?php echo $r['pname'];?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.<?php echo $r['price'];?></h4>
                </div>
                <form action="shop1.php?action=add&id=<?php echo $r["id"];?>" method="POST">
                    <input type="hidden" name="pname" value="<?php  echo $r['pname'];?>"/>
                    <input type="hidden" name="price" value="<?php  echo $r['price'];?>"/>
                    <input type="hidden" name="pcode" value="<?php  echo $r['pcode'];?>"/>
                    <input type="hidden" name="userid" value="<?php echo $fetch1['Email'];?>"/>
                    <input type="submit" value="Add to cart" name="Add">
                    <input type="number" value="1" name="quantity">Quantity
                </form>
                <!--<a href="#"><i class="fal fa-shopping-cart cart"></i></a>-->
            </div>
            <div class="pro">
                <img src="img1/products/f5.jpg" alt="">
                <div class="des">
                    <span>Lusso's Special</span>
                    <?php
         $r=mysqli_fetch_array($query)
               ?>
                    <h5><?php echo $r['pname'];?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.<?php echo $r['price'];?></h4>
                </div>
                <form action="shop1.php?action=add&id=<?php echo $r["id"];?>" method="POST">
                    <input type="hidden" name="pname" value="<?php  echo $r['pname'];?>"/>
                    <input type="hidden" name="price" value="<?php  echo $r['price'];?>"/>
                    <input type="hidden" name="pcode" value="<?php  echo $r['pcode'];?>"/>
                    <input type="hidden" name="userid" value="<?php echo $fetch1['Email'];?>"/>
                    <input type="submit" value="Add to cart" name="Add">
                    <input type="number" value="1" name="quantity">Quantity
                </form>
                <!--<a href="#"><i class="fal fa-shopping-cart cart"></i></a>-->
            </div>
            <div class="pro">
                <img src="img1/products/f6.jpg" alt="">
                <div class="des">
                    <span>Lusso's Special</span>
                    <?php
         $r=mysqli_fetch_array($query)
               ?>
                    <h5><?php echo $r['pname'];?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.<?php echo $r['price'];?></h4>
                </div>
                <form action="shop1.php?action=add&id=<?php echo $r["id"];?>" method="POST">
                    <input type="hidden" name="pname" value="<?php  echo $r['pname'];?>"/>
                    <input type="hidden" name="price" value="<?php  echo $r['price'];?>"/>
                    <input type="hidden" name="pcode" value="<?php  echo $r['pcode'];?>"/>
                    <input type="hidden" name="userid" value="<?php echo $fetch1['Email'];?>"/>
                    <input type="submit" value="Add to cart" name="Add">
                    <input type="number" value="1" name="quantity">Quantity
                </form>
            </div>
            <div class="pro">
                <img src="img1/products/f7.jpg" alt="">
                <div class="des">
                    <span>Lusso's Special</span>
                    <?php
         $r=mysqli_fetch_array($query)
               ?>
                    <h5><?php echo $r['pname'];?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.<?php echo $r['price'];?></h4>
                </div>
                <form action="shop1.php?action=add&id=<?php echo $r["id"];?>" method="POST">
                    <input type="hidden" name="pname" value="<?php  echo $r['pname'];?>"/>
                    <input type="hidden" name="price" value="<?php  echo $r['price'];?>"/>
                    <input type="hidden" name="pcode" value="<?php  echo $r['pcode'];?>"/>
                    <input type="hidden" name="userid" value="<?php echo $fetch1['Email'];?>"/>
                    <input type="submit" value="Add to cart" name="Add">
                    <input type="number" value="1" name="quantity">Quantity
                </form>
            </div>
            <div class="pro">
                <img src="img1/products/f8.jpg" alt="">
                <div class="des">
                    <span>Lusso's Special</span>
                    <?php
         $r=mysqli_fetch_array($query)
               ?>
                    <h5><?php echo $r['pname'];?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.<?php echo $r['price'];?></h4>  
                </div>
                <form action="shop1.php?action=add&id=<?php echo $r["id"];?>" method="POST">
                    <input type="hidden" name="pname" value="<?php  echo $r['pname'];?>"/>
                    <input type="hidden" name="price" value="<?php  echo $r['price'];?>"/>
                    <input type="hidden" name="pcode" value="<?php  echo $r['pcode'];?>"/>
                    <input type="hidden" name="userid" value="<?php echo $fetch1['Email'];?>"/>
                    <input type="number" value="1" name="quantity">Quantity
                    <input type="submit" value="Add to cart" name="Add">
                </form>
            </div>
     
        </div>
      
    </section>

  


    <section id="NewsLetter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up and Become a part of our member</h4>
        <P>Get E-mail updates about our latest shop and <span>Special offers.</span> </P>

    </div>

    <div class="From">
        <input type="text" placeholder="Your email address">
        <button class="normal">Sign Up</button>
    </div>
    </section>

<footer class="section-p1">
    <div class="col">
        <img class="logo" src="img1/Logo1.png" alt=" ">
        <h4>Contact</h4>
        <p><strong>Address:</strong> 525 Parkstreet Road,Street 32, kolkata-700001 </p>
        <p><strong>Phone:</strong> 91+ 033-1800 58585585 / 1800-52525-0202</p>
        <p><strong>Hours:</strong> 10:00-18:00, Mon-fry</p>
        <div class="follow">
            <h4> Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>

    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contect Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>
   <div class="Col Install">
    <h4>Install App</h4>
    <p>From App Store or Google Play</p>
    <div class="row">
        <img src="img1/pay/app.jpg" alt="">
        <img src="img1/pay/play.jpg" alt="">

   </div>
       <p>Secured Payment Getways</p>
       <img src="img1/pay/pay.png" alt="">
    </div>
    <div class="copyright">
        <p>@ 2022, Lusso - Ecommerce Website Created by Group - R for 5th Semester.</p> 
     </div>
</footer>


    <script src="script1.js"></script>
</body>
<?php
        include("db.php");

        if (isset($_POST['Add'])){
            $pname    = $_POST['pname'];
            $price = $_POST['price'];
            $pcode = $_POST['pcode'];
            $quantity=$_POST['quantity'];
            $userid=$_POST['userid'];
    $sql=mysqli_query($mysqli,"INSERT INTO `cart`(`pname`, `price`, `pcode`,`quantity`,`emailid`) VALUES ('$pname','$price','$pcode','$quantity','$userid')");

                if ($sql) {
                    echo "<br/><br/>Added to Cart  successfully.";
                } else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                }
        
        }

        ?>
</html>


