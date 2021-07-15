
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
<div >
<div id="box" class="form_three" style=" margin-top: 100px; margin-right:50%; margin-left; 500px,width: 500px;" >
    <h2 class="che">card payment</h2>
        <form  action="card_payment.php" >
        <label for="card_payment">Owner name</label>
            <input id="text" type="text" name="owner" placeholder="Owner name"><br><br>
            <label for="card_payment">Card number</label>
            <input id="text" type="text" name="cardno"  placeholder="Card number"><br><br>
            <label for="card_payment">Expire date</label>
            <input id="date" type="date" name="date"  placeholder="Expire date"><br><br>
            <label for="card_payment">Cvv</label>
            <input id="text" type="text" name="cvv"  placeholder="cvv"  > <br><br>

            <input type="radio" name="payment"></a></input>
            <label for="card_payment">visa</label><br>
            <input type="radio" name="payment" ></a></input>
            <label for="cash_payment">master</label><br>
            <img src="images\img.png" width="100px" >
           
            <input id="button" type="submit" value="submit" style='width="500px"'><br><br>
            
        </form>
</div>
</div>
</body>
</html>