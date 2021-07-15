<?php
session_start();
include("connection/connection2.php");
include("config/function.php");
$user_data = check_login($con);     // call check_login funtiion to check user is log or not
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<title>card payment</title>
<link rel="stylesheet" href="css/payment.css">
</head>
<body style="background-color:#ffae42">
<div id="box" class="form_one" style=" margin-top: 100px; margin-right:50%; margin-left; 500px,width: 500px;" >
    <h1 class="che">Your order success</h2>
    <img src="images\im2.jpg" width="500px"  >
</div> 
</body>

</html>