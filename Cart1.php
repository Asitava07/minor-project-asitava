<?php
$databaseHost     = 'localhost';
$databaseName     = 'login';
$databaseUsername = 'root';
$databasePassword = '';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>
<?php
	session_start();
	if(!ISSET($_SESSION['email'])){
		header('location:Cart1.php');
	}
?>

<?php
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// $q1 =mysqli_query($conn, "SELECT * FROM `cart` WHERE `userid`='$_SESSION[email]'");
$q1="SELECT * from cart WHERE emailid= '" .$_SESSION['email'] ."'";
$query = mysqli_query($conn,$q1);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devvice-width, initial-scale=1.0">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="shop1.php">Shop</a></li>
                <li><a href="blog1.php">Blog</a></li>
                <li><a href="about1.php">About</a></li>
                <li><a href="contact1.php">Contact</a></li>
                <li><a href="login.php">Logout</a></li>
                <?php
				require'db.php';
 
 
				$query1 = mysqli_query($conn, "SELECT * FROM `user` WHERE `Email`='$_SESSION[email]'") or die(mysqli_error());
				$fetch1 = mysqli_fetch_array($query1);
 
				echo "<h4 class='text-success'>".$fetch1['Email']."</h4>";
			    ?>
                <li><a class="active" href="Cart1.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
            </ul>
        </div>

    
    </section>

    <section id="page-header"  class="about-header">
        <h2>#KnowUs</h2>
        <p>Lorem ipsum dolor sit amet, consecture</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal<td>
                </tr>
            </thead>
            <body>
            <?php
        while($r=mysqli_fetch_array($query)){

               ?>
                <tr>
                    <td><a href="delete.php?id=<?php echo $r['id'];?>">Delete</a>
                    <!-- <td><img src="img1/products/f1.jpg"></td> -->
                    <td><?php echo $r['pname'];?></td>
                    <td><?php echo $r['price'];?></td>
                    <td><?php echo $r['quantity'];?></td>
                    <td><?php echo $r['price']*$r['quantity'];?></td>
                    <!-- <td></td> -->
                </tr>
                <?php
            }
        ?>
                
            <button class="normal"><a href="checkout.php">Proceed to Checkout</a></button>
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
        <p>@ 2022, Ecommerce Website Created by Group - I </p> 
     </div>
    </footer>


    <script src="script1.js"></script>
</body>
</html>




