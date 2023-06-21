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
    
            <ul id="navbar">
                <li><a class="active" href="index1.php">Home</a></li>
                <li><a href="shop1.php">Shop</a></li>
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

    <section id="hero">
        <h4>नमस्ते!</h4>
        <h1>Welcome to Lusso, India's passion</h1>
        <h2>Thousands of Products & 5000+ Brands.</h2>
        <p>Lusso is now in India. Save more with coupons & get upto 70% off with exciting offers.</p>
        <button>SHOP NOW</button>
    </section>

    <section id="feature"  class="section-p1">
        <div class="fe-box">
            <img src="img1/features/f1.png" alt="">
            <h6> Free Shipping </h6>
        </div>
        <div class="fe-box">
            <img src="img1/features/f2.png" alt="">
            <h6> Online Order </h6>
        </div>
        <div class="fe-box">
            <img src="img1/features/f3.png" alt="">
            <h6> Save Money </h6>
        </div>
        <div class="fe-box">
            <img src="img1/features/f4.png" alt="">
            <h6> Week Mania </h6>
        </div>
        <div class="fe-box">
            <img src="img1/features/f5.png" alt="">
            <h6> Happy Hours & Extra Deals </h6>
        </div>
        <div class="fe-box">
            <img src="img1/features/f6.png" alt="">
            <h6> 24/7 Support </h6>
        </div>
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
                <a href="shop1.php"><i class="fal fa-shopping-cart cart"></i></a>
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
                <a href="shop1.php"><i class="fal fa-shopping-cart cart"></i></a>
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
             
                </div>
                <a href="shop1.php"><i class="fal fa-shopping-cart cart"></i></a>
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
                <a href="shop1.php"><i class="fal fa-shopping-cart cart"></i></a>
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
                <a href="shop1.php"><i class="fal fa-shopping-cart cart"></i></a>
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
                <a href="shop1.php"><i class="fal fa-shopping-cart cart"></i></a>
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
                <a href="shop1.php"><i class="fal fa-shopping-cart cart"></i></a>
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
                <a href="shop1.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
     
        </div>
      
    </section>

    <section id="banner" class="section-m1">
        <h4>Lusso's GORGEOUS SALE is Here!</h4>
        <h2>GET Minimum <span>10% Off</span> on Sunglass & Other Accessories</h2>
        <button class="normal"> Explore More</button>

    </section>
    
    <section id="product1" class="section-p1">
        <h2>Other Featured Products in Lusso</h2>
        <p>Get Beauty Products and Other Accessories in Our Website</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img1/products/n1.jpeg" alt="">
                <div class="des">
                    <span>Smart watches</span>
                    <h5>Starting at just Rs.1999</h5>
                    <span>Boat, Noise, Firebolt & many brands. more+ ..</span>
                </div>
            </div>

            <div class="pro">
                <img src="img1/products/n2.jpg" alt="">
                <div class="des">
                    <span>Grooming & Beauty Kits</span>
                    <h5>Starting just @ Rs.199</h5>
                    <h4>500+ Brands available</h4>
                </div>
            </div>

            <div class="pro">
                <img src="img1/products/n3.jpg" alt="">
                <div class="des">
                    <span>Gear Up with Our</span>
                    <h5>Headphone & Accessories Collections</h5>
                    <h4>Starting @ Rs.999.00</h4>
                </div>
            </div>

            <div class="pro">
                <img src="img1/products/n4.png" alt="">
                <div class="des">
                    <span>Lusso's Special</span>
                    <h5>Jewellery & Necklaces</h5>
                    <h4>With Wedding Collection</h4>
                </div>
            </div>

            <div class="pro">
                <img src="img1/products/n5.jpg" alt="">
                <div class="des">
                    <h5>Full Sleeve Shirts</h5>
                    <h4>Starting at Just Rs.699</h4>
                </div>
            </div>

            <div class="pro">
                <img src="img1/products/n6.jpg" alt="">
                <div class="des">
                    <span>Lusso's Exclusive</span>
                    <h5>Men's Boxers and Inners</h5>
                    <h4>Starting @ Rs. 499</h4>
                </div>
            </div>

            <div class="pro">
                <img src="img1/products/n7.jpeg" alt="">
                <div class="des">
                    <span>New Arrival</span>
                    <h5>Trendy Hoodies For Women</h5>
                    <h4>Starting @ Rs.899.00</h4>
                </div>
            </div>

            <div class="pro">
                <img src="img1/products/n8.jpg" alt="">
                <div class="des">
                    <h5>Lusso's Clearence Sale</h5>
                    <h4>Get Items at Just Rs.399.00</h4>  
                </div>
            </div>
    -->
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals of Lusso</h4>
            <h2>Buy 1 Get 1 Offer is here!!</h2>
            <span>Special discounts on selected products.</span>
            <a href="blog1.php"><button class="white">Learn More</button></a>
        </div>
        <div class="banner-box banner-box2">
            <h4>Lusso presents</h4>
            <h2>END of Season Sale</h2>
            <span>Flat 15% Off in Tshirts and Trousers of selected brands</span>
            <button class="white">Collection</button>
        </div>

    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>Grooming and Beauty Products</h2>
            <h3>Up To 20% Off in all cosmetics</h3>
            <button class="white">Explore More+</button>
        </div>
        <div class="banner-box banner-box2">
            <h2>FOOTWEAR COLLECTION</h2>
            <span>Nike, Puma, Adidas and 1000+ Brands</span>
            
        </div>
        <div class="banner-box banner-box3">
            <h2>Winter Collection</h2>
            <h3>Trendy winter collection with 500+ brands</h3>
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
        <p><strong>Hours:</strong> 10:00 AM - 06:00 PM (Monday - Saturday)</p>
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
        <a href="#">Contact Us</a>
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
</html>




