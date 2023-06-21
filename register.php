
<!DOCTYPE html>
<head>
    <meta charset="UFT-8">
    <title>Lusso Registraion Page</title>
    <link rel="stylesheet" href="account1_style.css">
<body>
<div class="loginbox">
        <img src="img1/account/avatar.png" class="avatar">
            <h1>Register Here</h1>
            <form action="register.php" method="POST">
                <p>Email Id</p>
                <input type="text" name="email" id="email" placeholder="Enter Email">
                <p>Password</p>
                <input type="password" name="password" id="password" placeholder="Enter Password">
                <input type="submit" name="register" value="register">
                <!-- <a href="account3.html">Lost your Password?</a><br> -->
                <a href="login.php">Already created? Login.</a>
             </form>
    </div>
    </div>
    <?php
        include_once("db.php");

        if (isset($_POST['register'])){
            $email    = $_POST['email'];
            $password = $_POST['password'];
    $sql=mysqli_query($mysqli,"INSERT INTO `user`(`email`, `password`) VALUES ('$email','$password')");

                if ($sql) {
                    echo "<br/><br/>User Registered successfully.";
                } else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                }
        
        }

        ?>
</body>
</html>