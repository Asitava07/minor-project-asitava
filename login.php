


<!-- <!DOCTYPE html>
<head>
    <meta charset="UFT-8">
    <title>Lusso Login Page</title>
    <link rel="stylesheet" href="account1_style.css">
<body>
    <div class="loginbox">
        <img src="img1/account/avatar.png" class="avatar">
            <h1>Login Here</h1>
            <form method="post" action="#">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="pass" placeholder="Enter Password">
                <input type="submit" name="" value="Login">
                <a href="account3.html">Lost your Password?</a><br>
                <a href="account2.html">Don't have an account? Register Here.</a>
             </form>
    </div>
    </div>
</body>
</head>
</html> -->


<?php


session_start();
$databaseHost     = 'localhost';
$databaseName     = 'login';
$databaseUsername = 'root';
$databasePassword = '';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($conn->connect_error){
    header("Connection failed: " . $conn->connect_error);
    
}

if (isset($_POST['login'])) {
    
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "select 'email', 'password' from user
        where email='$email' and password='$password'");

    $user_matched = mysqli_num_rows($result);

    if ($user_matched > 0) {

        $_SESSION["email"] = $email;
        header("location:index1.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}

?>
<!DOCTYPE html>
<head>
    <meta charset="UFT-8">
    <title>Lusso Login Page</title>
    <link rel="stylesheet" href="account1_style.css">
<body>
<div class="loginbox">
        <img src="img1/account/avatar.png" class="avatar">
            <h1>Login Here</h1>
    <form action="login.php" method="post" name="form1">
    <p>Username</p>
                <input type="text" name="email" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="login" value="Login">
                <a href="register.php">Don't have an account? Register Here.</a>
             </form>
    </div>
    </div>
   
</body>

</html>


