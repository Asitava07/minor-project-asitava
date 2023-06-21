<?php
 include("db.php"); 
//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM cart WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:Cart1.php");
?>
