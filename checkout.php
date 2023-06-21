<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>
    

<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Checkout Process</h3>
                        <p>Fill in the data in below</p>
                        <form  action="checkout.php" method="POST" class="requires-validation" novalidate >

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name" required>
            
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="Address" placeholder="Address" required>
                                 
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="email" placeholder="Email" required>
                                 
                            </div>



                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Select Payment Method:</label><br>

                            <input type="radio" class="btn-check" name="pay" id="pay" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="male">Net Banking</label><br>

                            <input type="radio" class="btn-check" name="pay" id="pay" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="secret">Cash on Delivery</label>
                               
                            </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">I confirm that all data are correct</label>
                         <div class="invalid-feedback">Are you ready to place th Order? If sure then press Confirm Button.</div>
                        </div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" name="Send" class="btn btn-primary">Confirm Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    
<?php
// PHP program to pop an alert
// message box on the screen
  
// Function definition
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
?>
    <?php
        include("db.php");

        if (isset($_POST['Send'])){
             // this is your Email address
            $add    = $_POST['Address'];
            $name = $_POST['name'];
            $to = $_POST['email'];
            
    $sql=mysqli_query($mysqli,"INSERT INTO `checkout`(`address`, `name`, `email`) VALUES ('$add','$name','$to')");

                if ($sql) {
                    function_alert("Order Done Successfully");
                } else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                }
        
        }

        ?>
<?php
// if (isset($_POST['Send'])){
//     $to=$_POST['email'];
$to_email = "drituparna072@gmail.com";

$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: rituparnadas67@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>
</html>
